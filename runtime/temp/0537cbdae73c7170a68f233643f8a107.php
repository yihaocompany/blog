<?php /*a:3:{s:54:"D:\wwwroot\blog\application\index\view\public_head.php";i:1550416295;s:53:"D:\wwwroot\blog\application\index\view\public_404.php";i:1550415960;s:55:"D:\wwwroot\blog\application\index\view\public_aside.php";i:1550292744;}*/ ?>
<link type="text/css" href="/src/blog/css/jcarousel.css?v=1.08" rel="stylesheet" />
<script type="text/javascript" src="/src/blog/js/jquery.jcarousel.min.js"></script>
<script type="text/javascript" src="/src/blog/js/jquery.pikachoose.min.js"></script>
<script type="text/javascript" src="/src/blog/js/jquery.touchwipe.min.js"></script>
<div id="main">
    <div id="soutab">
    </div>
    <!-- /header -->
    <div id="container">


404 文件不存在

    </div>
    <!--Container-->
    <aside id="sitebar">
    <!--erweima-->
    <div class="sitebar_list">
        <h4 class="sitebar_title">我的相关网站</h4>
        <p>
            <a target="_blank" href="//shang.qq.com/wpa/qunwpa?idkey=<?php echo htmlentities($configs['qqgroup']); ?>">
                <img border="0" src="//pub.idqqimg.com/wpa/images/group.png" alt="<?php echo htmlentities($configs['qqgrouptitle']); ?>" title="<?php echo htmlentities($configs['qqgrouptitle']); ?>">
            </a>
        </p>
        <p>
            <a href="http://diao.info" target="_blank">作者 易好<?php echo htmlentities($configs['author']); ?></a>
        </p>
        <p>
            <a href="http://diao.info" target="_blank">手机 <?php echo htmlentities($configs['phone']); ?></a>
        </p>
        <p>
            <a href="http://diao.info" target="_blank">QQ <?php echo htmlentities($configs['QQ']); ?></a>
        </p>
    </div>
    <div class="mydiv" id="mydiv">
        <a href="javascript:void(0);"><img src="<?php echo htmlentities($backimg['side_img']); ?>" ></a>
    </div>
</aside>
    <!-- /right -->
    <div class="clear"></div>
</div>
<!--main-->
<!--内容结束-->
<script>
    $(function () {
        setTimeout(function () {
            $('.showthispika').fadeIn('slow');
        }, 100);
        $("#pikame").PikaChoose({carousel: true, carouselVertical: true});
    });
</script>
