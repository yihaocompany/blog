<?php

namespace app\admin\controller;

use app\Common\Controller\AdminBaseController;

class Links extends AdminBaseController {
    protected $mod;
    public function __construct() {
        parent::__construct();
        $this->mod = new \app\admin\model\linksModel();
       // $this->assign('notes', $this->mod->notes);

    }
    public function index() {
        $page = input('page', 1);
        $pageSize = 5; //每页显示的数量
        $where = [];
        if (input('id')) {
            $where[] = ['id', '=', input('id')];
        }
        $list = $this->mod->getList($where, $page, $pageSize);
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
        if (IS_POST){
            $data['status'] = input('status');
            $where['id'] = $id;
            if($this->mod->Dosave($data, $where)){
                $rdata=array('status'=>1,'info'=>'修改成功');
                cache('links',null);
            }else{
                $rdata=array('status'=>0,'info'=>'修改失败');
            }
        }else{
            $rdata=array('status'=>0,'info'=>'修改失败');
        }


        return json($rdata);
    }


    public function edit() {
        $id = input('id');
        $info = $this->mod->getOne($id);
        $this->assign('info', $info);
        if (IS_POST) { //数据操作
            $data = input('post.');
            unset($data['id']);
            if ($id) { //更新数据u
                $where['id'] = $id;
                $x = $this->mod->Dosave($data, $where);
            } else { //添加数据
                $x = $this->mod->Doadd($data);

            }
            if($x){
                cache('links',null);
            }
            $x  and $this->success('操作成功', CONTROLLER_NAME . '/index', NULL, 1) or $this->error('操作失败');
        } else {
            return $this->adminTpl();
        }
    }



}
