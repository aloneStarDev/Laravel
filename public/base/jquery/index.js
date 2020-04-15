$(document).ready(function() {
	"use strict";
var flag=true;
var win = $(window);
 if (win.width() < 1300) {
	  $(".topnav div,.topnav ul").hide();
	  $('.mahale').unbind("mouseleave");
	  $('.mahale').unbind("mouseenter");
	  $('.mahale').on("click",function(){
		  $('.mahale-content').slideToggle("fast");
		  });
    $('.vagozari').on("click",function(){
		  $('.vagozari-content').slideToggle("fast");
		  });
	$('.melk').on("click",function(){
		  $('.melk-content').slideToggle("fast");
		  });
	$('.melk1').on("click",function(){
		  $('.melk-content1').slideToggle("fast");
		  });
	$('.vagozari1').on("click",function(){
		  $('.vagozari-content1').slideToggle("fast");
		  });
	$(".btnspecial").on("click",function(){
	 $(".pop3").show();
	 document.body.scrollTop = 200;
     document.documentElement.scrollTop = 200;
	 $(".pop-parent2").show();
	 $(".body").css("overflow-y","hidden");
	});
	   }
if (win.width() >= 1300) {
	  $(".topnav div,.topnav ul").show();
	  $('.mahale').bind("mouseleave");
	  $('.mahale').bind("mouseenter");

	   }
$(window).on('resize', function(){
      var win = $(this);
      if (win.width() >= 1300) {
	  $(".topnav div,.topnav ul").show();
	  $('.mahale').bind("mouseleave");
	  $('.mahale').bind("mouseenter");

	   }
	  if (win.width() < 1300) {
	  $(".topnav div,.topnav ul").hide();
	  $('.mahale').unbind("mouseleave");
	  $('.mahale').unbind("mouseenter");
	  $('.mahale').on("click",function(){
		  $('.mahale-content').slideToggle("fast");
		  });
	  $('.vagozari').on("click",function(){
		  $('.vagozari-content').slideToggle("fast");
		  });
	$('.melk').on("click",function(){
		  $('.melk-content').slideToggle("fast");
		  });
	$('.melk1').on("click",function(){
		  $('.melk-content1').slideToggle("fast");
		  });
	$('.vagozari1').on("click",function(){
		  $('.vagozari-content1').slideToggle("fast");
		  });
	$(".btnspecial").on("click",function(){
	 $(".pop3").show();
	 document.body.scrollTop = 200;
     document.documentElement.scrollTop = 200;
	 $(".pop-parent2").show();
	 $(".body").css("overflow-y","hidden");
	});
	   }
});
if (win.width() >= 1300){
$(".btnspecial").on("click",function(){
	$(".pop3").show();
	document.body.scrollTop = 800;
    document.documentElement.scrollTop = 800;
	$(".pop-parent2").show();
	$(".body").css("overflow-y","hidden");
	});
}
$(".kharidbtn").on("click",function(){
	$(this).removeClass("rent-button");
	$(this).addClass("buy-button");
	$(".rahnbtn").removeClass("buy-button");
	$(".rahnbtn").addClass("rent-button");
	$(".mab1").hide();
	$(".mab2").hide();
	$(".mab3").show();
	});
$(".rahnbtn").on("click",function(){
	$(this).removeClass("rent-button");
	$(this).addClass("buy-button");
	$(".kharidbtn").removeClass("buy-button");
	$(".kharidbtn").addClass("rent-button");
	$(".mab1").show();
	$(".mab2").show();
	$(".mab3").hide();
	});
    $(".iconst").on("click",function(){
	$(".topnav div,.topnav ul").slideToggle("fast");
	});
if (win.width() >= 600) {
$('.melk').each(function(){
        var t = null;
        var btn = $(this);
        btn.hover(function(){
            t = setTimeout(function(){
                btn.find(".melk-content").slideDown(300);
				t = null;
            }, 300);

        }, function(){
            if (t){
                clearTimeout(t);
                t = null;
            }
            else{
                btn.find(".melk-content").slideUp(300);
				}
        });
    });
$('.melk1').each(function(){
        var t = null;
        var btn = $(this);
        btn.hover(function(){
            t = setTimeout(function(){
                btn.find(".melk-content1").slideDown(300);
				t = null;
            }, 300);

        }, function(){
            if (t){
                clearTimeout(t);
                t = null;
            }
            else{
                btn.find(".melk-content1").slideUp(300);
				}
        });
    });
$('.vagozari').each(function(){
        var t = null;
        var btn = $(this);
        btn.hover(function(){
            t = setTimeout(function(){
                btn.find(".vagozari-content").slideDown(300);
				t = null;
            }, 300);

        }, function(){
            if (t){
                clearTimeout(t);
                t = null;
            }
            else{
                btn.find(".vagozari-content").slideUp(300);
				}
        });
    });
$('.vagozari1').each(function(){
        var t = null;
        var btn = $(this);
        btn.hover(function(){
            t = setTimeout(function(){
                btn.find(".vagozari-content1").slideDown(300);
				t = null;
            }, 300);

        }, function(){
            if (t){
                clearTimeout(t);
                t = null;
            }
            else{
                btn.find(".vagozari-content1").slideUp(300);
				}
        });
    });
}
if (win.width() >= 600) {
$('.mahale').each(function(){
        var t = null;
        var btn = $(this);
        btn.hover(function(){
            t = setTimeout(function(){
                btn.find(".mahale-content").slideDown(300);
				t = null;
            }, 300);

        }, function(){
            if (t){
                clearTimeout(t);
                t = null;
            }
            else{
                btn.find(".mahale-content").slideUp(300);
				}
        });
    });
}
$(".vagozari-content1 a").on("click",function(){
	$(".vagozaribtn1").text($(this).text());
	$(".vagozari-content1").slideUp("slow");
	});
$(".melk-content a").on("click",function(){
	$(".melkbtn").text($(this).text());
	$(".melk-content").slideUp("slow");
	});
$(".melk-content1 a").on("click",function(){
	$(".melkbtn1").text($(this).text());
	$(".melk-content1").slideUp("slow");
	});
$(".vagozari-content a").on("click",function(){
	$(".vagozaribtn").text($(this).text());
	$(".vagozari-content").slideUp("slow");
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
$(".firstProf,#footfirst").on("click",function(){
$(".pop2").show();
$(".pop-parent").show();
	document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
	$(".body").css("overflow-y","hidden");
});
$(".sex-content a").on("click",function(){
	$(".sexbtn").text($(this).text());
	});
$(".sexbtn").on("click",function(){
	$(".sex-content").slideToggle("slow");
	$(this).css("outline","none");
	});
$(".pop-button-left2").on("click",function(){
	$(".input-center").css("display","block");
	$(".pop-buttons2").css("margin-top","23%");
	$(this).html('<a href="sabtNam.html" style="width:100%; display:block; text-decoration:none !important; color:white !important;">ادامه </a>');
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
$(".secProf,#footsec").on("click",function(){
	$(".pop1").show();
	$(".pop-parent").show();
	document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
	$(".body").css("overflow-y","hidden");
	});
$(".pop-cross,.pop-parent,.pop-button-right2,.pop-button-right,.pop-button-right5,.pop-button-right6,.pop-cross2,.pop-button-right7").on("click",function(){
	$(".pop3").hide();
	$(".melk-content").slideUp("slow");
	$(".vagozari-content").slideUp("slow");
	$(".melk-content1").slideUp("slow");
	$(".vagozari-content1").slideUp("slow");
	$(".pop2").hide();
	$(".pop-button-left2").text("دریافت کد تایید");
	$(".input-center").css("display","none");
	$(".pop-buttons2").css("margin-top","20%");
	$(".pop1").hide();
	$(".pop-parent2").hide();
	$(".pop-parent").hide();
	$(".body").css("overflow-y","visible");
	});
$(".cost-content a").on("click",function(){
	$(".costbtn").text($(this).text());
	});
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
	$(".pishrafte-hide").slideUp("slow");
	flag=true;
		}
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
	var win = $(this);
	if($height > 20 && win.width() >= 1300){
	$(".headingitems").addClass("scrolled");
	$("#navbarNavAltMarkup").css("margin-bottom","0");
	$("#navbarNavAltMarkup").css("margin-top","2%");
	$(".navbar").css({
		marginTop:"0",
		paddingTop:"0"
		});
	$(".logo img").css("display","none");
	$(".navitems").css({
		color:"white",
		fontSize:"1vw"
		});
	$(".topul").css({
		fontSize:"1vw"
		});
		 }
		else if(win.width() >= 1300){
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
