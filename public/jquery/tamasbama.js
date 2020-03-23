$(document).ready(function() {
	"use strict";
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
	$("#navbarNavAltMarkup").css("margin-top","2%");
	$("#navbarNavAltMarkup").css("margin-bottom","0");
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
	$(".logo").html("<img alt='logo' src='../Images/Untitled-1.png' style='width:60%; transition-duration:0.5s;'>");
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