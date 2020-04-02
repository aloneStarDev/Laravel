<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ٌمدیریت مشاورین املاک</title>
<link href="{{asset("base/css/bootstrap.css")}}" rel="stylesheet" type="text/css">
<link href="{{asset("base/fontawesome/css/all.css")}}"  rel="stylesheet" type="text/css">
<script src="{{asset("base/jquery/jquery-3-4-1.js")}}" ></script>
<link href="{{asset("base/css/management.css")}}" rel="stylesheet" type="text/css">

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
  <button class="dropbtn"><a class="nav-item nav-link navitems" href="#">قوانین</a></button>
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
<div class="menue-div">
<h3 class="menue-h3">پنل کاربری  </h3>
 <div class="menue-top">
 <div class="menue-top-head">
 <button class="btn menue-head-btn"><i class="fas fa-address-card"></i> اطلاعات کاربری  <i class="fas fa-chevron-down arrow-down"></i></button>
 </div>
 <div class="menue-top-hide">
 <button class="btn menuebtn1"> مشخصات کاربری </button>
 <button class="btn menuebtn2"> ویرایش اطلاعات </button>
 <button class="btn menuebtn3"> ثبت شماره تماس </button>
 <button class="btn menuebtn4"> تغییر رمز عبور </button>
 </div>
 </div>
 <div class="menue-middle">
 <button class="btn"><i class="fas fa-star"></i> اشتراک </button>
 </div>
 <div class="menue-buttom">
 <button class="btn"><i class="fas fa-dollar-sign"></i> پرداخت ها </button>
 </div>
</div>
<div class="menue-content">
 <h4 class="menue-content-title"> مشخصات کاربری </h4>
 <div class="menue-content-sub1">
 <div class="sub1-div">
 <span class="span-right">نام و نام خانوادگی</span>
 <span class="span-left">محمد رضا کریمی</span>
 </div>
 <div class="sub1-div">
 <span class="span-right">نام دفتر</span>
 <span class="span-left">دفتر املاک کریمی</span>
 </div>
 <div class="sub1-div">
 <span class="span-right">نام کاربری</span>
 <span class="span-left">mohamadreza_k</span>
 </div>
 <div class="sub1-div">
<span class="span-right">ایمیل</span>
 <span class="span-left">m.r.karimi@gmail.com</span>
 </div>
 <div class="sub1-div">
 <span class="span-right">شماره تماس</span>
 <span class="span-left">09122222222</span>
 </div>
 <div class="sub1-div" style="border-bottom: none;">
 <span class="span-right">وضعیت حساب</span>
 <span class="span-left" style="color:#CA013D;">اشتراک شما منقضی شده است</span>
 </div>
 </div>
 <div class="menue-content-sub2">
 <div class="menue-image">
 <img alt="profile-image" src="{{asset("base/images/g8.jpg")}}">
 <button class="btn">تغییر عکس <i class="fas fa-plus"></i></button>
 </div>
 <div class="sub2-div">
  <label class="menue-label">: نام و نام خانوادگی</label>
  <input type="text" maxlength="40" class="menue-input">
 </div>
 <div class="sub2-div">
  <label class="menue-label">: نام کاربری</label>
  <input type="text" maxlength="40" class="menue-input">
 </div>
 <div class="sub2-div">
  <label class="menue-label">:نام دفتر</label>
  <input type="text" maxlength="40" class="menue-input">
 </div>
 <div class="sub2-div">
  <label class="menue-label">:ایمیل</label>
  <input type="text" maxlength="40" class="menue-input">
 </div>
 <div class="sub2-div">
  <label class="menue-label">:آدرس</label>
  <textarea type="text" maxlength="300" class="menue-input"></textarea>
 </div>
 <div class="sub2-div" style="border-bottom: none;">
  <label class="menue-label"> :درباره من</label>
  <textarea type="text" maxlength="300" class="menue-input"></textarea>
 </div>
  <div class="sub2-div" style="border-bottom: none;">
  <hr style="background:#BCB8C9;">
  <label class="menue-label" style="font-size: 1.4vw; margin-bottom: 5%;">راه‌های ارتباطی</label>
 </div>
 <div class="sub2-div" style="border-bottom: none;">
  <label class="menue-label">:تلگرام</label>
  <input type="text" maxlength="40" class="menue-input">
 </div>
 <div class="sub2-div" style="border-bottom: none;">
  <label class="menue-label"> :اینستاگرام</label>
  <input type="text" maxlength="40" class="menue-input">
 </div>
 <div class="sub2-div" style="border-bottom: none;">
  <label class="menue-label"> :توییتر</label>
  <input type="text" maxlength="40" class="menue-input">
 </div>
 <div class="sub2-button">
 <button class="sub2-save btn">ثبت تغییرات</button>
 </div>
 </div>
 <div class="menue-content-sub3">
 <div class="sub2-div">
  <label class="menue-label">:شماره تماس فعلی</label>
  <input type="number" style="background:#C7DFD5; border:thin solid #2F8C63;" onkeypress="return event.charCode >= 48 && event.charCode <= 57 && this.value.length < 11" class="menue-input">
 </div>
 <div class="sub2-div">
  <label class="menue-label">:ثبت شماره تماس جدید</label>
  <input type="number" onkeypress="return event.charCode >= 48 && event.charCode <= 57 && this.value.length < 11" class="menue-input">
 </div>
 <div class="sub2-button">
 <button class="sub2-save btn">دریافت کد تائید</button>
 </div>
 </div>
 <div class="menue-content-sub4">
 <div class="sub2-div">
  <label class="menue-label">:رمز عبور جدید</label>
  <input type="password" name="password" maxlength="25" class="menue-input">
 </div>
 <div class="sub2-div">
  <label class="menue-label">:تکرار رمز عبور جدید</label>
  <input type="password" name="password-repeat" maxlength="25" class="menue-input">
 </div>
 <div class="sub2-button">
 <button class="sub2-save btn">تغییر رمز عبور</button>
 </div>
 </div>
 <div class="menue-content-sub5">
 <div class="sub-border">
 <div class="sub1-div">
 <span class="span-right">وضعیت حساب</span>
 <span class="span-left" style="color:#28A29D;">اشتراک شما فعال میباشد</span>
 </div>
 <div class="sub1-div">
 <span class="span-right">نوع اشتراک تهیه شده</span>
 <span class="span-left">1 ساله</span>
 </div>
 <div class="sub1-div">
 <span class="span-right">تاریخ تهیه</span>
 <span class="span-left">98/12/21</span>
 </div>
 <div class="sub1-div" style="border-bottom:none;">
<span class="span-right">تاریخ انقضا</span>
 <span class="span-left">99/12/21</span>
 </div>
 </div>
 <div class="sub2-button">
 <button class="sub2-save btn">خرید اشتراک</button>
 </div>
 </div>
 <div class="menue-content-sub6">
 <table class="menue-table">
  <tr>
    <th class="table-title">عنوان</th>
    <th class="table-date">تاریخ</th>
    <th class="table-price">مبلغ پرداختی</th>
    <th class="table-state">وضعیت </th>
  </tr>
  <tr>
    <td class="table-title-sub">اشتراک 1 ساله</td>
    <td class="table-date-sub">98/12/21</td>
    <td class="table-price-sub">100 هزار تومان</td>
    <td class="state">موفق</td>
  </tr>
  <tr>
    <td class="table-title-sub">اشتراک 3 ماهه</td>
    <td class="table-date-sub">98/12/21</td>
    <td class="table-price-sub">100 هزار تومان</td>
    <td class="state red-cell">نا موفق</td>
  </tr>
  <tr>
    <td class="table-title-sub"> اشترک 3 ماهه</td>
    <td class="table-date-sub">98/12/21</td>
    <td class="table-price-sub">100 هزار تومان</td>
    <td class="state">موفق</td>
  </tr>
  <tr>
    <td class="table-title-sub">اشتراک 1 ماهه</td>
    <td class="table-date-sub">98/12/21</td>
    <td class="table-price-sub">100 هزار تومان</td>
    <td class="state">موفق</td>
  </tr>
  <tr>
    <td class="table-title-sub">اشتراک 6 ماهه</td>
    <td class="table-date-sub">98/12/21</td>
    <td class="table-price-sub">100 هزار تومان</td>
    <td class="state">موفق</td>
  </tr>
</table>
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
<script type="text/javascript" src="{{asset("base/jquery/management.js")}}"></script>
</body>
</html>
