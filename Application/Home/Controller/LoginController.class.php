<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {


	// 用户登录
    public function login() {
        $this->display();
    }


    // 用户注册
    public function register() {
    	$this->display();
    }


    // 生成验证码
    public function codeMake() {
    	$config = array(
    			'fontSize'  =>  17,
    			'length'    =>  4,
    			'useNoise'  =>  true,
    			'useImgBg'  => true,
    			'useCurve'  => false,
    		);
    	$Verify = new\Think\Verify($config);
    	$Verify->entry();
    }


    // QQ登录
    public function qqLogin() {

    }


}