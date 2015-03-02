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
		$this->cate = spClass('m_category')->findAll(null, 'cid ASC, id DESC');
		// 视频推荐列表
		$this->prod = spClass('m_prod')->findAll(array('visible' => 1), 'views DESC, id DESC');
				
		$this->display('index.html');
	}

	public function prod() {
		$this->__TYPE = 'prod';

		if (false != $pid = $this->spArgs('pid')) {

			$prow = spClass('m_prod')->spLinker()->find(array('pid' => $pid));

			$thumb = spClass('m_thumb')->find(array(
				'thumb' => $prow['thumb']
				), null, 'photo'
			);
			$prow['photo'] = $thumb['photo'];

			$this->prow = $prow;
			// 访问量+1
			spClass('m_prod')->query("UPDATE bf_prod SET views = views + 1 WHERE pid = '$pid'");
			// 上一页，下一页
			$this->prev = spClass('m_prod')->find("channel_id='$prow[channel_id]' AND pid > '$pid'", 'pid ASC');
			$this->next = spClass('m_prod')->find("channel_id='$prow[channel_id]' AND pid < '$pid'", 'pid DESC');
			// 分类
			$this->crow = $crow = spClass('m_category')->find(array('cid' => $prow['channel_id']));
			$this->__PID = $crow['pid'];

			// 标签
			$this->tags = $tags = spClass('m_tags')->spLinker()->findAll(array('video_id' => $prow['pid']));

			// 评论
			$this->comment = $comment = spClass('m_comment')->spLinker()->findAll(array('author_id' => $prow['author_id'], 'pid' => $prow['pid']), 'reply_num DESC, addtime DESC, id ASC');

			$this->display('video.html');

		} elseif ($channel_id = intval($this->spArgs('channel_id'))) {
			$page = intval($this->spArgs('page')) <= 0 ? 1 : intval($this->spArgs('page'));
			$this->prodList = spClass('m_prod')->spLinker()->spPager($page, 9)->findAll(array('channel_id' => $channel_id, 'visible' => 1, 'views DESC, id DESC'));

			$pager = spClass('m_prod')->spPager()->getPager();
			$newUrl = spUrl('main', 'prod', array('pid' => $pid));

			if (!in_array($channel_id, array(1, 2))) {
				$crow = spClass('m_category')->find(array('cid' => $channel_id));
				$this->__CID = $crow['cid'];
				$this->display('videoList.html');
			} else {
				$this->__CID = $channel_id;
				$this->display('videoList-'. $channel_id . '.html');
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