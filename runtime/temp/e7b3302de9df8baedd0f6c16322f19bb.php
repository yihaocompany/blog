<?php /*a:2:{s:54:"D:\wwwroot\blog\application\index\view\index_index.php";i:1550087595;s:55:"D:\wwwroot\blog\application\index\view\public_aside.php";i:1550292744;}*/ ?>
<link type="text/css" href="/src/blog/css/jcarousel.css?v=1.08" rel="stylesheet" />
<script type="text/javascript" src="/src/blog/js/jquery.jcarousel.min.js"></script>
<script type="text/javascript" src="/src/blog/js/jquery.pikachoose.min.js"></script>
<script type="text/javascript" src="/src/blog/js/jquery.touchwipe.min.js"></script>
<div id="main">
    <div id="soutab">
    </div>
    <!-- /header -->
    <div id="container">
        <?php if ($tops): ?>
            <div class="pikachoose ">
                <div class="showthispika">
                    <ul id="pikame" class="jcarousel-skin-pika">
                        <?php if(is_array($tops) || $tops instanceof \think\Collection || $tops instanceof \think\Paginator): $i = 0; $__LIST__ = $tops;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <li>
                                <a href="/info/<?php echo htmlentities($vo['id']); ?>/">
                                    <img src="<?php echo htmlentities($vo['img']); ?>"/>
                                </a>
                                <span><?php echo htmlentities($vo['title']); ?></span>
                            </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
            </div>
        <?php endif; if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <section class="list">
                <?php if ($vo['img']): ?>
                    <span class="titleimg">
                        <a href="/info/<?php echo htmlentities($vo['id']); ?>/">
                            <img width="270" height="165" src="/src/blog/image/default.png" data-original="<?php echo htmlentities((isset($vo['img']) && ($vo['img'] !== '')?$vo['img']:'/src/blog/image/default.png')); ?>" class="attachment-thumbnail wp-post-image" />
                        </a>
                    </span>
                <?php endif; ?>
                <div class="mecc">
                    <h2 class="mecctitle">
                        <a href="/info/<?php echo htmlentities($vo['id']); ?>/"><?php echo htmlentities($vo['title']); ?></a> </h2>
                    <address class="meccaddress">
                        <time><?php echo htmlentities($vo['c_time']); ?></time>
                        <a href='/type/<?php echo htmlentities($vo['type']); ?>'><?php echo htmlentities($headernav[$vo['type']]); ?></a>
                    </address>
                    <a href="/info/<?php echo htmlentities($vo['id']); ?>/">
                        <p>
                            <?php echo $vo['desc'] ? htmlspecialchars_decode($vo['desc']) : '暂无简介'; ?>...
                            [查看全文]
                        </p>
                        <div class="readmore">
                            <a class="me_articleItem_readMore" href="/info/<?php echo htmlentities($vo['id']); ?>/">
                                Read More –&gt;
                            </a>
                        </div>
                    </a>
                </div>
                <div class="clear"></div>
            </section>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        <div class="clear"></div>
        <!-- page start -->
        <div class="pageshow">
            <?php echo $page; ?>
        </div>
        <!-- page end -->
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
//            $('.pikachoose').removeClass('pikaloadimg');
        }, 100);
        $("#pikame").PikaChoose({carousel: true, carouselVertical: true});
    });
</script>
