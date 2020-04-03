<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ٌپروفایل مشاورین</title>
<link href="{{asset("base/css/bootstrap.css")}}" rel="stylesheet" type="text/css">
<link href="{{asset("base/fontawesome/css/all.css")}}"  rel="stylesheet" type="text/css">
<script src="{{asset("base/jquery/jquery-3-4-1.js")}}" ></script>
<link href="{{asset("base/css/profile.css")}}" rel="stylesheet" type="text/css">
</head>
<body class="body">
@include("Base.section.popup")
<img alt="background-texture-top" src="{{asset("base/images/bgHeader2.png")}}" class="background">
<div class="headingitems fixed-top">
<nav class="navbar navbar-expand-xl" style=" margin:0; box-sizing:inherit;padding-bottom:0.5%; width:100%; margin-top:1%;">
<div class="logo" >
<img alt="logo" src="{{asset("base/images/logo1.png")}}" style="width:60%;">
</div>
  <div id="navbarNavAltMarkup" style="width: 100%; margin-bottom:2%;">
    <div class="navbar-nav">
    <div class="dropdown">
  <button class="dropbtn"><a class="nav-item nav-link navitems" href="{{route("base")}}">صفحه اصلی</a></button>
</div>
     <div class="dropdown">
  <button class="dropbtn"><a class="nav-item nav-link navitems" href="{{route("customer")}}">مشاورین املاک</a></button>
</div>
      <div class="dropdown">
  <button class="dropbtn"><a class="nav-item nav-link navitems" href="{{route("rules")}}">قوانین</a></button>
</div>
 <div class="dropdown">
  <button class="dropbtn"><a class="nav-item nav-link navitems" href="{{route("about")}}">درباره ما</a></button>
</div>
<div class="dropdown">
  <button class="dropbtn"><a class="nav-item nav-link navitems" href="{{route("contactUs")}}">ارتباط با ما</a></button>
</div>
@include('Base.section.btnMenu')
    </div>
  </div>
</nav>
</div>
<div class="placetop">
	<div class="imagediv">
	<img alt="circle_photo" src="{{asset("base/images/g8.jpg")}}" class="circleimage">
	</div>
	<div class="titlediv">
	<h1 style="color: #FFFFFF; font-size:3vw;">نام دفتر املاک</h1>
	<h3 style="color: #FFFFFF; font-size:2vw;">مالک: محمدرضا کریمی</h3>
	</div>
	</div>
<div class="tri-right">
<img alt="background-texture-right" src="{{asset("base/images/curve3.png")}}">
</div>
<div class="tri-left">
<img alt="background-texture-left" src="{{asset("base/images/curve1.png")}}">
</div>
<div style="width:80%; margin-right:10%; margin-bottom:80%;">

<div class="textform">درباره ما:<br>
<div class="matn">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی
 مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.<br> کتابهای زیادی در شصت و سه
 درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری
 را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.
 در این صورت می توان امید
 داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل
 حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده
 قرار گیرد.</div>
</div>

<div class="texticons"><p class="icontitle" >اطلاعات تماس</p>
<div style="margin-top: 15%;">

<div  style="float: right; display: block" >
<div  style="float: right; display: block" class="homeicon"><i class="fas fa-home"></i></div>
<div  style="float: right; display: block" class="iconstext">ایران-مشهد</div>
<div  style="float: right; display: block" class="icontext1">نبش ابوطالب13</div>
</div>

<div style="float: right; display: block; margin-top: 20%">
<div style="float: right; display: block" class="phoneicon"><i class="fas fa-phone-square"></i></div>
<div style="float: right; display: block" class="iconstextt">۰۵۱-۳۷۲۷۸۶۲۶</div>
<div style="float: right; display: block" class="icontext2">ساعت 8 تا 16 هرروز</div>
</div>

<div  style="float: right; display: block; margin-top: 20%;">
<div  style="float: right; display: block" class="mobileicon"><i class="fas fa-mobile-alt"></i></div>
<div  style="float: right; display: block" class="mobiletext">۰۵۱-۳۷۲۷۸۶۲۶</div>
<div  style="float: right; display: block" class="mobiletext">۰۵۱-۳۷۲۷۸۶۲۶</div>
</div>
</div>
</div>

</div>
<footer class="page-footer font-small indigo">
<div class="footer-back">
<img alt="footer-background" class="footer-image" src="{{asset("base/images/bgFooter1.png")}}">
</div>
<div class="footer-logo">
<img alt="logo" src="../base/images/logo1.png" style="width:40%;">
</div>
  <div class=" text-center footer-inner text-md-left">
    <div class="row" style=" border-bottom:thin solid; padding: 0 7%;">
      <div class="col mx-auto">
        <ul class="list-unstyled footer-icon">
          <li>
            <img alt="ozv" src="{{asset("base/images/ecunion-logo.png")}}">
          </li>
          <li>
           <img alt="ozv" src="{{asset("base/images/eanjoman.jpg")}}">
          </li>
          <li>
            <img alt="ozv" src="{{asset("base/images/logo.png")}}">
          </li>
        </ul>
      </div>
      <hr class="clearfix w-100 d-md-none">
      <div class="col mx-auto footer-div">
        <h5 class="font-weight-bold footer-head text-uppercase mt-3 mb-4">اطلاعات بیشتر</h5>
        <ul class="list-unstyled">
          <li>
            <a href="#!">پاسخ به پرسش های متداول</a>
          </li>
          <li>
            <a href="#!">تبلیغات</a>
          </li>
          <li>
            <a href="#!">قوانین</a>
          </li>
          <li>
          <h5 class="font-weight-bold footer-head text-uppercase mt-3 mb-4" style="margin-top: 5% !important;">شبکه های اجتماعی</h5>
          </li>
        </ul>
      </div>
      <hr class="clearfix w-100 d-md-none">
      <div class="col mx-auto footer-div">
        <h5 class="font-weight-bold footer-head text-uppercase mt-3 mb-4">کلیدهای کاربردی</h5>
        <ul class="list-unstyled">
          <li>
            <a href="#!">ورود شماورین</a>
          </li>
          <li>
            <a href="#!">ثبت آگهی رایگان</a>
          </li>
          <h5 class="font-weight-bold footer-head text-uppercase mt-3 mb-4" style="margin-top: 5% !important;">جستجو</h5>
          <li>
            <a href="#!">جستجوی ملک</a>
          </li>
          <li>
            <a href="#!">فیلتر های جستجو</a>
          </li>
        </ul>
      </div>
      <hr class="clearfix w-100 d-md-none">
      <div class="col mx-auto footer-div">
        <h5 class="font-weight-bold footer-head text-uppercase mt-3 mb-4">منو</h5>
        <ul class="list-unstyled">
          <li>
            <a href="#!">صفحه اصلی</a>
          </li>
          <li>
            <a href="#!">مشاورین‌املاک</a>
          </li>
          <li>
            <a href="#!">نظر سنجی</a>
          </li>
          <li>
            <a href="#!">درباره ما</a>
          </li>
          <li>
            <a href="#!">ارتباط باما</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright text-center py-3">
   تمامی حقوق وبسایت متعلق به املاک آنلاین میباشد
  </div>
</footer>
<script type="text/javascript" src="{{asset("base/jquery/bootstrap.js")}}" ></script>
<script type="text/javascript" src="{{asset("base/fontawesome/js/all.js")}}" ></script>
<script type="text/javascript" src="{{asset("base/jquery/profile.js")}}"></script>
</body>
</html>
