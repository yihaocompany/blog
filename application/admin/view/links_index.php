<div class="aright">
    <div class="arz" style="float: left;margin: 0px 20px 20px 30px;"><a href="{:url('links/edit')}"><i
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
            <volist name="list" id="vo">
                <tr>
                    <td align="center">{$vo.id}</td>
                    <td align="left">{$vo.title}</td>
                    <td align="center">{$vo['url']|default="无url"}</td>
                    <td align="center">{$vo['description']|default="无url"}</td>
                    <td align="center">
                        <input type="checkbox"  lay-filter="choice" value="{$vo.id}" <if( $vo.status=="1")> checked </if>>
                    </td>
                    <td align="center">
                        <a href="{:url('links/edit',['id'=>$vo['id']])}" class="layui-btn layui-btn-small">修改</a>

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
        form.on('checkbox(choice)', function(data){
                //console.log(data);

            var id=data.elem.value;
            var status=0;
            if(data.elem.checked){
                status=1;
            }
            var postdata={'id':id,'status':status};
            $.post("{:url('links/disable')}",postdata,function(res){
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