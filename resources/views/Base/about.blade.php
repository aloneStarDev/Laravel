<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ٌدرباره ما</title>
<link href="../base/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="../base/fontawesome/css/all.css" rel="stylesheet" type="text/css">
<link href="../base/css/DarbareMa.css" rel="stylesheet" type="text/css">
<script src="../base/jquery/jquery-3-4-1.js"></script>
</head>

<body class="body">
<img alt="background-texture-top" src="../base/Images/bg-header.png" class="background">
<div class="headingitems fixed-top">
<nav class="navbar navbar-expand-xl" style=" margin:0; box-sizing:inherit;padding-bottom:2px; width:100%; margin-top:10px;">
<div class="logo" >
<img alt="logo" src="../base/Images/Untitled-1.png" style="width:60%;">
</div>
  <div id="navbarNavAltMarkup" style="width: 100%; margin-bottom:2%;">
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
  <button class="dropbtn"><a class="nav-item nav-link navitems home" href="{{route('about')}}">درباره ما</a></button>
</div>
<div class="dropdown">
  <button class="dropbtn"><a class="nav-item nav-link navitems" href="{{route('contactUs')}}">ارتباط با ما</a></button>
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
<h1 class="darbarema">درباره ما</h1>
</div>
<div class="background-building-div">
<img alt="background-building-top" src="../base/Images/building3.png" class="background-building">
</div>
<div class="top-paragraph-div">
<h2 class="topparagraph">قویترین سیستم فایلینگ تحت اینترنت، ویژه<br>
 آژانس های املاک و متقاضیان خرید و یا اجاره ملک.</h2>
 </div>

<div class="tri-right">
<img alt="background-texture-right" src="../base/Images/curve-3.png">
</div>
<div class="tri-left">
<img alt="background-texture-left" src="../base/Images/curve-2.png">
</div>

<div class="box1">
  <div style="font-size: 22px; color: #6C6A6A" class="titleinfirstp">
از ویژگی های منحصر بفرد این سیستم می توان موارد زیر را نام برد :
  </div>
  <div style="text-align: justify; font-size: 15px; color:#6C6A6A" class="firstparaghraph">اطلاعات به روز مسکن که مستقیما توسط کاربران سامانه املاک آنلاین ( و نه اطلاعات کپی سیستم های دیگر و نه واسطه ها )<br>
هرروزه از طریق اینترنت به این سیسیتم وارد میگردند<br>قابلیت تغییر و تصحیح اطلاعات فایل ها ، به صورتی که اگر مالکی تصمیم به تغییر اطلاعات فایل خود از طریق اینترنت داشته<br>
باشد ، به صورت هم زمان به اطلاع آژانس های عضو سایت خواهد رسید<br>اجتناب از فداکردن کیفیت فایل‌ها در برابر کمیت(عدم  ادعای ارائه روزانه صدها فایل تکراری و با آدرسی دهی از مسیرهای<br>
متفاوت و به اسم واسطه های مختلف ، و همچنین طبقات مختلف یک ملک به عنوان فایل های مجزا  و املاکی که قبلا اجاره و یا<br>
فروش رفته اند! )
  </div>
 <img class="firstboxphoto" alt="firstboxphoto" src="../base/Images/g8.jpg">
</div>

<div class="box2">
  <div style="text-align: justify; font-size: 15px; color:#6C6A6A" class="secondparagraph ">کیفیت بالای اطلاعات به گونه ای که تمام فایل ها دارای جزئیات کامل و بدون نقص از قبیل قیمت ، نوع سند، طول بر<br>
 و ... می باشند (مانند فایل هایی که بر روی سامانه املاک آنلاین می باشند)<br> سرعت و دقت بالای سیستم جستجو (ساختار بانک اطلاعاتی سامانه املاک آنلاین برمبنای جدیدترین متدهای تکنولوژی<br>
 اطلاعات ساخته شده و باعث شده موتور جستجوی املاک آنلاین ، قویترین موتور جستجوی املاک و مستغلات باشد) <br>سادگی استفاده از نرم افزار و اجتناب از گذاشتن جزئیاتی که هرگز کسی از آن استفاده نمی کند ! (به گونه ای که کاربر<br>
 یا مشاور به سادگی و با استفاده از راهنمای خود سیستم فایلینگ قادر به استفاده از آن خواهد بود)<br>ارائه پشتیبانی بسیار کارآمد و همیشگی<br>عدم نیاز به اینترنت سرعت بالا ( حتی با استفاده از یک خط تلفن )<br>امکان ایجاد آگهی فایل برای آژانس ها، بگونه ای که این آگهی ها با شماره مشاور بر روی سایت املاک آنلاین قرار می گیرد<br>
 و باعث ایجاد مشتری ملکی می گردد
  </div>
<img class="secondboxphoto" alt="secondtboxphoto" src="../base/Images/approaches-to-setting-up-customer-support-1.jpg">
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
<script type="text/javascript" src="../base/jquery/DarbareMa.js"></script>
</body>
</html>