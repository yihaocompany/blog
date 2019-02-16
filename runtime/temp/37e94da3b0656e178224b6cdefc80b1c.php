<?php /*a:2:{s:58:"D:\wwwroot\blog.com\application\admin\view\public_head.php";i:1550295724;s:60:"D:\wwwroot\blog.com\application\admin\view\configs_index.php";i:1550259483;}*/ ?>
<div class="aright">
    <div class="arz" style="float: left;margin: 0px 20px 20px 30px;"><a href="<?php echo url('configs/edit'); ?>"><i class="layui-icon">&#xe608;</i>添加配置</a></div>

    <div style="float: left;">
        <button class="layui-btn layui-btn-primary">
            <a href="<?php echo url('configs/cache'); ?>">
                <i class="layui-icon">&#x1002;</i>更新缓存</a>
        </button>
    </div>

    <form method="post" class="aform cl " >
        <table width="100%">
            <tr>
                <th width="2%" align="center">id</th>
                <th width="15%" align="center">key</th>
                <th width="7%" align="center">value</th>
                <th width="5%" align="center">类型</th>
                <th width="5%" align="center">说明</th>
                <th width="5%" align="center">操作</th>
            </tr>
            <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <tr>
                    <td align="center"><?php echo htmlentities($vo['id']); ?></td>
                    <td align="center"><?php echo htmlentities($vo['ckey']); ?></td>
                     <td>
                        <?php if(($vo['type']=='img')): ?>
                             <img src="<?php echo htmlentities((isset($vo['cvalue']) && ($vo['cvalue'] !== '')?$vo['cvalue']:'')); ?>" width="120">
                        <?php else: ?>
                        <?php echo htmlentities((isset($vo['cvalue']) && ($vo['cvalue'] !== '')?$vo['cvalue']:"")); ?>
                        <?php endif; ?>
                    </td>
                    <td align="center"><?php echo htmlentities($stype[$vo['type']]); ?></td>
                    <td align="center"><?php echo htmlentities($vo['cnote']); ?></td>
                    <td align="center">
                        <a href="<?php echo url('configs/edit',['id'=>$vo['id'],'type'=>$vo['type']]); ?>" class="layui-btn layui-btn-small">修改</a>
                    </td>
                </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </table>
    </form>
    <div class="pages">
        <?php echo $pages; ?>
    </div>
</div>
<script>
</script>