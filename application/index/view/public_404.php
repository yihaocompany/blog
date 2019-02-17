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
    <include file="public:aside" />
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
