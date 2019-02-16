<?php /*a:1:{s:58:"D:\wwwroot\blog.com\application\admin\view\public_head.php";i:1550295724;}*/ ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title><?php echo htmlentities($configs['webname']); ?></title>
        <link rel="stylesheet" href="/src/admin/css/admin.css">
        <link rel="stylesheet" href="/src/admin/layui/css/layui.css">
        <script src="https://apps.bdimg.com/libs/jquery/1.8.0/jquery.min.js"></script>
        <script src="/src/admin/layui/layui.js"></script>
    </head>
    <body>
        <div class="header">
            <h2 class="z cl"><a href="<?php echo url('index/index'); ?>"><?php echo htmlentities($configs['webname']); ?></a></h2>
            <div class="y cl">
                <a target="_blank" href="<?php echo url('/'); ?>">网站首页</a>
                <a href="<?php echo url('login/out'); ?>">退出</a>
            </div>
        </div>
        <div class="admin">
            <div class="aleft">
                <h3><i class="layui-icon" style="position: relative;right: 3px;top: 1px;font-size: 18px;color: #009688;">&#xe643;</i>操作菜单</h3>
                <ul class="cl">
                    <li><i class="layui-icon ">&#xe63c;</i><a href="<?php echo url('Admin/index'); ?>">密码管理</a></li>
                    <li><i class="layui-icon">&#xe63c;</i><a href="<?php echo url('Article/index'); ?>">文章管理</a></li>
                    <li><i class="layui-icon">&#xe63c;</i><a href="<?php echo url('Category/index'); ?>">栏目管理</a></li>
                    <li><i class="layui-icon">&#xe63c;</i><a href="<?php echo url('Background/index'); ?>">背景图管理</a></li>
                    <li><i class="layui-icon">&#xe63c;</i><a href="<?php echo url('Friends/index'); ?>">友情链接</a></li>
                    <li><i class="layui-icon">&#xe63c;</i><a href="<?php echo url('Configs/index'); ?>">配置管理</a></li>
                </ul>
            </div>
        </div>