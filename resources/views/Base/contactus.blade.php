<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ٌتماس باما</title>
<link href="../base/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="../base/fontawesome/css/all.css" rel="stylesheet" type="text/css">
<link href="../base/css/tamasbama.css" rel="stylesheet" type="text/css">
<script src="../base/jquery/jquery-3-4-1.js"></script>

</head>

<body class="body">
@include("Base.section.popup")
<img alt="background-texture-top" src="../base/images/bgHeader1.png" class="background">

<div class="headingitems fixed-top">
<nav class="navbar navbar-expand-xl" style=" margin:0; box-sizing:inherit;padding-bottom:0.5%; width:100%; margin-top:1%;">
<div class="logo" >
<img alt="logo" src="../base/images/logo1.png" style="width:60%; transition-duration:0.5s;">
</div>
  <div id="navbarNavAltMarkup" style="width: 100%;">
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
  <button class="dropbtn"><a class="nav-item nav-link navitems home" href="{{route("contactUs")}}">ارتباط با ما</a></button>
</div>
        @include('Base.section.btnMenu')
    </div>
  </div>
</nav>


</div>

<div class="darbarema-div">
<h1 class="darbarema">ارتباط با ما</h1>
</div>
<div class="background-building-div">
<img alt="background-building-top" src="../base/images/2.png" class="background-building">
</div>
<div class="tri-right">
<img alt="background-texture-right" src="../base/images/curve3.png">
</div>
<div class="tri-left">
<img alt="background-texture-left" src="../base/images/curve1.png">
</div>
<div  class="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d803.667516267658!2d59.5897221!3d36.320307!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3f6c91bd0079e8fb%3A0x90b65238002c71de!2sAbutaleb%20Boulevard%2C%20Razavi%20Khorasan%20Province%2C%20Mashhad%2C%20Mil-e-Kariz%2C%20Iran!3m2!1d36.3205276!2d59.590182999999996!5e0!3m2!1sen!2s!4v1584969663874!5m2!1sen!2s" width="1088" height="416" frameborder="0" style="border:0; border-radius:10px; width:100%" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>

<div class="form-div">

<form action="{{route("survey.store")}}" class="textform" method="post">ثبت نظر و پیشنهاد<br>
@csrf
<div style="font-size: 1.5vw ;">
<input style="margin-top: 5%; float: right; display: block; width: 45%;" class="wrapInput" type="text" name="fullName" placeholder="نام و نام خانوادگی" maxlength="25">
<input style="margin-top: 5%; float: right; display: block; width: 45%; margin-right: 2%;" class="wrapInput" type="email" name="email" placeholder="ایمیل" maxlength="25">
</div>
<input style="margin-top: 2%; width: 92%; font-size: 1.5vw" class="wrapInput" type="text" name="title" placeholder="عنوان" maxlength="60">
<textarea style="margin-top: 2%; width: 92%; height: 150px; font-size: 1.5vw" class="wrapInput" type="text" name="description" placeholder="شرح نظر..." maxlength="500"></textarea>
<button type="submit" class="button">ثبت</button>
</form>

<div class="texticons">
<p class="icontitle" >اطلاعات تماس</p>

<div class="icon1">
<div class=" homeicon"><i class="fas fa-phone-square"></i></div>
<div class="iconstext">۰۵۱-۳۷۲۷۸۶۲۶</div>
<div class="icontext1">ساعت 8 تا 16 هرروز</div>
</div>

<div  class="icon1" >
<div  class="homeicon"><i class="fas fa-home"></i></div>
<div  class="iconstext">ایران-مشهد</div>
<div  class="icontext1">نبش ابوطالب13</div>
</div>

<div  class="icon1">
<div  class="homeicon"><i class="fab fa-telegram"></i></div>
<div  class="iconstext" style="margin-top:5%;">
<a href="https://t.me/amlakonlin_ir" style="text-decoration:none">amlakonlin_ir@</a>
</div>
</div>

<div  class="icon1">
<div  class="homeicon"><i class="fab fa-instagram"></i></div>
<div  class="iconstext" style="margin-top:5%;">
<a href="https://www.instagram.com/amlakonlin.ir/" style="text-decoration:none">amlakonlin.ir@</a>
</div>
</div>

</div>

</div>
<footer class="page-footer font-small indigo">
<div class="footer-back">
<img alt="footer-background" class="footer-image" src="../base/images/bgFooter1.png">
</div>
<div class="footer-logo">
<img alt="logo" src="../base/images/logo1.png" style="width:40%;">
</div>
  <div class=" text-center footer-inner text-md-left">
    <div class="row" style=" border-bottom:thin solid; padding: 0 7%;">
      <div class="col mx-auto">
        <ul class="list-unstyled footer-icon">
          <li>
            <img alt="ozv" src="../base/images/ecunion-logo.png">
          </li>
          <li>
           <img alt="ozv" src="../base/images/eanjoman.jpg">
          </li>
          <li>
            <img alt="ozv" src="../base/images/logo.png">
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

<script type="text/javascript" src="../base/jquery/bootstrap.js"></script>
<script type="text/javascript" src="../base/fontawesome/js/all.js"></script>
<script type="text/javascript" src="../base/jquery/tamasbama.js"></script>
</body>
</html>
