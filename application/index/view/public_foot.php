<div class='actGotop'>
    <a href='javascript:void(0);'><img src='/src/blog/image/top.png' /></a>
</div>
<footer id="dibu">
    <div class="about">
        <div class="right">
            <ul id="menu-bottom-nav" class="menu">
                <?php foreach ($listlinks as $item) {?>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page">
                        <a href="<?php echo $item['url']?>" target="_blank" title="<?php echo $item['description']?>">
                            <?php echo $item['title']?>
                        </a
                    </li>
                <?php }?>
            </ul>
            <p class="banquan">
               {$configs.webname}
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
        <a href="http://www.miibeian.gov.cn/" target="_blank" rel="nofollow">{$configs.ipc}</a>
        技术支持:{$configs.tec}
        &nbsp;&nbsp;&nbsp;
        <a href="http://www.thinkphp.cn/" target="_blank" rel="nofollow">基于Thinkphp{$Think.VERSION}</a>
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