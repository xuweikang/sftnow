$(function(){
   // changeHonor();

})

function changeHonor(){
	$(".main .select li").each(function(x){
		$(this).hover(function(){
			$(this).addClass("liHover").siblings().removeClass("liHover");
			if(x==0){
			   $(".honor1").css("display","block")//.find(".container1").addClass("container");
               $(".honor2").css("display","none")//.find(".container1").removeClass("container");
               $(".honor3").css("display","none")//.find(".container1").removeClass("container");

			}else if(x==1){
			   $(".honor2").css("display","block")//.find(".container1").addClass("container");
 			   $(".honor1").css("display","none")//.find(".container1").removeClass("container");
               $(".honor3").css("display","none")//.find(".container1").removeClass("container");
			}else{
			   $(".honor3").css("display","block")//.find(".container1").addClass("container");
 			   $(".honor1").css("display","none")//.find(".container1").removeClass("container");
               $(".honor2").css("display","none")//.find(".container1").removeClass(".container");
			}
		});
	});
}