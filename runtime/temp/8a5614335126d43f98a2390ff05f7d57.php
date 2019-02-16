<?php /*a:2:{s:54:"D:\wwwroot\blog\application\admin\view\public_head.php";i:1550302056;s:53:"D:\wwwroot\blog\application\admin\view\links_edit.php";i:1550303255;}*/ ?>
<link rel="stylesheet" href="/src/admin/wangEditor/css/wangEditor.min.css">
<script type="text/javascript" src="/src/admin/wangEditor/js/wangEditor.min.js"></script>
<div class="aright">
    <fieldset class="layui-elem-field layui-field-title" style="margin: 20px 30px 20px 20px;">
        <legend><?php echo isset($info['id']) ? '修改' : '添加'; ?>友情链接</legend>
    </fieldset>
    <form class="layui-form bform" method="post" enctype="multipart/form-data">
        <div class="layui-form-item">
            <label class="layui-form-label">网站名</label>
            <div class="layui-input-block">
                <input type="text" name="title" required lay-verify="required" value="<?php echo htmlentities($info['title']); ?>" placeholder="必填内容" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">网址(http://)</label>
            <div class="layui-input-block">
                <input type="text" name="url" required lay-verify="required" value="<?php echo htmlentities($info['url']); ?>" placeholder="必填内容" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">网站说明</label>
            <div class="layui-input-block">
                <input type="text" name="description" required lay-verify="required" value="<?php echo htmlentities($info['description']); ?>" placeholder="必填内容" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <div class="layui-input-block">
                <input type="hidden" name="id" value="<?php echo htmlentities($info['id']); ?>">
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