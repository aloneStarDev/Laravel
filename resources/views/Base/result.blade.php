<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ٌدرباره ما</title>
<link href="{{asset("base/css/bootstrap.css")}}"  rel="stylesheet" type="text/css">
<link href="{{asset("base/fontawesome/css/all.css")}}"  rel="stylesheet" type="text/css">
<link href="{{asset("base/css/DarbareMa.css")}}"  rel="stylesheet" type="text/css">
<script src="{{asset("base/jquery/jquery-3-4-1.js")}}" ></script>
</head>

<body class="body">
@include("Base.section.popup")
<img alt="background-texture-top" src="{{asset("base/images/bgHeader1.png")}}"  class="background">
<div class="headingitems fixed-top">
<nav class="navbar navbar-expand-xl" style=" margin:0; box-sizing:inherit;padding-bottom:0.5%; width:100%; margin-top:1%;">
<div class="logo" >
<img alt="logo" src="{{asset("base/images/logo1.png")}}"  style="width:60%;">
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
  <button class="dropbtn"><a class="nav-item nav-link navitems" href="#">قوانین</a></button>
</div>
 <div class="dropdown">
  <button class="dropbtn"><a class="nav-item nav-link navitems home" href="{{route("about")}}">درباره ما</a></button>
</div>
<div class="dropdown">
  <button class="dropbtn"><a class="nav-item nav-link navitems" href="{{route("contactUs")}}">ارتباط با ما</a></button>
</div>

        @include('Base.section.btnMenu')
    </div>
  </div>
</nav>
</div>
<div class="darbarema-div">
<h1 class="darbarema">نتیجه ی پرداخت</h1>
</div>
<div class="background-building-div">
<img alt="background-building-top" src="{{asset("base/images/building3.png")}}"  class="background-building">
</div>
<div class="top-paragraph-div">
<h2 class="topparagraph">قویترین سیستم فایلینگ تحت اینترنت<br>
  ویژه آژانس های املاک و عموم مردم</h2>
 </div>

<div class="tri-right">
<img alt="background-texture-right" src="{{asset("base/images/curve3.png")}}" >
</div>
<div class="tri-left">
<img alt="background-texture-left" src="{{asset("base/images/curve1.png")}}" >
</div>

<div class="box1">
  <div style="font-size: 22px; color: #6C6A6A" class="titleinfirstp">
      {{$mes ?? "پردخات ناموفق"}}
  </div>
  <div style="text-align: justify; font-size: 15px; color:#6C6A6A" class="firstparaghraph">
      <h1>
          {{$refId ?? ""}}
      </h1>
  </div>
 <img class="firstboxphoto" alt="firstboxphoto" src="{{asset("base/images/g8.jpg")}}" >
</div>

<footer class="page-footer font-small indigo">
<div class="footer-back">
<img alt="footer-background" class="footer-image" src="{{asset("base/images/bgFooter1.png")}}" >
</div>
<div class="footer-logo">
<img alt="logo" src="{{asset("base/images/logo1.png")}}" style="width:40%;">
</div>
  <div class=" text-center footer-inner text-md-left">
    <div class="row" style=" border-bottom:thin solid; padding: 0 7%;">
      <div class="col mx-auto">
        <ul class="list-unstyled footer-icon">
          <li>
            <img alt="ozv" src="{{asset("base/images/ecunion-logo.png")}}" >
          </li>
          <li>
           <img alt="ozv" src="{{asset("base/images/eanjoman.jpg")}}" >
          </li>
          <li>
            <img alt="ozv" src="{{asset("base/images/logo.png")}}" >
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
<script type="text/javascript" src="{{asset("base/jquery/DarbareMa.js")}}" ></script>
</body>
</html>
