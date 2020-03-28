$(document).ready(function() {
	"use strict";
$(".melk-content1 a").on("click",function(){
	$(".melkbtn1").text($(this).text());
	});
$(".melkbtn1").on("click",function(){
	$(".melk-content1").slideToggle("slow");
	$(this).css("outline","none");
	});
$(".vagozari-content1 a").on("click",function(){
	$(".vagozaribtn1").text($(this).text());
	});
$(".vagozaribtn1").on("click",function(){
	$(".vagozari-content1").slideToggle("slow");
	$(this).css("outline","none");
	});
$(".melk-content a").on("click",function(){
	$(".melkbtn").text($(this).text());
	});
$(".melkbtn").on("click",function(){
	$(".melk-content").slideToggle("slow");
	$(this).css("outline","none");
	});
$(".vagozari-content a").on("click",function(){
	$(".vagozaribtn").text($(this).text());
	});
$(".vagozaribtn").on("click",function(){
	$(".vagozari-content").slideToggle("slow");
	$(this).css("outline","none");
	});
$(".sabt2").on("click",function(){
	$(".content5").hide();
	$(".content6").show();
	$(this).addClass("pop-left-btn2");
	$(this).parent().addClass("pop-top-left2");
	$(this).removeClass("pop-right-btn2");
	$(this).parent().removeClass("pop-top-right2");
	$(".vorood2").addClass("pop-right-btn2");
	$(".vorood2").parent().addClass("pop-top-right2");
	$(".vorood2").parent().removeClass("pop-top-left2");
	$(".vorood2").removeClass("pop-left-btn2");
	});
$(".vorood2").on("click",function(){
	$(".content6").hide();
	$(".content5").show();
	$(this).addClass("pop-left-btn2");
	$(this).parent().addClass("pop-top-left2");
	$(this).removeClass("pop-right-btn2");
	$(this).parent().removeClass("pop-top-right2");
	$(".sabt2").addClass("pop-right-btn2");
	$(".sabt2").parent().addClass("pop-top-right2");
	$(".sabt2").parent().removeClass("pop-top-left2");
	$(".sabt2").removeClass("pop-left-btn2");
	});
$(".firstProf").on("click",function(){
$(".pop2").show();
$(".pop-parent").show();
	document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
	$(".body").css("overflow-y","hidden");
});
$(".pop-button-right4").on("click",function(){
	$(".content4").hide();
	$(".content3").show();
	$(".circles div").css("background-color","white");
	$(".circle2").css("background-color","#4016BA");
	});
$(".pop-button-left3").on("click",function(){
	$(".content3").hide();
	$(".content4").show();
	$(".circles div").css("background-color","white");
	$(".circle1").css("background-color","#4016BA");
	});
$(".pop-button-right3").on("click",function(){
	$(".content3").hide();
	$(".content2").show();
	$(".input-center").css("display","none");
	$(".pop-buttons2").css("margin-top","20%");
	$(".pop-button-left2").text("دریافت کد تایید");
	$(".circles div").css("background-color","white");
	$(".circle3").css("background-color","#4016BA");
	});
$(".sex-content a").on("click",function(){
	$(".sexbtn").text($(this).text());
	});
$(".sexbtn").on("click",function(){
	$(".sex-content").slideToggle("slow");
	$(this).css("outline","none");
	});
$(".pop-button-left2").on("click",function(){
	if($(this).text()==="ادامه"){
		$(".content2").hide();
		$(".content3").show();
		$(".circles div").css("background-color","white");
		$(".circle2").css("background-color","#4016BA");
		}
	else{
	$(".input-center").css("display","block");
	$(".pop-buttons2").css("margin-top","23%");
	$(this).text("ادامه");
	}
	});
$(".sabt").on("click",function(){
	$(".content1").hide();
	$(".content2").show();
	$(this).addClass("pop-left-btn");
	$(this).parent().addClass("pop-top-left");
	$(this).removeClass("pop-right-btn");
	$(this).parent().removeClass("pop-top-right");
	$(".vorood").addClass("pop-right-btn");
	$(".vorood").parent().addClass("pop-top-right");
	$(".vorood").parent().removeClass("pop-top-left");
	$(".vorood").removeClass("pop-left-btn");
	});
$(".vorood").on("click",function(){
	$(".content2").hide();
	$(".content3").hide();
	$(".content4").hide();
	$(".content1").show();
	$(this).addClass("pop-left-btn");
	$(this).parent().addClass("pop-top-left");
	$(this).removeClass("pop-right-btn");
	$(this).parent().removeClass("pop-top-right");
	$(".sabt").addClass("pop-right-btn");
	$(".sabt").parent().addClass("pop-top-right");
	$(".sabt").parent().removeClass("pop-top-left");
	$(".sabt").removeClass("pop-left-btn");
	});
$(".secProf").on("click",function(){
	$(".pop1").show();
	$(".pop-parent").show();
	document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
	$(".body").css("overflow-y","hidden");
	});
$(".pop-cross,.pop-parent,.pop-button-right2,.pop-button-right,.pop-button-right5,.pop-button-right6").on("click",function(){
	$(".pop2").hide();
	$(".pop-button-left2").text("دریافت کد تایید");
	$(".input-center").css("display","none");
	$(".pop-buttons2").css("margin-top","20%");
	$(".pop1").hide();
	$(".pop-parent").hide();
	$(".body").css("overflow-y","visible");
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
	$(".logo img").css("display","none");
	$("#navbarNavAltMarkup").css("margin-bottom","0");
	$("#navbarNavAltMarkup").css("margin-top","2%");
	$(".navbar").css({
		marginTop:"0",
		paddingTop:"0"
		});
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
	$(".logo img").css("display","initial");
	$("#navbarNavAltMarkup").css("margin-top","0");
	$("#navbarNavAltMarkup").css("margin-bottom","2%");
	$(".navbar").css({
		marginTop:"1%",
		paddingTop:"0.5%"
		});
	$(".navitems").css({
		fontSize:"1.2vw"
		});
	$(".topul").css({
		fontSize:"1.2vw"
		});
		}
    });
});