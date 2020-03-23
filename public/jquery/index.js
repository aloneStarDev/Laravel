$(document).ready(function() {
	"use strict";
var flag=true;
 $("#myCarousel").on("slide.bs.carousel", function(e) {
    var e1 = $(e.relatedTarget);
    var idx = e1.index();
    var itemsPerSlide = 3;
    var totalItems = $(".hi1 .carousel-item").length;	
    if (idx >= totalItems - (itemsPerSlide - 1)) {
      var it = itemsPerSlide - (totalItems - idx);
      for (var i = 0; i < it; i++) {
        if (e.direction === "left") {	
          $(".hi1 .carousel-item").eq(i).appendTo(".hi .carousel-inner");
		  if($(".card-item:nth-child(2n)").children().hasClass("even")){
	$(".card-item:nth-child(2n+1)").children().addClass("card");
	$(".card-item:nth-child(2n+1)").children().removeClass("even");
	$(".card-item:nth-child(2n)").children().addClass("card");
	$(".card-item:nth-child(2n)").children().removeClass("even");
	$(".card-item:nth-child(2n-1)").children().addClass("even");
	$(".card-item:nth-child(2n-1)").children().removeClass("card");
	}
	else{
		$(".card-item:nth-child(2n+1)").children().addClass("card");
	$(".card-item:nth-child(2n+1)").children().removeClass("even");
	$(".card-item:nth-child(2n-1)").children().addClass("card");
	$(".card-item:nth-child(2n-1)").children().removeClass("even");
	$(".card-item:nth-child(2n)").children().addClass("even");
	$(".card-item:nth-child(2n)").children().removeClass("card");
		
		}
		  
        } else {	
          $(".hi1 .carousel-item").eq(0).appendTo(".hi .carousel-inner");
			 if($(".card-item:nth-child(2n)").children().hasClass("even")){
	$(".card-item:nth-child(2n+1)").children().addClass("card");
	$(".card-item:nth-child(2n+1)").children().removeClass("even");
	$(".card-item:nth-child(2n-1)").children().addClass("card");
	$(".card-item:nth-child(2n-1)").children().removeClass("even");
	$(".card-item:nth-child(2n)").children().addClass("even");
	$(".card-item:nth-child(2n)").children().removeClass("card");
	}
	else{
		$(".card-item:nth-child(2n-1)").children().addClass("card");
	$(".card-item:nth-child(2n+1)").children().removeClass("even");
	$(".card-item:nth-child(2n+1)").children().addClass("even");
	$(".card-item:nth-child(2n-1)").children().removeClass("card");
	$(".card-item:nth-child(2n)").children().addClass("even");
	$(".card-item:nth-child(2n)").children().removeClass("card");
		
		}
        }
      }
    }
	else{
		if($(".card-item:nth-child(even)").children().hasClass("even")){
	$(".card-item:nth-child(even)").children().addClass("card");
	$(".card-item:nth-child(even)").children().removeClass("even");
	$(".card-item:nth-child(odd)").children().addClass("even");
	$(".card-item:nth-child(odd)").children().removeClass("card");
	}
	else{
		$(".card-item:nth-child(odd)").children().addClass("card");
	$(".card-item:nth-child(odd)").children().removeClass("even");
	$(".card-item:nth-child(even)").children().addClass("even");
	$(".card-item:nth-child(even)").children().removeClass("card");
		
		}
		}
  });
$('.carousel').carousel({
  pause: true,
  direction: "right"
});
$('#carouselExampleControls').on('slid.bs.carousel', function () {
	if($(".first-slide").hasClass("active")){
	  $(".number-btn").removeClass("firstNum");
	$(".one").addClass("firstNum");
	}
	if($(".second-slide").hasClass("active")){
	  $(".number-btn").removeClass("firstNum");
	$(".two").addClass("firstNum");
	}
	if($(".third-slide").hasClass("active")){
	  $(".number-btn").removeClass("firstNum");
	$(".three").addClass("firstNum");
	}
});
$(".prev-btn").on("click",function(){
	$(".carousel1").carousel('prev');
	$(".carousel1").carousel('pause');
	
	if($(".first-slide").hasClass("active")){
	  $(".number-btn").removeClass("firstNum");
	$(".one").addClass("firstNum");
	}
	if($(".second-slide").hasClass("active")){
	  $(".number-btn").removeClass("firstNum");
	$(".two").addClass("firstNum");
	}
	if($(".third-slide").hasClass("active")){
	  $(".number-btn").removeClass("firstNum");
	$(".three").addClass("firstNum");
	}
	});
$(".next-btn").on("click",function(){
	$(".carousel1").carousel('next');
	$(".carousel1").carousel('pause');
	if($(".first-slide").hasClass("active")){
	  $(".number-btn").removeClass("firstNum");
	$(".one").addClass("firstNum");
	}
	if($(".second-slide").hasClass("active")){
	  $(".number-btn").removeClass("firstNum");
	$(".two").addClass("firstNum");
	}
	if($(".third-slide").hasClass("active")){
	  $(".number-btn").removeClass("firstNum");
	$(".three").addClass("firstNum");
	}
	});
$(".number-btn").on("click",function(){
	if(!$(this).hasClass("firstNum")){
	  $(".number-btn").removeClass("firstNum");
	$(this).addClass("firstNum");
	}
	});
$(".pishraftebtn").on("click",function(){
	if($(this).html("جستجو پیشرفته <i class='fas fa-chevron-down'></i>") && flag===true){
	$(this).html("بستن <i class='fas fa-chevron-up'></i>");
	$(this).css("outline","none");
	$(".search-search-text").css("height","130px");
	$(".pishrafte-hide").slideDown("slow");
	flag=false;
	}
	else if(flag===false){
		$(this).html("جستجو پیشرفته <i class='fas fa-chevron-down'></i>");
	$(this).css("outline","none");
	$(".search-search-text").css("height","70px");
	$(".pishrafte-hide").hide("slow");
	flag=true;
		}
	});
$(".mahalebtn").on("click",function(){
	$(".mahale-content").slideToggle("slow");
	$(this).css("outline","none");
	$(".metrazh-content").slideUp("slow");
	$(".cost-content").slideUp("slow");
	});
$(".metrazhbtn").on("click",function(){
	$(".metrazh-content").slideToggle("slow");
	$(this).css("outline","none");
	$(".cost-content").slideUp("slow");
	$(".mahale-content").slideUp("slow");	
	});
$(".costbtn").on("click",function(){
	$(".cost-content").slideToggle("slow");
	$(this).css("outline","none");
	$(".metrazh-content").slideUp("slow");
	$(".mahale-content").slideUp("slow");	
	});
$(".secProf").hover(function(){
	$(this).css({
		background:"rgba(64,22,186,1)"
		});
	$(this).find(".icon").css({
		backgroundColor:"rgba(64,22,186,1)",
		color:"white"
		});
	},function(){
	$(this).css({		
	color:"white !important",
	background:"linear-gradient(90deg, rgba(190,86,212,1) 0%, rgba(64,22,186,1) 100%, rgba(64,22,186,1) 100%)"
		});
	$(this).find(".icon").css({
		backgroundColor:"white",
		color:"rgba(146,21,201,1.00)"
		});
		});
$(".firstProf").hover(function(){
	$(this).css({
		background:"rgba(190,86,212,1)"
		});
	$(this).find(".icon").css({
		backgroundColor:"rgba(190,86,212,1)",
		color:"white"
		});
	},function(){
	$(this).css({		
	color:"white !important",
	background:"linear-gradient(90deg, rgba(64,22,186,1) 0%, rgba(190,86,212,1) 100%, rgba(190,86,212,1) 100%)"
		});
		$(this).find(".icon").css({
		backgroundColor:"white",
		color:"rgba(146,21,201,1.00)"
		});
		});
$(".navitems").hover(function(){
	$(this).css({
		color:"#BE56D4",
		borderBottomColor:"#BE56D4",
        borderBottomStyle: "solid",
        borderBottomWidth:"2px"
		});
	},function(){
		if(!$(this).hasClass("home")){
	$(this).css({		
	color:"white",
	    boxُُSizing: "border-box",
        borderBottomColor:" rgba(0, 0, 0, 0)",
		});}
		});
  
$(window).on("scroll",function(){
	var $height = $(window).scrollTop();
	if($height > 20){
	$(".headingitems").addClass("scrolled");

	$(".logo").html("<img alt='logo' src='../Images/Untitled-2.png' style='width:60%; transition-duration:0.5s;'>");
	$(".logo img").css("width","45%");
	$("#navbarNavAltMarkup").css("margin-bottom","0");
	$("#navbarNavAltMarkup").css("margin-top","2%");
	$(".navitems").css({
		color:"white",
		fontSize:"1vw"
		});
	$(".topul").css({
		fontSize:"1vw"
		});
		 }
		else{
	$(".headingitems").removeClass("scrolled");
	$(".logo").html("<img alt='logo' src='../Images/Untitled-2.png' style='width:60%; transition-duration:0.5s;'>");
	$(".logo img").css("width","60%");
	$("#navbarNavAltMarkup").css("margin-top","0");
	$("#navbarNavAltMarkup").css("margin-bottom","2%");
	$(".navitems").css({
		fontSize:"1.2vw"
		});
	$(".topul").css({
		fontSize:"1.2vw"
		});
		}
    });
});