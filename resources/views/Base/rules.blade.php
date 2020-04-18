<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ٌشرایط و قوانین</title>
  <meta name="description" content="املاک انلاین- فایلینگ- خرید آپارتمان- خرید ویلا- املاک مشهد">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="{{asset("base/css/bootstrap.css")}}" rel="stylesheet" type="text/css">
<link href="{{asset("base/fontawesome/css/all.css")}}"  rel="stylesheet" type="text/css">
<script src="{{asset("base/jquery/jquery-3-4-1.js")}}" ></script>
<link href="{{asset("base/css/rules.css")}}" rel="stylesheet" type="text/css">
</head>

<body class="body">
@include("Base.section.popup")
<img alt="background-texture-top" src="{{asset("base/images/bgHeader1.png")}}" class="background">
<div class="headingitems fixed-top">
<nav class="navbar navbar-expand-xl" style=" margin:0; box-sizing:inherit;padding-bottom:0.5%; width:100%; margin-top:1%;">
<div class="logo" >
<img alt="logo" src="{{asset("base/images/logo1.png")}}" style="width:60%;">
</div>
  <div id="navbarNavAltMarkup" style="width: 100%; margin-bottom:2%;">
    <div class="navbar-nav topnav">
    <a href="javascript:void(0);" class="iconst" onclick="myFunction()">
    <i class="fa fa-bars" style="color:#6C6A6A;"></i>
  </a>
    <div class="dropdown">
  <button class="dropbtn"><a class="nav-item nav-link navitems" href="{{route("base")}}">صفحه اصلی</a></button>
</div>
     <div class="dropdown">
  <button class="dropbtn"><a class="nav-item nav-link navitems" href="{{route("customer")}}">مشاورین املاک</a></button>
</div>
      <div class="dropdown">
  <button class="dropbtn"><a class="nav-item nav-link navitems home" href="{{route("rules")}}">قوانین</a></button>
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
<div class="tri-right">
<img alt="background-texture-right" src="{{asset("base/images/curve3.png")}}">
</div>
<div class="tri-left">
<img alt="background-texture-left" src="{{asset("base/images/curve1.png")}}">
</div>
<div class="shvagh-div">
<h1 class="shvagh">شرایط و قوانین</h1>
</div>
<div class="background-building-div">
<img alt="background-building-top" src="{{asset("base/images/building.png")}}" class="background-building">
</div>
<div class="top-paragraph-div">
<h2 class="topparagraph">اطلاع رسانی و فایلینگ اینترنتی املاک آنلاین طبق قوانین زیر فعالیت می کند.<br>
<div   style="color: #CA013D">عضویت در سایت به منزله پذیرش این قوانین می باشد.</div></h2>
 </div>

<div class="box1">
<div class="box2">

 <div style="text-align: justify; font-size: 20px; color:#6C6A6A" class="firstparaghraph">- مسئولیت درج اطلاعات صحیح و معتبر در زمان ثبت نام به عهده کاربران می باشد و چنانچه مشخص شود اطلاعات نا معتبر ثبت شده است کاربر
مورد نظر مسدود شده و پنل کاربری وی غیر فعال می شود.<br>
- اطلاعات درج شده در سایت از مالک دریافت شده است بدیهی است چنانچه مالک در اعلام مشخصات ملک اشتباهی مرتکب شده باشد مسئولیتی
متوجه املاک آنلاین نمی باشد.<br>
- قبل از هماهنگی برای بازدید ملک حتما یک مرحله طی تماس تلفنی با مالک از صحت اطلاعات کلیدی ملک مطمئن شوید.<br>
- اطلاعات تماس مالکان فقط در بازه زمانی که دفاتر محترم قرارداد فعال دارند قابل نمایش می باشد.<br>
- قوانین سایت ممکن است هر چند وقت یکبار به روز رسانی شود و کاربران موظفند قوانین سایت را همواره چک نموده و از قوانین جدید آگاه شوند.
<br>
</div>

<div class="boxp2">از حسن اعتماد شما همکار محترم کمال تقدیر و تشکر را داریم<br>
	 باسپاس فراوان<br>
	 فایلینگ اینترنتی املاک آنلاین</div>

</div>
</div>

<div class="bottom-icons">
 <div class="icons-1">
  <div class="homeicon"><i class="fas fa-home"></i></div>
  <div class="iconstext">ایران-مشهد</div>
  <div class="icontext1">نبش ابوطالب13</div>
 </div>
 <div class="icon-2">
  <div class="phoneicon"><i class="fas fa-phone-square"></i></div>
  <div class="iconstextt">۰۵۱-۳۷۲۷۸۶۲۶</div>
  <div class="icontext2">ساعت 8 تا 16 هرروز</div>
 </div>
</div>
<footer class="page-footer font-small indigo">
<div class="footer-back">
<img alt="footer-background" class="footer-image" src="{{asset("base/images/bgFooter1.png")}}">
</div>
<div class="footer-logo">
<img alt="logo" src="{{asset("base/images/logo1.png")}}" style="width:40%;">
</div>
  <div class=" text-center footer-inner text-md-left">
    <div class="row" style=" border-bottom:thin solid; padding: 0 7%;">
      <hr class="clearfix w-100 d-md-none">
      <div class="col mx-auto footer-div">
        <h5 class="font-weight-bold footer-head text-uppercase mt-3 mb-4">اطلاعات بیشتر</h5>
        <ul class="list-unstyled">
          <li>
            <a href="#!">پاسخ به پرسش های متداول</a>
          </li>
          <li>
            <a  href="{{route('rules')}}">قوانین</a>
          </li>
          <li>
          <h5 class="font-weight-bold footer-head text-uppercase mt-3 mb-4" style="margin-top: 5% !important;">شبکه های اجتماعی</h5>
          </li>
          <li>
          <a href="https://t.me/amlakonlin_ir">تلگرام</a>
         </li>
         <li>
         <a href="https://www.instagram.com/amlakonlin.ir/">اینستاگرام</a>
        </li>
        </ul>
      </div>
      <hr class="clearfix w-100 d-md-none">
      <div class="col mx-auto footer-div">
        <h5 class="font-weight-bold footer-head text-uppercase mt-3 mb-4">کلیدهای کاربردی</h5>
        <ul class="list-unstyled">
          <li>
            <a  href="javascript:void(0)" id="footsec">ورود مشاورین</a>
          </li>
          <li>
            <a href="javascript:void(0)" id="footfirst">ثبت آگهی رایگان</a>
          </li>
          <h5 class="font-weight-bold footer-head text-uppercase mt-3 mb-4" style="margin-top: 5% !important;">جستجو</h5>
          <li>
            <a href="{{route('base')}}#search">جستجوی ملک</a>
          </li>
          <li>
            <a href="{{route('base')}}#search">فیلتر های جستجو</a>
          </li>
        </ul>
      </div>
      <hr class="clearfix w-100 d-md-none">
      <div class="col mx-auto footer-div">
        <h5 class="font-weight-bold footer-head text-uppercase mt-3 mb-4">منو</h5>
        <ul class="list-unstyled">
          <li>
            <a href="{{route('base')}}">صفحه اصلی</a>
          </li>
          <li>
            <a href="{{route('customer')}}">مشاورین‌املاک</a>
          </li>
          <li>
            <a href="{{route('contactUs')}}#text">نظر سنجی</a>
          </li>
          <li>
            <a href="{{route('about')}}">درباره ما</a>
          </li>
          <li>
            <a href="{{route('contactUs')}}">ارتباط باما</a>
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
<script type="text/javascript" src="{{asset("base/jquery/rules.js")}}"></script>
</body>
</html>
