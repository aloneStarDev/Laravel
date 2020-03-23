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
<img alt="background-texture-top" src="../base/images/bg-header.png" class="background">

<div class="headingitems fixed-top">
<nav class="navbar navbar-expand-xl" style=" margin:0; box-sizing:inherit;padding-bottom:2px; width:100%; margin-top:10px;">
<div class="logo" >
<img alt="logo" src="../base/Images/Untitled-1.png" style="width:60%; transition-duration:0.5s;">
</div>
  <div id="navbarNavAltMarkup" style="width: 100%;">
    <div class="navbar-nav">
    <div class="dropdown">
  <button class="dropbtn"><a class="nav-item nav-link navitems" href="{{route('base')}}">صفحه اصلی</a></button>
</div>
     <div class="dropdown">
  <button class="dropbtn"><a class="nav-item nav-link navitems" href="#">مشاورین املاک</a></button>
</div>
      <div class="dropdown">
  <button class="dropbtn"><a class="nav-item nav-link navitems" href="#">قوانین</a></button>
</div>
 <div class="dropdown">
  <button class="dropbtn"><a class="nav-item nav-link navitems" href="{{route('about')}}">درباره ما</a></button>
</div>
<div class="dropdown">
  <button class="dropbtn"><a class="nav-item nav-link navitems home" href="{{route('contactUs')}}">ارتباط با ما</a></button>
</div>
<ul class=" justify-content-end nav-pills topul">
    @if (Route::has('login'))
        <li class="nav-item">
            <a href="@auth {{route('logout')}} @else {{route('signin')}} @endauth" class="atag firstProf">
                <button type="button" class="btn">
                    <i class="fas fa-angle-right icon-arrow "></i>
                    <span>
                                    @auth
                            خروج از حساب
                        @else
                            ورود
                        @endauth
                                 </span>
                    <i class="fas fa-plus icon"></i>
                </button></a>
        </li>
        <li class="nav-item">
            <a href="@auth {{route('manage')}} @else {{route('register')}} @endauth" class="atag secProf">
                <button type="button" class="btn">
                    <i class="fas fa-angle-right icon-arrow"></i>
                    <span>
                                    @auth
                            مدیریت
                        @else
                            ثبت نام مشاوران
                        @endauth
                                </span>
                    <i class="fas fa-user icon"></i>
                </button></a>

        </li>
    @endif
</ul>
    </div>
  </div>
</nav>


</div>

<div class="darbarema-div">
<h1 class="darbarema">ارتباط با ما</h1>
</div>
<div class="background-building-div">
<img alt="background-building-top" src="../base/Images/2.png" class="background-building">
</div>
<div class="tri-right">
<img alt="background-texture-right" src="../base/Images/curve-3.png">
</div>
<div class="tri-left">
<img alt="background-texture-left" src="../base/Images/curve-2.png">
</div>
<div  class="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1222.7325595505563!2d59.59471140567839!3d36.32602483335554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f6c91b90ceeed15%3A0x97fdf7ec264568a8!2sRazavi%20Khorasan%20Province%2C%20Mashhad%2C%20Mil-e-Kariz%2C%20Abutaleb%20Boulevard%2C%20No.%2013%2C%20Iran!5e0!3m2!1sen!2sfr!4v1584611918175!5m2!1sen!2sfr" width="1088" height="416" frameborder="0" style="border:0; border-radius:10px; width:100%" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>

<div class="form-div">

<div class="textform">ثبت نظر و پیشنهاد<br>

<div style="font-size: 1.5vw ;">
<input style="margin-top: 5%; float: right; display: block; width: 45%;" class="wrapInput" type="text" name="name" placeholder="نام و نام خانوادگی" maxlength="25">
<input style="margin-top: 5%; float: right; display: block; width: 45%; margin-right: 2%;" class="wrapInput" type="email" name="email" placeholder="ایمیل" maxlength="25">
</div>
<input style="margin-top: 2%; width: 92%; font-size: 1.5vw" class="wrapInput" type="text" name="subject" placeholder="عنوان" maxlength="60">
<textarea style="margin-top: 2%; width: 92%; height: 150px; font-size: 1.5vw" class="wrapInput" type="text" name="idea" placeholder="شرح نظر..." maxlength="500"></textarea>
<button class="button">ثبت</button>
</div>

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
<div  class="iconstext" style="margin-top:5%;">amlakonlin_ir@</div>
</div>

<div  class="icon1">
<div  class="homeicon"><i class="fab fa-instagram"></i></div>
<div  class="iconstext" style="margin-top:5%;">amlakonlin.ir@</div>
</div>

</div>

</div>
<footer class="page-footer font-small indigo">
<div class="footer-back">
<img alt="footer-background" class="footer-image" src="../base/Images/bg-footer.png">
</div>
<div class="footer-logo">
<img alt="logo" src="../base/Images/Untitled-1.png" style="width:40%;">
</div>
  <div class=" text-center footer-inner text-md-left">
    <div class="row" style=" border-bottom:thin solid; padding: 0 7%;">
      <div class="col mx-auto">
        <ul class="list-unstyled footer-icon">
          <li>
            <img alt="ozv" src="../base/Images/ecunion-logo.png">
          </li>
          <li>
           <img alt="ozv" src="../base/Images/eanjoman.jpg">
          </li>
          <li>
            <img alt="ozv" src="../base/Images/logo.png">
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