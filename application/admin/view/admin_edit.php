<link rel="stylesheet" href="/src/admin/wangEditor/css/wangEditor.min.css">
<script type="text/javascript" src="/src/admin/wangEditor/js/wangEditor.min.js"></script>
<div class="aright">
    <fieldset class="layui-elem-field layui-field-title" style="margin: 20px 30px 20px 20px;">
        <legend><?php echo isset($info['id']) ? '修改' : '添加'; ?>管理员</legend>
    </fieldset>
    <form class="layui-form bform" method="post" enctype="multipart/form-data">
        <div class="layui-form-item">
            <label class="layui-form-label">用户名</label>
            <div class="layui-input-block">
                <input type="text" name="username" required lay-verify="required" value="{$info.username}" placeholder="必填内容" autocomplete="off" class="layui-input"  <?php if($info['username']=='admin'){ echo "disabled";}?>>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">密码</label>
            <div class="layui-input-block">
                <input type="password" name="password" required lay-verify="required" value="{$info.password}" placeholder="必填内容" autocomplete="off" class="layui-input">
            </div>
        </div>

        <div class="layui-form-item">
            <div class="layui-input-block">
                <input type="hidden" name="id" value="{$info.id}">
                <button class="layui-btn" lay-filter="formDemo" >立即提交</button> 
            </div>
        </div>
    </form>
</div>

<script>
    layui.use('form', function () {
        var form = layui.form();
    });

</script>