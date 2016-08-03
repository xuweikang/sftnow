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
        <a href="" class="home bread1">首页</a><a href="index.php?g=portal&m=index&a=render&page=aboutDefault" class="bread2">关于我们</a><a href="index.php?g=portal&m=index&a=render&page=about6" class="bread3">企业文化</a>
    </div>

    <div class="mainMenu">
        <dl>
            <dd><a href="index.php?g=portal&m=index&a=render&page=aboutDefault">董事长致辞</a></dd>
            <dd><a href="index.php?g=portal&m=index&a=render&page=about2">公司简介</a></dd>
            <dd><a href="index.php?g=portal&m=index&a=render&page=about3">组织结构</a></dd>
            <dd><a href="index.php?g=portal&m=index&a=render&page=about4">资质荣誉</a></dd>
            <dd><a href="index.php?g=portal&m=index&a=render&page=about5">品质保障</a></dd>
            <dd><a href="index.php?g=portal&m=index&a=render&page=about6" class="hover">企业文化</a></dd>
            <dd><a href="index.php?g=portal&m=index&a=render&page=about7">大事记</a></dd>
            <dd><a href="index.php?g=portal&m=index&a=render&page=about8">视频宣传</a></dd>
        </dl>
    </div>

     <div class="Single" style="height:945px">
        <div class="culture">
          <p><img src="assets/images/index/logo.png" /></p>
          <p>盛帆徽标：采用外圆内方的外形，方是指方针准则也就是不变的原则，圆是指随机应变的变通，要变得合理，即公司既要有规章制度和企业文化，同时也要合理因人、事、地、物随机变通。徽标内部由4个A组成山峰形状，代表盛帆永远追求卓越，勇攀高峰。</p>
           <div class="c1">
              <img  src="assets/images/single/SL_culture02.jpg" class="img1" />
              <img  src="assets/images/single/SL_culture03.jpg"  />
              <p>尽力而为，量力而行，在不知足中进取，在知足中常乐。</p>
              <img class="img03" src="assets/images/single/SL_culture04.jpg" />
              <p>我们深知人才是最重要的资产，公司全力投入人才资源的培训，追求员工与公司同步发展。</p>
              <img class="img03" src="assets/images/single/SL_culture05.jpg" />
              <p>紧张而充足的工作之余，公司还组织开展各种娱乐活动，并积极解决职工的住房问题，提供食宿等各种福利，&ldquo;人本理念&rdquo;深入人心，极大的增强了公司的凝聚力。</p>
              <img class="img03" src="assets/images/single/SL_culture06.jpg" />
              <p>在关注自身发展的同时，盛帆积极承担社会责任、热心公益事业。2015年公司及主要股东注资<b>1000万元</b>设立了盛帆公益基金，向南开大学、湖北省仙桃中学分别捐资<b>500万元</b>；在仙桃市修建的盛帆桥、嘉鱼县铺设的盛帆路等专项捐助也都取得了良好的社会效益。2013、2014年联合楚天都市报为300多名环卫工人发放过年物资、为福利院的老人们送去过冬保暖物资、为留守儿童圆梦。</p>
              <img class="img04" src="assets/images/single/SL_culture07.jpg" />
          </div>
      </div>
      
        </div>
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