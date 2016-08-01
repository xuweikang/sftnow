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
    <title>水、电、气的计量、抄表和收费的专业解决方案提供商-盛帆电子</title>
    <link rel="stylesheet" href="assets/css/zeptoCarousel.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/media.css">

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
<header>
    <div class="head_top">
        <div class="content">
            <div class="head_top_left">中国领先的水、电、气、热，节能监测管理方案提供商</div>
            <div class="head_top_right">中文/英文
                <!--<a class="XLweib" href="#"><img src="assets/images/index/xinlangWB.png" alt="">新浪微博</a><a class="TXweib" href="#"><img src="assets/images/index/txWB.png" alt="">腾讯微博</a>--></div>
        </div>
    </div>
    <div class="nav">
        <nav class="nav_header">
            <!--1. ##logo图片,后台应该是可以修改的 -->
            <div class="logo"><img src="assets/images/index/logo.png" alt="盛帆电子股份有限公司" title="盛帆电子股份有限公司" width="123"></div>
            <!--2.1 ##菜单栏,这个待定,应该是需要下拉的,如果添加下拉,html结构不一样 -->
            <ul class="menu">
                <li class="navItem">首页</li>
                <li class="navItem">关于我们
                   <ul class="menu_menu">
                       <li><a href="">董事长致辞</a></li>
                       <li><a href="">资质荣誉</a></li>
                       <li><a href="">大事记</a></li>
                       <li><a href="">公司简介</a></li>
                       <li><a href="">品质保障</a></li>
                       <li><a href="">视频宣传</a></li>
                       <li><a href="">组织结构</a></li>
                       <li><a href="">企业文化</a></li>
                   </ul>
                </li>
                <li class="navItem">公司动态
                    <ul class="menu_menu">
                       <li><a href="">企业新闻</a></li>
                       <li><a href="">行业动态</a></li>
                   </ul>
                </li>
                <li class="navItem">产品中心</li>
                <li class="navItem">解决方案</li>
                <li class="navItem">工程案例</li>
                <li class="navItem">加入我们
                    <ul class="menu_menu">
                       <li><a href="">人才理念</a></li>
                       <li><a href="">招聘职位</a></li>
                       <li><a href="">教育培训</a></li>
                   </ul>
                </li>
                <li class="navItem">OA系统</li>
            </ul>
            <!-- 这个不要改 -->
            <ul class="menu_toggle">
                <li class="menu_toggle_item"></li>
                <li class="menu_toggle_item"></li>
                <li class="menu_toggle_item"></li>
            </ul>
             <!--2.2 ##这个是小屏幕下的那个菜单按钮，一点击就出现菜单,同上-->
            <ul class='menu_toggle_dropDown_con'>
                <li class='navItemToggle'>首页</li>
                <li class='navItemToggle'>关于我们
                    <ul class="menu_toggle_dropDown_con_menu">
                       <li><a href="">董事长致辞</a></li>
                       <li><a href="">资质荣誉</a></li>
                       <li><a href="">大事记</a></li>
                       <li><a href="">公司简介</a></li>
                       <li><a href="">品质保障</a></li>
                       <li><a href="">视频宣传</a></li>
                       <li><a href="">组织结构</a></li>
                       <li><a href="">企业文化</a></li>
                   </ul>
                </li>
                <li class='navItemToggle'>公司动态
                   <ul class="menu_toggle_dropDown_con_menu">
                       <li><a href="">企业新闻</a></li>
                       <li><a href="">行业动态</a></li>
                   </ul>
                </li>
                <li class='navItemToggle'>产品中心</li>
                <li class='navItemToggle'>解决方案</li>
                <li class='navItemToggle'>工程案例</li>
                <li class='navItemToggle'>加入我们
                    <ul class="menu_toggle_dropDown_con_menu">
                       <li><a href="">人才理念</a></li>
                       <li><a href="">招聘职位</a></li>
                       <li><a href="">教育培训</a></li>
                   </ul>
                </li>
                <li class='navItemToggle'>OA系统</li>
            </ul>
            <div class="clear"></div>
        </nav>
    </div>
</header>
<!-- 这个轮播图,因为是插件,所以不能用html表示，到时候我们可以自己写ajax -->
<div class="responsiveImgPlay"></div>

<article>
    <div class="header">

         <!--3 ##下面的h2和h5标签里面的内容,我觉得是可以在后台设置的，这个不清楚 -->
        <h2>MANAGEMENT&nbsp; CONSULTING</h2>
        <hr>
        <h5>解决方案</h5>
    </div>
    <div class="content">
        <ul>
         <!--4 ##解决方案下面的内容 整体布局不变  但是有可能要改变图片和标题和详细内容 -->
            <li><a href="#" ><img src="assets/images/index/content/c1.png" alt=""><span>能源计量</span><div class='con'><span class='content'>提供能源计量、采集创新技术</span></div></a></li>
            <li><a href=""><img src="assets/images/index/content/c2.png" alt=""><span>能源管理</span><div class='con'><span class='content'>提升能源利用效率和管理水平</span></div></a></li>
            <li><a href=""><img src="assets/images/index/content/c3.png" alt=""><span>四表合一</span><div class='con'><span class='content'>资源共享，助力智慧城市建设</span></div></a></li>
            <li><a href=""><img src="assets/images/index/content/c4.png" alt=""><span>体育产业</span><div class='con'><span class='content'>资源共享，助力智慧城市建设</span></div></a></li>
        </ul>
    </div>
</article>
<div class="footer-content">
    <div class="aboutUs">
        <div class="header">
            <h2>CONSTRUCTION&nbsp; CASE</h2>
            <hr>
            <h5>工程案例</h5>
        </div>
        <!--5 ##公司简介 -->
        <div class="introduce">
            我们的产品覆盖能源计量和能源管理解决方案两大领域，拥有完整的水、电、气计量产品线和全系列的智能电表/水表/气表、采集器/智能网关/集中器、集中抄表系统、智能能源监管系统等上百种软、硬件产品。
           我们让能源计量和监测更智能、我们让能源管理更高效、我们以国内领先的管理解决方案，让您的能源更有价值。
        </div>
        <div class="introduce_idea">
        <!--5 ##图片路径和图片下面的标题 后台可以改变 数量也可以自己设置 -->
            <ul>
                <li>
                    <div><img src="assets/images/index/content/e1.png" alt=""></div>
                    <div class="tit">国家电网</div>
                </li>
                <li>
                    <div><img src="assets/images/index/content/e2.png" alt=""></div>
                    <div class="tit">教育机构</div>
                </li>
                <li>
                    <div><img src="assets/images/index/content/e3.png" alt=""></div>
                    <div class="tit">住宅小区</div>
                </li>
                <li>
                    <div><img src="assets/images/index/content/e4.png" alt=""></div>
                    <div class="tit">商业中心</div>
                </li>
                <li>
                    <div><img src="assets/images/index/content/e5.png" alt=""></div>
                    <div class="tit">工矿企业</div>
                </li>
                <li>
                    <div><img src="assets/images/index/content/e6.png" alt=""></div>
                    <div class="tit">建筑楼宇</div>
                </li>
                <li>
                    <div><img src="assets/images/index/content/e7.png" alt=""></div>
                    <div class="tit">交通运输</div>
                </li>
                <li>
                    <div><img src="assets/images/index/content/e8.png" alt=""></div>
                    <div class="tit">市政工程</div>
                </li>

            </ul>
        </div>
    </div>
    <div class="news">
        <div class="header">
            <h2>COMPANY&nbsp; NEWS</h2>
            <hr>
            <h5>公司新闻</h5>
        </div>
        <div class="news_content">
            <div class="contain">
                <div class="left">
                    <div class="title"><font style="font-weight: bolder">·</font>公司动态</div>
                    <!-- 6.1##新闻摘要 -->
                    <div class="summary">
                        <img src="assets/images/index/c7.png" alt="">
                        <div class="summary_content">
                            <div class="tit"><a href="">情系灾民·益路通行-盛帆股份向湖北省...</a></div>
                            <div class="con"><a href="">入梅以来,湖北省境内经过四轮强降雨袭击，部分地区受灾严重。7月11日下午，在湖北省救灾会上...</a></div>
                        </div>
                    </div>
                    <!-- 6.2##新闻列表 -->
                    <ul class="newsList">
                        <li><span><a href="">喜报：盛帆股份顺利通过“双软认证”被认定为软件企业</span><span class="time">2016-06-03</a></span></li>
                        <li><a href=""><span>盛帆基金在行动：益路同行——仙桃中学举行2016年盛帆...</span><span class="time">2016-05-28</span></a></li>
                        <li><a href=""><span>盛帆股份中标喜迎2016首季开门红</span><span class="time">2016-05-24</span></a></li>
                    </ul>
                </div>
                <div class="right">
                    <div class="title"><font style="font-weight: bolder">·</font>盛帆公益基金会动态</div>
                     <!-- 6.1##新闻摘要 -->
                    <div class="summary">
                        <img src="assets/images/index/c7.png" alt="">
                        <div class="summary_content">
                            <div class="tit"><a href="">情系灾民·益路通行-盛帆股份向湖北省...</a></div>
                            <div class="con"><a href="">入梅以来,湖北省境内经过四轮强降雨袭击，部分地区受灾严重。7月11日下午，在湖北省救灾会上...</a></div>
                        </div>
                    </div>
                    <!-- 6.2##新闻列表 -->
                    <ul class="newsList">
                        <li><span><a href="">喜报：盛帆股份顺利通过“双软认证”被认定为软件企业</span><span class="time">2016-06-03</a></span></li>
                        <li><a href=""><span>盛帆基金在行动：益路同行——仙桃中学举行2016年盛帆...</span><span class="time">2016-05-28</span></a></li>
                        <li><a href=""><span>盛帆股份中标喜迎2016首季开门红</span><span class="time">2016-05-24</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<footer>
    <div class="contain">
        <div class="introduce">
            <!-- 7.1 ##二维码-->
            <div class='ewm'><img src='assets/images/index/erweima.png' alt=''></div>
            <!-- 7.2 ##内容列举-->
            <div class="item_tit">
               <span>产品中心</span>
               <div class="item">预设填充</div>
               <div class="item">预设填充</div>
               <div class="item">预设填充</div>
               <div class="item">预设填充</div>
               <div class="item">预设填充</div>
               <div class="item">预设填充</div>
               <div class="item">预设填充</div>
               <div class="item">预设填充</div>
               <div class="item">预设填充</div>
               <div class="item_add" style='position:absolute;right:0;top:0;display: none'>+</div>
            </div>
            <div class="item_tit">
               <span>解决方案</span>
               <div class="item">预设填充</div>
               <div class="item">预设填充</div>
               <div class="item">预设填充</div>
               <div class="item">预设填充</div>
               <div class="item">预设填充</div>
               <div class="item_add" style='position:absolute;right:0;top:0;display: none'>+</div>
            </div>
            <div class="item_tit">
               <span>工程案例</span>
               <div class="item">预设填充</div>
               <div class="item_add" style='position:absolute;right:0;top:0;display: none'>+</div>
                
            </div>
            <div class="item_tit">
                <span>下载中心</span>
                <div class="item">预设填充</div>
                <div class="item">预设填充</div>
                <div class="item_add" style='position:absolute;right:0;top:0;display: none'>+</div>
            </div>
            <div class="item_tit">
                <span>联系我们</span>
                <div class="item">预设填充</div>
                <div class="item">预设填充</div>
                <div class="item_add" style='position:absolute;right:0;top:0;display: none'>+</div>
            </div>
        </div>
        <hr>
        <div class="bottom">
            <div class="left">
                <div class="address">
                <!-- 8.1 ##公司地址-->
                    <div class="addressItem">武汉盛帆电子股份有限公司版权所有 鄂ICP备06778号</div>
                    <div class="addressItem">中国·武汉市江夏区经济开发区阳光大道9号</div>
                </div>
            </div>
            <!-- 8.2 ##公司联系方式-->
            <div class="right"><img src="assets/images/index/c8.png" alt=""><span class="tel" style="font-size: 27px">027-81802561</span>
            </div>
        </div>
    </div>
</footer>


 <?php
 $user_agent = $_SERVER['HTTP_USER_AGENT']; if(stristr($user_agent,'iPad') ||stristr($user_agent,'Android')||stristr($user_agent,'iPhone') ) { ?>
        <script src ='assets/plugins/zepto.min.js' ></script>
        <script src='assets/js/index_mobile.js'></script>
        <script src='assets/js/zeptoCarousel.js'></script>
       

    <?php
 $fb_fs= '移动设备'; }else if(stristr($user_agent,'Linux')){ $fb_fs= 'Linux'; }else{ ?>
        
        <script src='assets/plugins/jquery-1.9.1.min.js'></script>" 
        <script src='assets/js/index.js'></script>  
        <script src='assets/js/responsiveImg.js'></script>" 
        <script src='assets/js/lunbo.js'></script> 

     
    <?php
 $fb_fs= 'PC设备'; } ?>



 
</body>
</html>