<?php
defined('APP_PATH') or exit ('Access Denied');

class beansupport {
	private $originList = array();
	private $newList = array();
	private $io = array(' | ', ' ├  ', ' └ ');
	private $field = array();

	public function __construct() {
		$this->field['id'] = isset($field['0']) ? $field['0'] : 'id';
		$this->field['cid'] = isset($field['1']) ? $field['1'] : 'cid';
		$this->field['title'] = isset($field['2']) ? $field['2'] : 'title';
		// $this->field['description'] = isset($field['3']) ? $field['3'] : 'description';

	}

	public function getChild($vid, $data = array()) {
		$children = array();
		if (empty($data)) {
			$data = $this->originList;
		}
		foreach ($data as $cate) {
			if ($cate[$this->field['cid']] == $vid) {
				$children = $cate;
			}
		}

		return $children;
	}

	public function getMother($data, $id = 0) {
		if (empty($data)) {
			return false;
		}

		$this->originList = array();
		$this->newList = array();
		$this->originList = $data;
		$this->_searchList($id);

		return $this->newList;
	}

	private function _searchList($id = 0, $space = "") {
		$children = $this->getChild($id);
		if (!$length = count($children)) {
			return;
		}

		for ($i = 0, $foo = 1; $i < $length; $i++) { 
			$pre = "", $pad = "";
			if ($length == $foo) { $pre = $this->io[2] }
				else { 
					$pre = $this->io[1]; 
					$pad = $space ? $this->io[0] : "";
				}
			// $children[$i][$this->field['description']] = ($space ? $space.$pre : "").$children[$i][$this->field['title']];
			$this->newList[] = $children[$i];
			$this->_searchList($children[$i][$this->field['id']], $space.$pad."&nbsp;&nbsp;");

			$foo++;
		}

	}
}