<?php

namespace app\Common\Controller;
use think\Db;
use think\Cache;
class BlogBaseController extends BaseController {

    public function __construct() {
        parent::__construct();
        $this->blogHeadNav();
        $this->blogimg();
        $this->links();
    }

//获取博客头部分类 、写到缓存
    protected function blogHeadNav() {
        if(!cache('headernav')){
            $category = new \app\admin\model\categoryModel();
            $headernav = $category->getField(['status' => 1], 'id,title', 'sort asc');
            cache('headernav',$headernav,60*600);
        }

        $this->assign('headernav',  cache('headernav'));

    }
//获取图片配置 、写到缓存
    public  function blogimg(){
        if(!cache('backimg')){
            $background = new \app\admin\model\backgroundModel();
            $backimg = $background->getOne(1);
            cache('backimg',$backimg,60*600);
        }
        $this->assign('backimg', cache('backimg'));
    }

//获取友情链接、写到缓存

    public  function links(){
        if(!cache('links')){
            $linksrecords = new \app\admin\model\linksModel();
            $links = $linksrecords->getField(['status' => 1], 'id,title,url,description', 'id asc');
            cache('links',$links);
        }
        $this->assign('listlinks',  cache('links'));
    }


    public function jump404() {
        //只有在app_debug=False时才会正常显示404页面，否则会有相应的错误警告提示
        abort(404, '页面异常');
    }

    public function blogTpl() {
        //直接引入头部和底部文件，在新建页面模版的时候省去重复引入的环节
        $contrroller = strtolower(CONTROLLER_NAME);
        $action = strtolower(ACTION_NAME);
        return $this->fetch('public:head') . $this->fetch($contrroller . '_' . $action) . $this->fetch('public:foot');
    }

    //空方法
    public function _empty() {
        return $this->jump404();
    }

}
