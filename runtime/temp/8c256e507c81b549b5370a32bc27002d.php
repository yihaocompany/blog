<?php /*a:2:{s:58:"D:\wwwroot\blog.com\application\admin\view\public_head.php";i:1550295724;s:58:"D:\wwwroot\blog.com\application\admin\view\admin_index.php";i:1550298623;}*/ ?>
<div class="aright">
    <div class="arz" style="float: left;margin: 0px 20px 20px 30px;"><a href="<?php echo url('admin/edit'); ?>"><i class="layui-icon">&#xe608;</i>添加管理员</a></div>


    <form method="post" class="layui-form aform cl " >
        <table width="100%" cellspacing="2" cellpadding="2">
            <tr>
                <th width="2%" align="center">id</th>
                <th width="15%" align="center">用户名</th>
                <th width="10%" align="center">添加时间</th>
                <th width="5%" align="center">基本操作</th>
            </tr>
            <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <tr>
                    <td align="center"><?php echo htmlentities($vo['id']); ?></td>
                    <td align="left"><?php echo htmlentities($vo['username']); ?></td>
                    <td align="center"><?php echo htmlentities(date("Y-m-d H:i",!is_numeric($vo['create_at'])? strtotime($vo['create_at']) : $vo['create_at'])); ?></td>
                    <td align="center">
                        <a href="<?php echo url('admin/edit',['id'=>$vo['id']]); ?>" class="layui-btn layui-btn-small">修改</a>
                        <a href="<?php echo url('admin/disable',['id'=>$vo['id']]); ?>" class="layui-btn layui-btn-small">
                            <?php if($vo['status']==0){
                                echo "点击生效";
                            }else{
                                   echo "点击失效";
                            }?>
                        </a>
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
    layui.use('form', function () {
        var form = layui.form();

    });
</script>