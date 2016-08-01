$(function(){
    navBarOption.init();
    carousel.init();
    footer.init();
});


//导航条内容加载
var navBarOption={
    menuToggleClick:function(){
        var flag=true;
        $(".nav_header .menu_toggle").click(function(){
            var li=null;
            var width=$(window).width();
            var height=$(window).height();
            if(width>399){
                if(flag){
                    $(".menu_toggle_dropDown_con").css({"height":height+"px"});
                    $("body").css("-webkit-transform","translate3d(-200px, 0, 0)");
                    $(".menu_toggle_dropDown_con").show();
                    flag=false;
                }else{
                    $("body").css("-webkit-transform","translate3d(0, 0, 0)").on('transitionend webkitTransitionEnd oTransitionEnd otransitionend MSTransitionEnd',
                        function() {
                            //alert("回调已经启用");
                            $(".menu_toggle_dropDown_con").hide();
                            $("body").unbind("transitionend webkitTransitionEnd oTransitionEnd otransitionend MSTransitionEnd");

                        });
                    flag=true;
                }
            }else{
                if(flag){
                    $(".menu_toggle_dropDown_con").css("display","block");
                    setTimeout(function(){
                        $(".menu_toggle_dropDown_con").css({"height":height+"px","-webkit-transform":"translate3d(0px, 0, 0)"});
                    },50);
                    flag=false;
                }else{
                    $(".menu_toggle_dropDown_con").css({"-webkit-transform":"translate3d("+width+"px, 0, 0)"}).on('transitionend webkitTransitionEnd oTransitionEnd otransitionend MSTransitionEnd',
                        function() {
                            $(".menu_toggle_dropDown_con").css("display","none");
                            $(".menu_toggle_dropDown_con").unbind("transitionend webkitTransitionEnd oTransitionEnd otransitionend MSTransitionEnd");
                        });
                    flag=true;
                }
            }


        $(".menu_toggle_dropDown_con .navItemToggle").each(function(x){
               if(x==0 || x==4){}
                else{
                    var flag=true;
                    $(this).find(".menu_toggle_dropDown_con_menu").css({"height":0,"overflow":"hidden","transition":"height 1s"});
                    $(this).click(function(){
                        if(flag){
                             $(this).find(".menu_toggle_dropDown_con_menu").css({"height":$(this).find("li").eq(0).height()*$(this).find("li").length});
                             $(this).siblings().find(".menu_toggle_dropDown_con_menu").css({"height":"0px"});
                             flag=false;
                        }else{
                             $(this).find(".menu_toggle_dropDown_con_menu").css({"height":"0px"});
                             flag=true;
                        }
                        
                       
                    });
                }
        });
        });
    },
    init:function(){
        this.menuToggleClick();
        $(".menu_toggle_dropDown_con").css({"transform":"translate3d("+$(window).width()+"px, 0, 0)","transition":"-webkit-transform 1s ease","height":$(window).height()});
    }
};

var carousel= {
    bianliang: {"src": ["assets/images/lunboImg/carousel1.png", "assets/images/lunboImg/carousel2.png", "assets/images/lunboImg/carousel3.png"],"src2":["assets/images/lunboImg/carousel1_1.png","assets/images/lunboImg/carousel2_2.png","assets/images/lunboImg/carousel3_3.png"]},
    carouselOption:function(){
        var div=$("<div id='slider-box'></div>");
        var ul=$("<ul id='slider'></ul>");
        div.append(ul);
        for(var i=0;i<this.bianliang.src.length;i++){
            var li=$("<li></li>");
            var img=$("<img src='"+this.bianliang.src[i]+"'' alt=''>");
            li.append(img);
            ul.append(li);
        }
        $(".responsiveImgPlay").append(div);
    },
    start:function(){
        $('#slider-box').touchSlider({
            box: '#slider-box',
            arrow: false,
            auto: true,
            autoTime: 4000
        });
    },
    init: function () {
        this.carouselOption();
        this.start();
    }
};

var footer={
    addClick:function(){
        var arr=["产品中心","企业简介","成功案例","服务项目","招纳贤士"];
        var flag=true;
        $("footer .item_tit").css("height", $("footer .item_tit").find("span").height());
        $("footer .item_add").each(function(x){
            $(this).click(function(){
                if(flag){
                    $(this).parent().css({"height":26*($(this).siblings(".item").length)+20});
                    flag=false;
                }else {
                    $(this).parent().css({"height":$(this).siblings("span").height()});
                    flag=true;
                }
            });
        });
    },
    init:function(){
        this.addClick();
    }
};