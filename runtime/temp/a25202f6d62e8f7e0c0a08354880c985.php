<?php /*a:1:{s:58:"D:\wwwroot\blog.com\application\index\view\public_foot.php";i:1550292800;}*/ ?>
<div class='actGotop'>
    <a href='javascript:void(0);'><img src='/src/blog/image/top.png' /></a>
</div>
<footer id="dibu">
    <div class="about">
        <div class="right">
            <ul id="menu-bottom-nav" class="menu">
               <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="#">友链1</a></li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="#">友链1</a></li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="#">友链1</a></li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="#">友链1</a></li>
            </ul>
            <p class="banquan">
               <?php echo htmlentities($configs['webname']); ?>
            </p>
        </div>
        <div class="left">
            <ul class="bottomlist">
            </ul>
        </div>
    </div>
    <!--about-->
    <div class="bottom">
        <a href="javascript:;" target="_blank">Copyright &copy; <?php echo date('Y'); ?></a>
        &nbsp;&nbsp;&nbsp;
        <a href="http://www.miibeian.gov.cn/" target="_blank" rel="nofollow"><?php echo htmlentities($configs['ipc']); ?></a>

        技术支持:<?php echo htmlentities($configs['tec']); ?>
        &nbsp;&nbsp;&nbsp;
        <a href="http://www.thinkphp.cn/" target="_blank" rel="nofollow">基于 Thinkphp<?php echo think\App::VERSION; ?></a>
        <div class="tongji">
            <!-- 添加站长统计代码 -->
        </div>
    </div>
    <!--bottom-->
</footer>
<!-- /footer -->
<input type='hidden' class='iswap' value="<?php echo checkWap() ? 1 : 0; ?>">
<script type="text/javascript" src="/src/blog/js/blog.js?v=1.0"></script>
<script type="text/javascript" src="https://apps.bdimg.com/libs/jquery-lazyload/1.9.5/jquery.lazyload.js"></script>
</body>
</html>