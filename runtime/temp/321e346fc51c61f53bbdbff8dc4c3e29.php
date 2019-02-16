<?php /*a:2:{s:54:"D:\wwwroot\blog\application\admin\view\public_head.php";i:1550302056;s:54:"D:\wwwroot\blog\application\admin\view\links_index.php";i:1550304416;}*/ ?>
<div class="aright">
    <div class="arz" style="float: left;margin: 0px 20px 20px 30px;"><a href="<?php echo url('links/edit'); ?>"><i
                    class="layui-icon">&#xe608;</i>添加友情链接</a></div>


    <form method="post" class="layui-form aform cl ">
        <table width="100%" cellspacing="2" cellpadding="2">
            <tr>
                <th width="2%" align="center">id</th>
                <th width="15%" align="center">网站名</th>
                <th width="10%" align="center">网址（输入http://）</th>
                <th width="10%" align="center">网站说明</th>
                <th width="10%" align="center">有效</th>
                <th width="5%" align="center">基本操作</th>
            </tr>
            <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <tr>
                    <td align="center"><?php echo htmlentities($vo['id']); ?></td>
                    <td align="left"><?php echo htmlentities($vo['title']); ?></td>
                    <td align="center"><?php echo htmlentities((isset($vo['url']) && ($vo['url'] !== '')?$vo['url']:"无url")); ?></td>
                    <td align="center"><?php echo htmlentities((isset($vo['description']) && ($vo['description'] !== '')?$vo['description']:"无url")); ?></td>
                    <td align="center">
                        <input type="checkbox"  lay-filter="choice" value="<?php echo htmlentities($vo['id']); ?>" <?php if(( $vo['status']=="1")): ?> checked <?php endif; ?>>
                    </td>
                    <td align="center">
                        <a href="<?php echo url('links/edit',['id'=>$vo['id']]); ?>" class="layui-btn layui-btn-small">修改</a>

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
        form.on('checkbox(choice)', function(data){
                //console.log(data);

            var id=data.elem.value;
            var status=0;
            if(data.elem.checked){
                status=1;
            }
            var postdata={'id':id,'status':status};
            $.post("<?php echo url('links/disable'); ?>",postdata,function(res){
                if(res.status){
                    layer.msg(res.info, {time: 2000});
                }else{
                    layer.msg(res.info, {time: 2000});
                }
            },'json');
            return false;
        });



    });
</script>