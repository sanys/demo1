<?php
/**
 * weiyou_jiaoyou模块APP接口定义
 *
 * @author 疯狂的IT世界
 * @url 
 */
defined('IN_IA') or exit('Access Denied');

class Weiyou_jiaoyouModulePhoneapp extends WeModulePhoneapp {
	public function doPageTest(){
		global $_GPC, $_W;
		$errno = 0;
		$message = '返回消息';
		$data = array();
		return $this->result($errno, $message, $data);
	}
	
	
}