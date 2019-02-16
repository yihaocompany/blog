<div class="aright">
    <div class="arz" style="float: left;margin: 0px 20px 20px 30px;"><a href="{:url('article/edit')}"><i class="layui-icon">&#xe608;</i>添加文章</a></div>

    <div style="float: left;">
        <form class="layui-form" action="" method="get">
            <input placeholder="输入id" name="id" value="<?php echo input('id'); ?>" type="text" class="layui-input" style="float: left;margin-right: 10px;width: 70px;">
            <button class="layui-btn" style="float: left;" value="查询" type="submit">查询</button>

        </form>
    </div>


    <form method="post" class="layui-form aform cl " >
        <table width="100%" cellspacing="2" cellpadding="2">
            <tr>
                <th width="2%" align="center">id</th>
                <th width="15%" align="center">文章标题</th>
                <th width="7%" align="center">封面图</th>
                <th width="5%" align="center">文章类型</th>
                <th width="5%" align="center">首页图片显示</th>
                <th width="5%" align="center">状态</th>
                <th width="10%" align="center">添加时间</th>
                <th width="5%" align="center">基本操作</th>
            </tr>
            <volist name="list" id="vo">
                <tr>
                    <td align="center">{$vo.id}</td>
                    <td align="left"><a target="_blank" href="/info/{$vo.id}/">{$vo.title}</a></td>
                    <td align="center"><img src='{$vo.img|default=""}' height="50"></td>
                    <td align="center">{$type[$vo['type']]}</td>
                    <td align="center">
                        <input type="checkbox" lay-skin="switch"  lay-filter="choice" value="{$vo.id}"    <if($vo.homead==1)>
                        checked
                        </if> >
                    </td>
                    <td align="center">{$notes['status'][$vo['status']]}</td>
                    <td align="center">{$vo.c_time}</td>
                    <td align="center">
                        <a href="{:url('article/edit',['id'=>$vo['id']])}" class="layui-btn layui-btn-small">修改</a>
                    </td>
                </tr>
            </volist>
        </table>

    </form>
    <div class="pages">
        {$pages|raw}
    </div>
</div>
<script>

    layui.use('form', function () {
        var form = layui.form();
        form.on('switch(choice)', function(data){

            var id=data.elem.value;
            var homead=0;
            if(data.elem.checked){
                homead=1;
            }
            var postdata={'id':id,'homead':homead};

            $.post("{:url('article/homead')}",postdata,function(res){

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