<?php
defined('APP_PATH') or exit('Access Denied');
require('base.php');

class main extends base {
	public function index(){
		// 首页大图幻灯
		$this->swap = spClass('m_swap')->findAll(null, 'shownum ASC, id DESC');
		// 公告
		$this->notice = $notice = spClass('m_notice')->findAll(null, 'id ASC');
		// 分类菜单 -- cid: 分类ID
		$this->cate = spClass('m_category')->findAll("stat < '0'", 'cid ASC, id DESC');
		// 视频推荐列表
		$this->prod = spClass('m_prod')->findAll(array('visible' => 1), 'views DESC, id DESC');
				
		$this->display('index.html');
	}

	public function prod() {
		$this->__TYPE = 'prod';

		if ($id = intval($this->spArgs('id'))) {

			$prow = spClass('m_prod')->spLinker()->find(array('id' => $id));

			$thumb = spClass('m_thumb')->find(array(
				'thumb' => $prow['thumb']
				), null, 'photo'
			);
			$prow['photo'] = $thumb['photo'];

			$this->prow = $prow;
			// 访问量+1
			spClass('m_prod')->query("UPDATE bf_prod SET views = views + 1 WHERE id = {$id}");
			// 上一页，下一页
			$this->prev = spClass('m_prod')->find("pid='$prow[pid]' AND id > '$id'", 'id ASC');
			$this->next = spClass('m_prod')->find("pid='$prow[pid]' AND id < '$id'", 'id DESC');
			// 分类
			$this->crow = $crow = spClass('m_category')->find(array('cid' => $prow['category']['cid']));
			$this->__PID = $crow['pid'];

			// 标签
			$this->tags = spClass('m_tags')->spLinker()->findAll(array('tid' => $tid));

			// 评论
			$this->comment = spClass('m_comment')->findAll(array('author_id' => $prow['author_id']), 'reply_num DESC, addtime DESC, id ASC');

			$this->display('video.html');
		} elseif ($pid = intval($this->spArgs('pid'))) {
			$page = intval($this->spArgs('page')) <= 0 ? 1 : intval($this->spArgs('page'));
			$this->prodList = spClass('m_prod')->spLinker()->spPager($page, 9)->findAll(array('pid' => $pid, 'visible' => 1, 'views DESC, id DESC'));

			$pager = spClass('m_prod')->spPager()->getPager();
			$newUrl = spUrl('main', 'prod', array('pid' => $pid));

			if (!in_array($pid, array(1, 2))) {
				$crow = spClass('m_category')->find(array('id' => $pid));
				$this->__PID = $crow['pid'];
				$this->display('videoList.html');
			} else {
				$this->__PID = $pid;
				$this->display('videoList-'. $pid . '.html');
			}
		} else {
			$page = intval($this->spArgs('page')) <= 0 ? 1 : intval($this->spArgs('page'));
			$this->videoList = spClass('m_prod')->spLinker()->spPager($page, 9)->findAll(array('visible' => 1), 'views DESC, id DESC');

			$pager = spClass('m_prod')->spPager()->getPager();
			$newUrl = spUrl('main', 'prod');
			$this->pager = self::getpager($newUrl, $pager);
			$this->display('videoList.html');
		}
	}

	public static function getpager($url, $pager) {
		if(empty($pager) || empty($url)) {
			return false;
		}
	}
}