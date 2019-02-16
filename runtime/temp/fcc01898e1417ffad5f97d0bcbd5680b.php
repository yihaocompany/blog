<?php /*a:3:{s:54:"D:\wwwroot\blog\application\index\view\public_head.php";i:1550296715;s:53:"D:\wwwroot\blog\application\index\view\info_index.php";i:1549998651;s:55:"D:\wwwroot\blog\application\index\view\public_aside.php";i:1550292744;}*/ ?>
<div id="main">
    <div id="soutab">
    </div>
    <!-- /header -->
    <div id="container">
        <nav id="mbx">当前位置: <a href="javascript:void(0);" onclick="window.history.go(-1);">返回</a> &gt; <a href="/?type=<?php echo htmlentities($info['type']); ?>"><?php echo htmlentities($headernav[$info['type']]); ?></a></nav>
        <article class="content">
            <header class="contenttitle">
                <a href="javascript:;" class="count"></a>
                <div class="mscc">
                    <h1 class="mscctitle"> 
                        <a><?php echo htmlentities($info['title']); ?></a></h1>
                    <address class="msccaddress ">
                        <time><?php echo htmlentities($info['c_time']); ?></time> 
                    </address>
                </div>
            </header>
            <div class="content-text">
                <?php echo $info['content']; ?>
            </div>
            <!--content_text-->
        </article>
        <!--content-->
        <div  class='button_to_top'>
            <button>返回顶部</button>
        </div>
        <!--百度分享-->
        <?php if (!checkWap()): ?>
            <div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></div>
            <script>
                window._bd_share_config = {"common": {"bdSnsKey": {}, "bdText": "", "bdMini": "2", "bdMiniList": false, "bdPic": "", "bdStyle": "1", "bdSize": "24"}, "share": {}};
                with (document)
                    0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = '/static/api/js/share.js?v=89860593.js?cdnversion=' + ~(-new Date() / 36e5)];
            </script>
        <?php endif; ?>
        <div class="comment" id="comments">
            <!--这里填写第三方评论代码-->
        </div>
        <!-- .nav-single -->
    </div>
    <!--Container End-->
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
<script>
    $(function () {
        $('.button_to_top').click(function () {
            $('html,body').animate({scrollTop: '0px'}, 700);
        });
    });
</script>