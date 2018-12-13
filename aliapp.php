<?php
/**
 * weiyou_jiaoyou支付宝小程序接口定义
 *
 * @author 疯狂的IT世界
 * @url 
 */
defined('IN_IA') or exit('Access Denied');

class Weiyou_jiaoyouModuleAliapp extends WeModuleAliapp {
	public function doPageTest(){
		global $_GPC, $_W;
		// 此处开发者自行处理
		include $this->template('test');
	}
}