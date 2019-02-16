<?php /*a:1:{s:58:"D:\wwwroot\blog.com\application\admin\view\index_index.php";i:1550285314;}*/ ?>
<div class="aright">
    <div class="aright_1">
        <blockquote style="padding: 10px;border-left: 5px solid #FF5722;" class="layui-elem-quote">系统信息：</blockquote>
        <table width="100%">
            <tr><td>服务器类型</td><td><?php echo php_uname('s'); ?></td></tr>
            <tr><td>PHP版本</td><td><?php echo PHP_VERSION; ?></td></tr>
            <tr><td>Zend版本</td><td><?php echo Zend_Version(); ?></td></tr>
            <tr><td>服务器解译引擎</td><td><?php echo $_SERVER['SERVER_SOFTWARE']; ?></td></tr>
            <tr><td>服务器语言</td><td><?php echo $_SERVER['HTTP_ACCEPT_LANGUAGE']; ?></td></tr>
            <tr><td>服务器Web端口</td><td><?php echo $_SERVER['SERVER_PORT']; ?></td></tr>
        </table>
        <blockquote style="padding: 10px;border-left: 5px solid #FF5722;" class="layui-elem-quote">开发团队：</blockquote>
        <table width="100%">
            <tr><td width="110px">版权所有</td><td>YihaoBlog开发团队保留所有权利</td></tr>
            <tr><td>感谢贡献者</td><td>Thinkphp，Layer，王海滨</td></tr>
            <tr><td>特别提醒您</td><td>本程序均可免费下载使用，但严禁删除、隐藏或更改版权信息，且导致的一切损失由使用者自行承担。</td></tr>
            <tr><td>程序源代码(git)</td><td><a href='http://https://github.com/yihaocompany/blog' target="_blank" style='color: blue;'>请尊重源码提供者，本后端只是简单的博客文章管理</a></td></tr>
        </table>
    </div>      
</div>