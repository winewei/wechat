<?php
namespace Wechat\Controller;

use Think\Controller;
use Org\Net\Curl;
use Common\Controller\BaseController;

/**
 * 微信推广页面
 * @author guanxuejun
 *
 */
class WechatController extends BaseController {
    function index(){
		$this->display();
    }
    
    /**
     * OK 大电商 - 1、微电商
     * http://127.0.0.1:120/wechat/weidianshang
     * http://w.f-fusion.com/wechat/weidianshang
     */
    function weidianshang() {
    	$this->display();
    }
    
    /**
     * OK 大电商 - 2、独立商城
     * http://127.0.0.1:120/wechat/dulishangcheng
     * http://w.f-fusion.com/wechat/dulishangcheng
     */
    function dulishangcheng() {
    	$this->display();
    }
    
    /**
     * OK 大电商 - 3、进销存管理
     * http://127.0.0.1:120/wechat/jinxiaocun
     * http://w.f-fusion.com/wechat/jinxiaocun
     */
    function jinxiaocun() {
    	$this->display();
    }
    
    /**
     * OK 整合营销 - 1、品牌整合
     * http://127.0.0.1:120/wechat/pinpaizhenghe
     * http://w.f-fusion.com/wechat/pinpaizhenghe
     */
    function pinpaizhenghe() {
    	$this->display();
    }
    
    /**
     * OK 整合营销 - 2、渠道整合
     * http://127.0.0.1:120/wechat/qudaozhenghe
     * http://w.f-fusion.com/wechat/qudaozhenghe
     */
    function qudaozhenghe() {
    	$this->display();
    }
    
    /**
     * IGNORE 整合营销 - 3、数据整合
     * http://127.0.0.1:120/wechat/shujuzhenghe
     * http://w.f-fusion.com/wechat/
     */
    function shujuzhenghe() {
    	$this->display();
    }
    
    /**
     * OK 关注熔意 - 1、进化论
     * http://127.0.0.1:120/wechat/jinhualun
     * http://w.f-fusion.com/wechat/jinhualun
     */
    function jinhualun() {
    	$this->display();
    }
    
    /**
     * OK 关注熔意 - 2、合作共赢
     * http://127.0.0.1:120/wechat/hezuo
     * http://w.f-fusion.com/wechat/hezuo
     */
    function hezuo() {
    	$this->display();
    }
    
    /**
     * IGNORE 关注熔意 - 3、精选推送
     * http://127.0.0.1:120/wechat/push
     * http://w.f-fusion.com/wechat/
     */
    function push() {
    	$this->display();
    }
    
    /**
     * OK 关注熔意 - 4、联系我们
     * http://127.0.0.1:120/wechat/contact
     * http://w.f-fusion.com/wechat/contact
     */
    function contact() {
    	$this->display();
    }
}