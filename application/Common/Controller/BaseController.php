<?php

namespace app\Common\Controller;

use think\Controller;
use think\Db;
use think\Cache;
class BaseController extends Controller {

    public function __construct() {
        parent::__construct();
        include_once dirname(dirname(__FILE__)) . "/const.php";
        include_once dirname(dirname(__FILE__)) . "/define.php";
        $this->Configs();
    }



    protected function Configs(){
        if(!cache('config')) {
            $items=Db::table('config')->select();
            foreach ($items as $item){
                if($item['type']=='img'){
                    $configs[$item['ckey']]=  "<img src='".$item['cvalue']."'>";
                }else{
                    $configs[$item['ckey']]=  $item['cvalue'];
                }
            }
            cache('config',$configs,60*600);
        }

        $this->assign('configs', cache('config'));

    }

}
