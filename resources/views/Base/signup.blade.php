<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ٌثبت نام</title>
<link href="../base/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="../base/fontawesome/css/all.css" rel="stylesheet" type="text/css">
<link href="../base/css/sabtNam.css" rel="stylesheet" type="text/css">
<script src="../base/jquery/jquery-3-4-1.js"></script>
</head>

<body class="body">
@include("Base.section.popup")
<img alt="background-texture-top" src="../base/images/bgHeader2.png" class="background">
<div class="headingitems fixed-top">
<nav class="navbar navbar-expand-xl" style=" margin:0; box-sizing:inherit;padding-bottom:0.5%; width:100%; margin-top:1%;">
<div class="logo" >
<img alt="logo" src="../base/images/logo1.png" style="width:60%;">
</div>
  <div id="navbarNavAltMarkup" style="width: 100%; margin-bottom:2%;">
    <div class="navbar-nav">
    <div class="dropdown">
  <button class="dropbtn"><a class="nav-item nav-link navitems" href="index.html">صفحه اصلی</a></button>
</div>
     <div class="dropdown">
  <button class="dropbtn"><a class="nav-item nav-link navitems" href="moshaverin.html">مشاورین املاک</a></button>
</div>
      <div class="dropdown">
  <button class="dropbtn"><a class="nav-item nav-link navitems" href="#">قوانین</a></button>
</div>
 <div class="dropdown">
  <button class="dropbtn"><a class="nav-item nav-link navitems" href="DarbareMa.html">درباره ما</a></button>
</div>
<div class="dropdown">
  <button class="dropbtn"><a class="nav-item nav-link navitems" href="tamasbama.html">ارتباط با ما</a></button>
</div>
@include('Base.section.btnMenu')
    </div>
  </div>
</nav>
</div>
<div class="darbarema-div">
<h1 class="darbarema">ثبت نام</h1>
</div>
<div class="tri-right">
<img alt="background-texture-right" src="../base/images/curve3.png">
</div>
<div class="tri-left">
<img alt="background-texture-left" src="../base/images/curve1.png">
</div>
<div class="error">
<h2 > فیلد ایمیل با فرمت درستی وارد نشده!</h2>
</div>
 <div class="pop-content-form2 content3">
  <div class="pop-content-input3">
   <div class="input-top">
    <i class="fas fa-user input-user3"></i>
    <input type="text" name="name" placeholder="نام " maxlength="10" >
    <i class="fas fa-user input-user4"></i>
    <input type="text" name="family" placeholder="نام خانوادگی" maxlength="20">
    <div class="sex">
  <button class="sexbtn">منطقه <i class="fas fa-chevron-down"></i></button>
  <div class="sex-content">
    <a>منطقه 1 شهرداری</a>
    <a>منطقه 2 شهرداری</a>
    <a>منطقه 3 شهرداری</a>
    <a>منطقه 4 شهرداری</a>
    <a>منطقه 5 شهرداری</a>
    <a>منطقه 6 شهرداری</a>
    <a>منطقه 7 شهرداری</a>
    <a>منطقه 8 شهرداری</a>
    <a>منطقه 9 شهرداری</a>
    <a>منطقه 10 شهرداری</a>
    <a>منطقه 11 شهرداری</a>
    <a>منطقه 12 شهرداری</a>
    <a>منطقه 13 شهرداری</a>
    <a>منطقه ثامن </a>
  </div>
  </div>
    </div>
    <div class="input-text">
    <textarea type="text" name="adress" placeholder="آدرس دفتر" maxlength="200"  style="margin-top:3%"></textarea>
    </div>
   <div class="input-middle">
    <input type="text" name="office" placeholder="نام دفتر" maxlength="25" style="margin-left:30%;">
    <i class="fas fa-phone-square input-home"></i>
    <input type="number" name="phone-home" placeholder="شماره تلفن ثابت" onkeypress="return event.charCode >= 48 && event.charCode <= 57 && this.value.length < 11" >
   </div>
   <div class="input-bottom">
   <i class="fas fa-envelope input-envelope"></i>
    <input type="text" name="mail" placeholder="ایمیل" style="margin-right:28%; width:40%;" >
   </div>
  </div>
  <div class="subtitle">
 <h4>انتخاب نوع اشتراک</h4>
 <label class="systemlbl">تعداد سیستم: </label>
 <input class="systeminp" type="number" name="phone-home" placeholder="1" onkeypress="return event.charCode >= 48 && event.charCode <= 57 && this.value.length < 11" >
 </div>
  <div class="content-button">
  <button class="button1 btn">
   <h3 class="button-title">1 ماهه</h3>
   <p class="button-content">200 هزار تومان</p>
  </button>
  <button class="button2 btn">
   <h3 class="button-title">3 ماهه</h3>
   <p class="button-content">200 هزار تومان</p>
  </button>
  <button class="button3 btn">
   <h3 class="button-title">6 ماهه</h3>
   <p class="button-content">200 هزار تومان</p>
  </button>
  <button class="button4 btn">
   <h3 class="button-title">1 ساله</h3>
   <p class="button-content">200 هزار تومان</p>
  </button>
  </div>
  <div class="pop-buttons4">
   <button class="pop-button-right4 btn">
   انصراف
   </button>
   <button class="pop-button-left4 btn">
   پرداخت و ثبت اشتراک
   </button>
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
<script type="text/javascript" src="../base/jquery/sabtNam.js"></script>
</body>
</html>
