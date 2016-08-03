<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=Edge,chrome=1">
    <meta name="author" content="盛帆电子">
    <meta name="keywords" content="武汉盛帆电子股份有限公司,水、电、气的计量、抄表和收费的解决方案。">
    <meta name="description"
          content="武汉盛帆电子股份有限公司位于中国光谷的汤逊湖畔，是武汉市重点推荐的高新技术企业。公司现有员工500余名，其中本科及以上学历人员180余人，2008年公司资产和销售额均超过亿元。目前，公司已通过ISO9001、ISO14001和OHSAS18001系列认证。">
    <title>关于我们-盛帆电子</title>
    <link rel="stylesheet" href="assets/css/zeptoCarousel.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/media.css">
    <link rel="stylesheet" href="assets/css/about.css">
    <link rel="stylesheet" href="assets/css/about_media.css">

    <!--[if IE]>
    <script>
        (function () {
            if (!/*@cc_on!@*/0)return;
            var e = "header,footer,nav,article,section".split(','), i = e.length;
            while (i--) {
                document.createElement(e[i])
            }
        })()
    </script>
    <style>
        article, aside, dialog, footer, header, section, footer, nav, figure, menu {
            display: block
        }
    </style>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!--首页头部(包括头部和导航菜单)-->
<?php
 include("public/header.html"); ?>

<!-- //localhost/thinkcmfx/index.php?g=portal&m=index&a=render&page=XXX -->
<div class="banner">
    
</div>
<div class="main">
    <div class="breadMenu">
        <a href="" class="home bread1">首页</a><a href="index.php?g=portal&m=index&a=render&page=aboutDefault" class="bread2">关于我们</a><a href="index.php?g=portal&m=index&a=render&page=about3" class="bread3">组织结构</a>
    </div>

    <div class="mainMenu">
        <dl>
            <dd><a href="index.php?g=portal&m=index&a=render&page=aboutDefault">董事长致辞</a></dd>
            <dd><a href="index.php?g=portal&m=index&a=render&page=about2" >公司简介</a></dd>
            <dd><a href="index.php?g=portal&m=index&a=render&page=about3" class="hover">组织结构</a></dd>
            <dd><a href="index.php?g=portal&m=index&a=render&page=about4">资质荣誉</a></dd>
            <dd><a href="index.php?g=portal&m=index&a=render&page=about5">品质保障</a></dd>
            <dd><a href="index.php?g=portal&m=index&a=render&page=about6">企业文化</a></dd>
            <dd><a href="index.php?g=portal&m=index&a=render&page=about7">大事记</a></dd>
            <dd><a href="index.php?g=portal&m=index&a=render&page=about8">视频宣传</a></dd>
        </dl>
    </div>

    <div class="Single" style="height:auto">
        <div class="composition">
            <img src="assets/images/single/架构图.jpg" alt="" style="position:relative;right:45px">
        </div>
    </div>
</div>

<?php
include("public/footer.html"); ?>

 <?php
 $user_agent = $_SERVER['HTTP_USER_AGENT']; if(stristr($user_agent,'iPad') ||stristr($user_agent,'Android')||stristr($user_agent,'iPhone') ) { ?>
        <script src ='assets/plugins/zepto.min.js' ></script>
        <script src='assets/js/index_mobile.js'></script>
        <script src='assets/js/zeptoCarousel.js'></script>
       

    <?php
 $fb_fs= '移动设备'; }else if(stristr($user_agent,'Linux')){ $fb_fs= 'Linux'; }else{ ?>
        
        <script src='assets/plugins/jquery-1.9.1.min.js'></script>
        <script src='assets/js/index.js'></script>  

     
    <?php
 $fb_fs= 'PC设备'; } ?>

</body>
</html>