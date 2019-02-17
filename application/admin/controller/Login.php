<?php

namespace app\admin\controller;

use app\Common\Controller\AdminBaseController;
use app\admin\model\adminModel as adminmodel;

class Login extends AdminBaseController {

    public function __construct() {
        parent::__construct(FALSE);

    }


    public function verify()
    {
        $config =    [
            // 验证码字体大小
            'fontSize'    =>    15,
            // 验证码位数
            'length'      =>    3,
            // 关闭验证码杂点
            'useNoise'    =>    false,
            'codeSet'  => '2345678abcdefhijkmnpqrstuvwxyzABCDEFGHJKLMNPQRTUVWXY',
            'reset'    => false
        ];


        $captcha = new \think\captcha\Captcha($config);
        return $captcha->entry();
    }


    public function index() {

        return $this->fetch();
    }

    public function login() {
        if (IS_POST) {
            $username = trim(input('post.username'));
            $password = trim(input('post.password'));

            $verify = trim(input('post.verify'));

            if(!captcha_check($verify)){
                $ret = ['code' => 0, 'msg' => '验证码错误'];
                return json($ret);

            }

            if(strlen($username)<4 and strlen($username) ){
                $ret = ['code' => 0, 'msg' => '用户名4到8位'];
                return json($ret);
            }

            if(strlen($password)!=8 ){
                $ret = ['code' => 0, 'msg' => '密码需要为8位'];
                return json($ret);
            }

            $admin = new adminmodel();
            $data=array('username'=>$username,'password'=>md5($password),'status'=>1);
            $count=$admin->getCount( $data);
            if ($count!=1) {
                $ret = ['code' => 0, 'msg' => '帐号或密码错误'];
                return json($ret);
            }
            session('admin_uid', 1);
            session('username', $username);
            $ret = ['code' => 1, 'msg' => ''];
            return json($ret);
        }
    }

    public function out() {
        session('admin_uid', NULL);
        $url = url("login/index");
        $this->redirect($url);
    }

}
