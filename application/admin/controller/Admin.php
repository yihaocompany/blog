<?php
namespace app\admin\controller;
use app\Common\Controller\AdminBaseController;
use think\Exception;

class Admin extends AdminBaseController {
    protected $mod;
    public function __construct() {
        parent::__construct();
        $this->mod = new \app\admin\model\adminModel();
        $this->assign('notes', $this->mod->notes);
    }
    public function index() {
        $page = input('page', 1);
        $pageSize = 5; //每页显示的数量
        $where = [];
        if (input('id')) {
            $where[] = ['id', '=', input('id')];
        }
        $list  = $this->mod->getList($where, $page, $pageSize);
        $count = $this->mod->getCount($where);
        $pageparam = $this->mod->_pageparam();
        $Page = new \think\paginator\driver\Bootstrap($list, $pageSize, $page, $count, FALSE, $pageparam);
        $show = $Page->render();
        $this->assign('list', $list);
        $this->assign('pages', $show);
        return $this->adminTpl();
    }


    public function disable(){
        $id = input('id');
        $info = $this->mod->getOne($id);
        if($info["username"]!="admin"){
            $where['id'] = $id;
            $return=$data['status']=1-$info["username"];
            $return and $this->success('操作成功', CONTROLLER_NAME . '/index', NULL, 1) or $this->error('操作失败');
        }else{
            $this->error('保留用户名不能修改');
            exit;
        }
    }

    public function edit() {
        $id = input('id');
        $info = $this->mod->getOne($id);
        $this->assign('info', $info);
        if (IS_POST) { //数据操作
            $data = input('post.');
            unset( $data['id']);
            if(!isset($data['username'])){
                $data['username']="admin";
            }

            if($info['username']=="admin"){
                if(trim($data['username'])!="admin"){
                    $this->error('保留用户名不能修改');
                    exit;
                }
            }
            if(strlen(trim($data['username']))>8 or strlen(trim($data['username']))<4){
                $this->error('用户名长度需为8到4位之间');
                exit;
            }
            if(strlen(trim($data['password']))!=8){
                $this->error('密码长度需为8位');
                exit;
            }
            $data['username']=trim( $data['username']);
            $data['password']=md5(trim( $data['username']));
            try {
            if ($id) { //更新数据u
                $where['id'] = $id;
                $data['create_at'] =strtotime('now');
                $x = $this->mod->Dosave($data, $where);
            } else { //添加数据

                $data['create_at'] =strtotime('now');
                $x = $this->mod->Doadd($data);
            }
            }catch (Exception $e) {
                $this->error('操作失败');
                exit;
            }

            $x and $this->success('操作成功', CONTROLLER_NAME . '/index', NULL, 1) or $this->error('操作失败');
        } else {
            return $this->adminTpl();
        }
    }



}
