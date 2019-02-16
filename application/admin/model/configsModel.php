<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/14 0014
 * Time: 4:59
 */

namespace app\admin\model;

use app\Common\Model\CommonModel;

class configsModel extends CommonModel
{

    // 设置当前模型对应的完整数据表名称
    protected $table = 'config';
    protected $pk = 'id'; //主键
    public function __construct() {
        parent::__construct();
    }
    public $stype= array('txt'=> '文本', 'img' => '图片');

    public function selectall(){
        return DbModel($this->table)->select();

    }



    //查询
    public function getList($where = '', $page = 1, $pageSize = 20, $order = '') {
        if (!$order) {
            $order = $this->pk . " DESC";
        }
        return  DbModel($this->table)->where($where)->page($page)->limit($pageSize)->order($order)->select();

    }

    public function getCount($where = array()) {
        $count = DbModel($this->table)->where($where)->count();
        return $count;
    }

    public function getField($where = "", $field = "*", $order = '', $limit = '') {
        if (!$order) {
            $order = $this->pk . " DESC";
        }
        $list = DbModel($this->table)->where($where)->order($order)->limit($limit)->column($field);
        return $list;
    }

//读取
    public function getOne($id = '', $where = '') {
        if ($where) {
            $info = DbModel($this->table)->where($where)->find();
        } else {
            $info = isset($id) ? DbModel($this->table)->find($id) : NULL;
        }
        return $info;
    }

//更新
    public function Dosave($data, $where) {
        $ret = DbModel($this->table)->where($where)->strict(false)->update($data);
        return $ret;
    }

//增加
    public function Doadd($data) {
        $id = DbModel($this->table)->strict(false)->insertGetId($data);
        return $id;
    }

//删
    public function Dodel($id, $where) {
        if ($id) {
            $where['id'] = $id;
        }
        $x = DbModel($this->table)->where($where)->delete();
        if ($x) {
            return true;
        } else {
            return false;
        }
    }

}