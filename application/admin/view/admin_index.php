<div class="aright">
    <div class="arz" style="float: left;margin: 0px 20px 20px 30px;"><a href="{:url('admin/edit')}"><i class="layui-icon">&#xe608;</i>添加管理员</a></div>


    <form method="post" class="layui-form aform cl " >
        <table width="100%" cellspacing="2" cellpadding="2">
            <tr>
                <th width="2%" align="center">id</th>
                <th width="15%" align="center">用户名</th>
                <th width="10%" align="center">添加时间</th>
                <th width="5%" align="center">基本操作</th>
            </tr>
            <volist name="list" id="vo">
                <tr>
                    <td align="center">{$vo.id}</td>
                    <td align="left">{$vo.username}</td>
                    <td align="center">{$vo.create_at|date="Y-m-d H:i"}</td>
                    <td align="center">
                        <a href="{:url('admin/edit',['id'=>$vo['id']])}" class="layui-btn layui-btn-small">修改</a>
                        <a href="{:url('admin/disable',['id'=>$vo['id']])}" class="layui-btn layui-btn-small">
                            <?php if($vo['status']==0){
                                echo "点击生效";
                            }else{
                                   echo "点击失效";
                            }?>
                        </a>
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

    });
</script>