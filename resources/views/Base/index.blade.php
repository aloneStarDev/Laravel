<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
<title>ٌصفحه اصلی</title>
<link href="base/css/index.css" rel="stylesheet" type="text/css">
<link href="base/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="base/fontawesome/css/all.css" rel="stylesheet" type="text/css">
<script src="base/jquery/jquery-3-4-1.js"></script>

</head>

<body class="body">
<div style="position:absolute; left:0px; top:0px;">
<img alt="background-texture-top" src="base/Images/bg-header-main.png" class="background">
</div>
<div style="position:absolute; top:27%; right:5%;">
<img alt="background-texture-top" src="base/Images/building-main.png" class="background-building">
</div>
<div class="headingitems fixed-top">
<nav class="navbar navbar-expand-xl" style=" margin:0; box-sizing:inherit;padding-bottom:0.5%; width:100%; margin-top:1%;">
<div class="logo" >
<img alt="logo" src="base/Images/Untitled-2.png" style="width:60%; transition-duration:0.5s;">
</div>
  <div id="navbarNavAltMarkup" style="width: 100%;margin-bottom: 2%;">
    <div class="navbar-nav">
    <div class="dropdown">
  <button class="dropbtn"><a class="nav-item nav-link navitems home" href="{{route('base')}}">صفحه اصلی</a></button>
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
  <button class="dropbtn"><a class="nav-item nav-link navitems" href="{{route('contactUs')}}">ارتباط با ما</a></button>
</div>
<ul class=" justify-content-end nav-pills topul">
  <li class="nav-item">
    <a href="#" class="atag firstProf">
    <button type="button" class="btn">
    <i class="fas fa-chevron-right" style="margin-left:5%;"></i>
    <span>
     ثبت آگهی رایگان
     </span>
    <i class="fas fa-plus icon"></i>
    </button></a>
  </li>
  <li class="nav-item">
    <a href="{{route('signin')}}" class="atag secProf">
    <button type="button" class="btn">
    <i class="fas fa-chevron-right" style="margin-left:5%;"></i>
    <span>
    ورود/ثبت نام مشاورین
    </span>
    <i class="fas fa-user icon"></i>
    </button></a>

  </li>
</ul>
    </div>
  </div>
</nav>
</div>
<!--<div class="pop-parent">
</div>
<div class="pop-div">
 <div class="pop-cross">
 <i class="fas fa-times"></i>
 </div>
 <div class="pop-top">
  <div class="pop-top-right">
  <button class="pop-right-btn btn">
  ثبت نام
  </button>
  </div><div class="pop-top-left">
  <button class="pop-left-btn btn">
  ورود
  </button>
  </div>
 </div>
 <div class="pop-content">
 <div class="pop-content-title">
 <h3>فرم ورود</h3>
 </div>
 <div class="pop-content-image">
 <img alt="vorood-img" src="base/Images/3.png">
 </div>
 <div class="pop-content-form">
  <div class="pop-content-input">
   <i class="fas fa-user input-user"></i>
   <input type="text" name="searchHouse" placeholder="نام کاربری" maxlength="25" >
   <i class="fas fa-lock input-lock"></i>
   <input type="password" name="searchHouse" placeholder="رمز عبور" maxlength="25"  style="margin-top:3%" >
  </div>
  <div class="pop-content-belowInput">
   <div class="pop-checkbox">
   <input type="checkbox" class="checkbox">
   <span>مرا به خاطر بسپار !</span>
   </div>
   <div class="pop-next-checkbox">
   <span>بازیابی رمزعبور</span>
   </div>
  </div>
  <div class="pop-buttons">
   <button class="pop-button-right btn">
   انصراف
   </button>
   <button class="pop-button-left btn">
   ورود
   </button>
  </div>
 </div>
 </div>
</div>-->
<div class="quote">
<div class="h1-top">
<h1> املاک آنلاین</h1>
</div>
<div class="head">
جست و جوی املاک سطح شهر  به همراه
فیلترهای اختصاصی و پیشرفته
</div>
<p class="head-p">
امکان فیلترگزاری بر اساس نوع ملک،
نوع سند،پارکینگ،قیمت، متراژ و...
که در اختیار عموم کاربران قرار میگیرد
</p>
</div>
<div class="search">
<div class="search-btn-buy-rent">
<a href="#" class="buy-button">
    <button type="button" class="btn">
      خرید
    </button></a>
<a href="#" class="rent-button">
    <button type="button" class="btn">
      اجاره
    </button></a>
   </div>
<div class="search-search">
<div class="search-search-text">
<div class="search-search-input">
 <div class="mahale" style="border-left:thin solid #707070">
  <button class="mahalebtn"><i class="fas fa-map-marker-alt" style="background: -webkit-linear-gradient(rgba(64,22,186,1),  rgba(190,86,212,1));
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;"></i> محله <i class="fas fa-chevron-down"></i></button>
  <div id="myDropdown" class="mahale-content">
    <a>فرهزاد</a>
    <a>الهیه</a>
    <a>ملک</a>
  </div>
</div>
<form>
 <div class="wrapInput">
   <input type="text" name="searchHouse" placeholder="جستجوی کد ملک  یا کلید واژه" maxlength="25" >
  </div>
  <a href="#" class="search-button">
    <button type="button" class="btn">
     جستجو
    </button></a>
</form>
</div>
<div class="search-search-input pishrafte-hide">
 <div class="cost">
  <button class="costbtn">نوع ملک <i class="fas fa-chevron-down"></i></button>
  <div class="cost-content">
    <a>آپارتمان</a>
    <a>ویلایی</a>
    <a>اداری و تجاری</a>
    <a>زمین و کلنگی</a>
  </div>
</div>
<div class="metrazh">
  <div class="metrazhbtn">
  <span>
  متراژ:
  </span>
  <span style=" margin-right:4%;"> از</span>
  <input type="number" name="from" style=" right:18%;" id="metre1" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
  <span style="margin-right:39%;"> تا</span>
  <input type="number" name="to" style="left:5.2%;" id="metre2" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
  </div>
</div>
<form>
  <a href="#" class="search-button">
    <button type="button" class="btn">
     جستجو پیشرفته
    </button></a>
</form>
</div>
</div>

<div class="search-pishrafte">
<button class="pishraftebtn">جستجو پیشرفته <i class="fas fa-chevron-down"></i></button>
</div>
</div>
</div>
<div class="tri-left">
<img class="tri-image-left" alt="tri-background" src="base/Images/curve-2.png">
</div>
<div class="tri-right">
<img class="tri-image-right" alt="tri-background" src="base/Images/curve-3.png">
</div>
<div id="carouselExampleControls" class="carousel carousel1 slide">

  <div class="carousel-inner">

    <div class="carousel-item first-slide">

      <div class="cell" style="margin-right:2%;">
      <img alt="house" src="base/Images/city_illustrations_empire_state_building_2x.png" class="house-image">
      <h3 class="cell-h3">
      عنوان
      </h3>
      <div class="cell-content">
      <span class="cell-type">
      <i class="fas fa-home"></i>
      مسکونی
      </span>
      <span class="cell-metre">
      <i class="fas fa-expand"></i>
      متر 100
      </span>
      <span class="cell-beds">
      <i class="fas fa-bed"></i>
      دو خوابه
      </span>
      <span class="cell-address">
      <i class="fas fa-map-marker-alt"></i>
      بلوار صیاد شیرازی
      </span>
      <span class="cell-year">
      رهن: 100 میلیون تومان
      </span>
      <span class="cell-month">
      اجاره: 250 میلیون تومان
      </span>
      <button class="btn cell-btn" style="margin-left:10%;">
      جزئیات
      </button>
      <button class="btn cell-btn">
      تماس
      <i class="fas fa-phone"></i>
      </button>
      </div>
      </div>
      <div class="cell">
      <img alt="house" src="base/Images/city_illustrations_empire_state_building_2x.png" class="house-image">
      <h3 class="cell-h3">
      عنوان
      </h3>
      <div class="cell-content">
      <span class="cell-type">
      <i class="fas fa-home"></i>
      مسکونی
      </span>
      <span class="cell-metre">
      <i class="fas fa-expand"></i>
      متر 100
      </span>
      <span class="cell-beds">
      <i class="fas fa-bed"></i>
      دو خوابه
      </span>
      <span class="cell-address">
      <i class="fas fa-map-marker-alt"></i>
      بلوار صیاد شیرازی
      </span>
      <span class="cell-year">
      رهن: 100 میلیون تومان
      </span>
      <span class="cell-month">
      اجاره: 250 میلیون تومان
      </span>
      <button class="btn cell-btn" style="margin-left:10%;">
      جزئیات
      </button>
      <button class="btn cell-btn">
      تماس
      <i class="fas fa-phone"></i>
      </button>
      </div>
      </div>
      <div class="cell">
      <img alt="house" src="base/Images/city_illustrations_empire_state_building_2x.png" class="house-image">
      <h3 class="cell-h3">
      عنوان
      </h3>
      <div class="cell-content">
      <span class="cell-type">
      <i class="fas fa-home"></i>
      مسکونی
      </span>
      <span class="cell-metre">
      <i class="fas fa-expand"></i>
      متر 100
      </span>
      <span class="cell-beds">
      <i class="fas fa-bed"></i>
      دو خوابه
      </span>
      <span class="cell-address">
      <i class="fas fa-map-marker-alt"></i>
      بلوار صیاد شیرازی
      </span>
      <span class="cell-year">
      رهن: 100 میلیون تومان
      </span>
      <span class="cell-month">
      اجاره: 250 میلیون تومان
      </span>
      <button class="btn cell-btn" style="margin-left:10%;">
      جزئیات
      </button>
      <button class="btn cell-btn">
      تماس
      <i class="fas fa-phone"></i>
      </button>
      </div>
      </div>
      <div class="cell">
      <img alt="house" src="base/Images/city_illustrations_empire_state_building_2x.png" class="house-image">
      <h3 class="cell-h3">
      عنوان
      </h3>
      <div class="cell-content">
      <span class="cell-type">
      <i class="fas fa-home"></i>
      مسکونی
      </span>
      <span class="cell-metre">
      <i class="fas fa-expand"></i>
      متر 100
      </span>
      <span class="cell-beds">
      <i class="fas fa-bed"></i>
      دو خوابه
      </span>
      <span class="cell-address">
      <i class="fas fa-map-marker-alt"></i>
      بلوار صیاد شیرازی
      </span>
      <span class="cell-year">
      رهن: 100 میلیون تومان
      </span>
      <span class="cell-month">
      اجاره: 250 میلیون تومان
      </span>
      <button class="btn cell-btn" style="margin-left:10%;">
      جزئیات
      </button>
      <button class="btn cell-btn">
      تماس
      <i class="fas fa-phone"></i>
      </button>
      </div>
      </div>
      <div class="cell" style="margin-right:2%;">
      <img alt="house" src="base/Images/city_illustrations_empire_state_building_2x.png" class="house-image">
      <h3 class="cell-h3">
      عنوان
      </h3>
      <div class="cell-content">
      <span class="cell-type">
      <i class="fas fa-home"></i>
      مسکونی
      </span>
      <span class="cell-metre">
      <i class="fas fa-expand"></i>
      متر 100
      </span>
      <span class="cell-beds">
      <i class="fas fa-bed"></i>
      دو خوابه
      </span>
      <span class="cell-address">
      <i class="fas fa-map-marker-alt"></i>
      بلوار صیاد شیرازی
      </span>
      <span class="cell-year">
      رهن: 100 میلیون تومان
      </span>
      <span class="cell-month">
      اجاره: 250 میلیون تومان
      </span>
      <button class="btn cell-btn" style="margin-left:10%;">
      جزئیات
      </button>
      <button class="btn cell-btn">
      تماس
      <i class="fas fa-phone"></i>
      </button>
      </div>
      </div>
      <div class="cell">
      <img alt="house" src="base/Images/city_illustrations_empire_state_building_2x.png" class="house-image">
      <h3 class="cell-h3">
      عنوان
      </h3>
      <div class="cell-content">
      <span class="cell-type">
      <i class="fas fa-home"></i>
      مسکونی
      </span>
      <span class="cell-metre">
      <i class="fas fa-expand"></i>
      متر 100
      </span>
      <span class="cell-beds">
      <i class="fas fa-bed"></i>
      دو خوابه
      </span>
      <span class="cell-address">
      <i class="fas fa-map-marker-alt"></i>
      بلوار صیاد شیرازی
      </span>
      <span class="cell-year">
      رهن: 100 میلیون تومان
      </span>
      <span class="cell-month">
      اجاره: 250 میلیون تومان
      </span>
      <button class="btn cell-btn" style="margin-left:10%;">
      جزئیات
      </button>
      <button class="btn cell-btn">
      تماس
      <i class="fas fa-phone"></i>
      </button>
      </div>
      </div>
      <div class="cell">
      <img alt="house" src="base/Images/city_illustrations_empire_state_building_2x.png" class="house-image">
      <h3 class="cell-h3">
      عنوان
      </h3>
      <div class="cell-content">
      <span class="cell-type">
      <i class="fas fa-home"></i>
      مسکونی
      </span>
      <span class="cell-metre">
      <i class="fas fa-expand"></i>
      متر 100
      </span>
      <span class="cell-beds">
      <i class="fas fa-bed"></i>
      دو خوابه
      </span>
      <span class="cell-address">
      <i class="fas fa-map-marker-alt"></i>
      بلوار صیاد شیرازی
      </span>
      <span class="cell-year">
      رهن: 100 میلیون تومان
      </span>
      <span class="cell-month">
      اجاره: 250 میلیون تومان
      </span>
      <button class="btn cell-btn" style="margin-left:10%;">
      جزئیات
      </button>
      <button class="btn cell-btn">
      تماس
      <i class="fas fa-phone"></i>
      </button>
      </div>
      </div>
      <div class="cell">
      <img alt="house" src="base/Images/city_illustrations_empire_state_building_2x.png" class="house-image">
      <h3 class="cell-h3">
      عنوان
      </h3>
      <div class="cell-content">
      <span class="cell-type">
      <i class="fas fa-home"></i>
      مسکونی
      </span>
      <span class="cell-metre">
      <i class="fas fa-expand"></i>
      متر 100
      </span>
      <span class="cell-beds">
      <i class="fas fa-bed"></i>
      دو خوابه
      </span>
      <span class="cell-address">
      <i class="fas fa-map-marker-alt"></i>
      بلوار صیاد شیرازی
      </span>
      <span class="cell-year">
      رهن: 100 میلیون تومان
      </span>
      <span class="cell-month">
      اجاره: 250 میلیون تومان
      </span>
      <button class="btn cell-btn" style="margin-left:10%;">
      جزئیات
      </button>
      <button class="btn cell-btn">
      تماس
      <i class="fas fa-phone"></i>
      </button>
      </div>
      </div>
      <div class="cell" style="margin-right:2%;">
      <img alt="house" src="base/Images/city_illustrations_empire_state_building_2x.png" class="house-image">
      <h3 class="cell-h3">
      عنوان
      </h3>
      <div class="cell-content">
      <span class="cell-type">
      <i class="fas fa-home"></i>
      مسکونی
      </span>
      <span class="cell-metre">
      <i class="fas fa-expand"></i>
      متر 100
      </span>
      <span class="cell-beds">
      <i class="fas fa-bed"></i>
      دو خوابه
      </span>
      <span class="cell-address">
      <i class="fas fa-map-marker-alt"></i>
      بلوار صیاد شیرازی
      </span>
      <span class="cell-year">
      رهن: 100 میلیون تومان
      </span>
      <span class="cell-month">
      اجاره: 250 میلیون تومان
      </span>
      <button class="btn cell-btn" style="margin-left:10%;">
      جزئیات
      </button>
      <button class="btn cell-btn">
      تماس
      <i class="fas fa-phone"></i>
      </button>
      </div>
      </div>
      <div class="cell">
      <img alt="house" src="base/Images/city_illustrations_empire_state_building_2x.png" class="house-image">
      <h3 class="cell-h3">
      عنوان
      </h3>
      <div class="cell-content">
      <span class="cell-type">
      <i class="fas fa-home"></i>
      مسکونی
      </span>
      <span class="cell-metre">
      <i class="fas fa-expand"></i>
      متر 100
      </span>
      <span class="cell-beds">
      <i class="fas fa-bed"></i>
      دو خوابه
      </span>
      <span class="cell-address">
      <i class="fas fa-map-marker-alt"></i>
      بلوار صیاد شیرازی
      </span>
      <span class="cell-year">
      رهن: 100 میلیون تومان
      </span>
      <span class="cell-month">
      اجاره: 250 میلیون تومان
      </span>
      <button class="btn cell-btn" style="margin-left:10%;">
      جزئیات
      </button>
      <button class="btn cell-btn">
      تماس
      <i class="fas fa-phone"></i>
      </button>
      </div>
      </div>
      <div class="cell">
      <img alt="house" src="base/Images/city_illustrations_empire_state_building_2x.png" class="house-image">
      <h3 class="cell-h3">
      عنوان
      </h3>
      <div class="cell-content">
      <span class="cell-type">
      <i class="fas fa-home"></i>
      مسکونی
      </span>
      <span class="cell-metre">
      <i class="fas fa-expand"></i>
      متر 100
      </span>
      <span class="cell-beds">
      <i class="fas fa-bed"></i>
      دو خوابه
      </span>
      <span class="cell-address">
      <i class="fas fa-map-marker-alt"></i>
      بلوار صیاد شیرازی
      </span>
      <span class="cell-year">
      رهن: 100 میلیون تومان
      </span>
      <span class="cell-month">
      اجاره: 250 میلیون تومان
      </span>
      <button class="btn cell-btn" style="margin-left:10%;">
      جزئیات
      </button>
      <button class="btn cell-btn">
      تماس
      <i class="fas fa-phone"></i>
      </button>
      </div>
      </div>
      <div class="cell">
      <img alt="house" src="base/Images/city_illustrations_empire_state_building_2x.png" class="house-image">
      <h3 class="cell-h3">
      عنوان
      </h3>
      <div class="cell-content">
      <span class="cell-type">
      <i class="fas fa-home"></i>
      مسکونی
      </span>
      <span class="cell-metre">
      <i class="fas fa-expand"></i>
      متر 100
      </span>
      <span class="cell-beds">
      <i class="fas fa-bed"></i>
      دو خوابه
      </span>
      <span class="cell-address">
      <i class="fas fa-map-marker-alt"></i>
      بلوار صیاد شیرازی
      </span>
      <span class="cell-year">
      رهن: 100 میلیون تومان
      </span>
      <span class="cell-month">
      اجاره: 250 میلیون تومان
      </span>
      <button class="btn cell-btn" style="margin-left:10%;">
      جزئیات
      </button>
      <button class="btn cell-btn">
      تماس
      <i class="fas fa-phone"></i>
      </button>
      </div>
      </div>
    </div>
    <div class="carousel-item active second-slide">

      <div class="cell" style="margin-right:2%;">
      <img alt="house" src="base/Images/city_illustrations_empire_state_building_2x.png" class="house-image">
      <h3 class="cell-h3">
      عنوان
      </h3>
      <div class="cell-content">
      <span class="cell-type">
      <i class="fas fa-home"></i>
      مسکونی
      </span>
      <span class="cell-metre">
      <i class="fas fa-expand"></i>
      متر 100
      </span>
      <span class="cell-beds">
      <i class="fas fa-bed"></i>
      دو خوابه
      </span>
      <span class="cell-address">
      <i class="fas fa-map-marker-alt"></i>
      بلوار صیاد شیرازی
      </span>
      <span class="cell-year">
      رهن: 100 میلیون تومان
      </span>
      <span class="cell-month">
      اجاره: 250 میلیون تومان
      </span>
      <button class="btn cell-btn" style="margin-left:10%;">
      جزئیات
      </button>
      <button class="btn cell-btn">
      تماس
      <i class="fas fa-phone"></i>
      </button>
      </div>
      </div>
      <div class="cell">
      <img alt="house" src="base/Images/city_illustrations_empire_state_building_2x.png" class="house-image">
      <h3 class="cell-h3">
      عنوان
      </h3>
      <div class="cell-content">
      <span class="cell-type">
      <i class="fas fa-home"></i>
      مسکونی
      </span>
      <span class="cell-metre">
      <i class="fas fa-expand"></i>
      متر 100
      </span>
      <span class="cell-beds">
      <i class="fas fa-bed"></i>
      دو خوابه
      </span>
      <span class="cell-address">
      <i class="fas fa-map-marker-alt"></i>
      بلوار صیاد شیرازی
      </span>
      <span class="cell-year">
      رهن: 100 میلیون تومان
      </span>
      <span class="cell-month">
      اجاره: 250 میلیون تومان
      </span>
      <button class="btn cell-btn" style="margin-left:10%;">
      جزئیات
      </button>
      <button class="btn cell-btn">
      تماس
      <i class="fas fa-phone"></i>
      </button>
      </div>
      </div>
      <div class="cell">
      <img alt="house" src="base/Images/city_illustrations_empire_state_building_2x.png" class="house-image">
      <h3 class="cell-h3">
      عنوان
      </h3>
      <div class="cell-content">
      <span class="cell-type">
      <i class="fas fa-home"></i>
      مسکونی
      </span>
      <span class="cell-metre">
      <i class="fas fa-expand"></i>
      متر 100
      </span>
      <span class="cell-beds">
      <i class="fas fa-bed"></i>
      دو خوابه
      </span>
      <span class="cell-address">
      <i class="fas fa-map-marker-alt"></i>
      بلوار صیاد شیرازی
      </span>
      <span class="cell-year">
      رهن: 100 میلیون تومان
      </span>
      <span class="cell-month">
      اجاره: 250 میلیون تومان
      </span>
      <button class="btn cell-btn" style="margin-left:10%;">
      جزئیات
      </button>
      <button class="btn cell-btn">
      تماس
      <i class="fas fa-phone"></i>
      </button>
      </div>
      </div>
      <div class="cell">
      <img alt="house" src="base/Images/city_illustrations_empire_state_building_2x.png" class="house-image">
      <h3 class="cell-h3">
      عنوان
      </h3>
      <div class="cell-content">
      <span class="cell-type">
      <i class="fas fa-home"></i>
      مسکونی
      </span>
      <span class="cell-metre">
      <i class="fas fa-expand"></i>
      متر 100
      </span>
      <span class="cell-beds">
      <i class="fas fa-bed"></i>
      دو خوابه
      </span>
      <span class="cell-address">
      <i class="fas fa-map-marker-alt"></i>
      بلوار صیاد شیرازی
      </span>
      <span class="cell-year">
      رهن: 100 میلیون تومان
      </span>
      <span class="cell-month">
      اجاره: 250 میلیون تومان
      </span>
      <button class="btn cell-btn" style="margin-left:10%;">
      جزئیات
      </button>
      <button class="btn cell-btn">
      تماس
      <i class="fas fa-phone"></i>
      </button>
      </div>
      </div>
      <div class="cell" style="margin-right:2%;">
      <img alt="house" src="base/Images/city_illustrations_empire_state_building_2x.png" class="house-image">
      <h3 class="cell-h3">
      عنوان
      </h3>
      <div class="cell-content">
      <span class="cell-type">
      <i class="fas fa-home"></i>
      مسکونی
      </span>
      <span class="cell-metre">
      <i class="fas fa-expand"></i>
      متر 100
      </span>
      <span class="cell-beds">
      <i class="fas fa-bed"></i>
      دو خوابه
      </span>
      <span class="cell-address">
      <i class="fas fa-map-marker-alt"></i>
      بلوار صیاد شیرازی
      </span>
      <span class="cell-year">
      رهن: 100 میلیون تومان
      </span>
      <span class="cell-month">
      اجاره: 250 میلیون تومان
      </span>
      <button class="btn cell-btn" style="margin-left:10%;">
      جزئیات
      </button>
      <button class="btn cell-btn">
      تماس
      <i class="fas fa-phone"></i>
      </button>
      </div>
      </div>
      <div class="cell">
      <img alt="house" src="base/Images/city_illustrations_empire_state_building_2x.png" class="house-image">
      <h3 class="cell-h3">
      عنوان
      </h3>
      <div class="cell-content">
      <span class="cell-type">
      <i class="fas fa-home"></i>
      مسکونی
      </span>
      <span class="cell-metre">
      <i class="fas fa-expand"></i>
      متر 100
      </span>
      <span class="cell-beds">
      <i class="fas fa-bed"></i>
      دو خوابه
      </span>
      <span class="cell-address">
      <i class="fas fa-map-marker-alt"></i>
      بلوار صیاد شیرازی
      </span>
      <span class="cell-year">
      رهن: 100 میلیون تومان
      </span>
      <span class="cell-month">
      اجاره: 250 میلیون تومان
      </span>
      <button class="btn cell-btn" style="margin-left:10%;">
      جزئیات
      </button>
      <button class="btn cell-btn">
      تماس
      <i class="fas fa-phone"></i>
      </button>
      </div>
      </div>
      <div class="cell">
      <img alt="house" src="base/Images/city_illustrations_empire_state_building_2x.png" class="house-image">
      <h3 class="cell-h3">
      عنوان
      </h3>
      <div class="cell-content">
      <span class="cell-type">
      <i class="fas fa-home"></i>
      مسکونی
      </span>
      <span class="cell-metre">
      <i class="fas fa-expand"></i>
      متر 100
      </span>
      <span class="cell-beds">
      <i class="fas fa-bed"></i>
      دو خوابه
      </span>
      <span class="cell-address">
      <i class="fas fa-map-marker-alt"></i>
      بلوار صیاد شیرازی
      </span>
      <span class="cell-year">
      رهن: 100 میلیون تومان
      </span>
      <span class="cell-month">
      اجاره: 250 میلیون تومان
      </span>
      <button class="btn cell-btn" style="margin-left:10%;">
      جزئیات
      </button>
      <button class="btn cell-btn">
      تماس
      <i class="fas fa-phone"></i>
      </button>
      </div>
      </div>
      <div class="cell">
      <img alt="house" src="base/Images/city_illustrations_empire_state_building_2x.png" class="house-image">
      <h3 class="cell-h3">
      عنوان
      </h3>
      <div class="cell-content">
      <span class="cell-type">
      <i class="fas fa-home"></i>
      مسکونی
      </span>
      <span class="cell-metre">
      <i class="fas fa-expand"></i>
      متر 100
      </span>
      <span class="cell-beds">
      <i class="fas fa-bed"></i>
      دو خوابه
      </span>
      <span class="cell-address">
      <i class="fas fa-map-marker-alt"></i>
      بلوار صیاد شیرازی
      </span>
      <span class="cell-year">
      رهن: 100 میلیون تومان
      </span>
      <span class="cell-month">
      اجاره: 250 میلیون تومان
      </span>
      <button class="btn cell-btn" style="margin-left:10%;">
      جزئیات
      </button>
      <button class="btn cell-btn">
      تماس
      <i class="fas fa-phone"></i>
      </button>
      </div>
      </div>
      <div class="cell" style="margin-right:2%;">
      <img alt="house" src="base/Images/city_illustrations_empire_state_building_2x.png" class="house-image">
      <h3 class="cell-h3">
      عنوان
      </h3>
      <div class="cell-content">
      <span class="cell-type">
      <i class="fas fa-home"></i>
      مسکونی
      </span>
      <span class="cell-metre">
      <i class="fas fa-expand"></i>
      متر 100
      </span>
      <span class="cell-beds">
      <i class="fas fa-bed"></i>
      دو خوابه
      </span>
      <span class="cell-address">
      <i class="fas fa-map-marker-alt"></i>
      بلوار صیاد شیرازی
      </span>
      <span class="cell-year">
      رهن: 100 میلیون تومان
      </span>
      <span class="cell-month">
      اجاره: 250 میلیون تومان
      </span>
      <button class="btn cell-btn" style="margin-left:10%;">
      جزئیات
      </button>
      <button class="btn cell-btn">
      تماس
      <i class="fas fa-phone"></i>
      </button>
      </div>
      </div>
      <div class="cell">
      <img alt="house" src="base/Images/city_illustrations_empire_state_building_2x.png" class="house-image">
      <h3 class="cell-h3">
      عنوان
      </h3>
      <div class="cell-content">
      <span class="cell-type">
      <i class="fas fa-home"></i>
      مسکونی
      </span>
      <span class="cell-metre">
      <i class="fas fa-expand"></i>
      متر 100
      </span>
      <span class="cell-beds">
      <i class="fas fa-bed"></i>
      دو خوابه
      </span>
      <span class="cell-address">
      <i class="fas fa-map-marker-alt"></i>
      بلوار صیاد شیرازی
      </span>
      <span class="cell-year">
      رهن: 100 میلیون تومان
      </span>
      <span class="cell-month">
      اجاره: 250 میلیون تومان
      </span>
      <button class="btn cell-btn" style="margin-left:10%;">
      جزئیات
      </button>
      <button class="btn cell-btn">
      تماس
      <i class="fas fa-phone"></i>
      </button>
      </div>
      </div>
      <div class="cell">
      <img alt="house" src="base/Images/city_illustrations_empire_state_building_2x.png" class="house-image">
      <h3 class="cell-h3">
      عنوان
      </h3>
      <div class="cell-content">
      <span class="cell-type">
      <i class="fas fa-home"></i>
      مسکونی
      </span>
      <span class="cell-metre">
      <i class="fas fa-expand"></i>
      متر 100
      </span>
      <span class="cell-beds">
      <i class="fas fa-bed"></i>
      دو خوابه
      </span>
      <span class="cell-address">
      <i class="fas fa-map-marker-alt"></i>
      بلوار صیاد شیرازی
      </span>
      <span class="cell-year">
      رهن: 100 میلیون تومان
      </span>
      <span class="cell-month">
      اجاره: 250 میلیون تومان
      </span>
      <button class="btn cell-btn" style="margin-left:10%;">
      جزئیات
      </button>
      <button class="btn cell-btn">
      تماس
      <i class="fas fa-phone"></i>
      </button>
      </div>
      </div>
      <div class="cell">
      <img alt="house" src="base/Images/city_illustrations_empire_state_building_2x.png" class="house-image">
      <h3 class="cell-h3">
      عنوان
      </h3>
      <div class="cell-content">
      <span class="cell-type">
      <i class="fas fa-home"></i>
      مسکونی
      </span>
      <span class="cell-metre">
      <i class="fas fa-expand"></i>
      متر 100
      </span>
      <span class="cell-beds">
      <i class="fas fa-bed"></i>
      دو خوابه
      </span>
      <span class="cell-address">
      <i class="fas fa-map-marker-alt"></i>
      بلوار صیاد شیرازی
      </span>
      <span class="cell-year">
      رهن: 100 میلیون تومان
      </span>
      <span class="cell-month">
      اجاره: 250 میلیون تومان
      </span>
      <button class="btn cell-btn" style="margin-left:10%;">
      جزئیات
      </button>
      <button class="btn cell-btn">
      تماس
      <i class="fas fa-phone"></i>
      </button>
      </div>
      </div>
    </div>
    <div class="carousel-item third-slide">

      <div class="cell" style="margin-right:2%;">
      <img alt="house" src="base/Images/city_illustrations_empire_state_building_2x.png" class="house-image">
      <h3 class="cell-h3">
      عنوان
      </h3>
      <div class="cell-content">
      <span class="cell-type">
      <i class="fas fa-home"></i>
      مسکونی
      </span>
      <span class="cell-metre">
      <i class="fas fa-expand"></i>
      متر 100
      </span>
      <span class="cell-beds">
      <i class="fas fa-bed"></i>
      دو خوابه
      </span>
      <span class="cell-address">
      <i class="fas fa-map-marker-alt"></i>
      بلوار صیاد شیرازی
      </span>
      <span class="cell-year">
      رهن: 100 میلیون تومان
      </span>
      <span class="cell-month">
      اجاره: 250 میلیون تومان
      </span>
      <button class="btn cell-btn" style="margin-left:10%;">
      جزئیات
      </button>
      <button class="btn cell-btn">
      تماس
      <i class="fas fa-phone"></i>
      </button>
      </div>
      </div>
      <div class="cell">
      <img alt="house" src="base/Images/city_illustrations_empire_state_building_2x.png" class="house-image">
      <h3 class="cell-h3">
      عنوان
      </h3>
      <div class="cell-content">
      <span class="cell-type">
      <i class="fas fa-home"></i>
      مسکونی
      </span>
      <span class="cell-metre">
      <i class="fas fa-expand"></i>
      متر 100
      </span>
      <span class="cell-beds">
      <i class="fas fa-bed"></i>
      دو خوابه
      </span>
      <span class="cell-address">
      <i class="fas fa-map-marker-alt"></i>
      بلوار صیاد شیرازی
      </span>
      <span class="cell-year">
      رهن: 100 میلیون تومان
      </span>
      <span class="cell-month">
      اجاره: 250 میلیون تومان
      </span>
      <button class="btn cell-btn" style="margin-left:10%;">
      جزئیات
      </button>
      <button class="btn cell-btn">
      تماس
      <i class="fas fa-phone"></i>
      </button>
      </div>
      </div>
      <div class="cell">
      <img alt="house" src="base/Images/city_illustrations_empire_state_building_2x.png" class="house-image">
      <h3 class="cell-h3">
      عنوان
      </h3>
      <div class="cell-content">
      <span class="cell-type">
      <i class="fas fa-home"></i>
      مسکونی
      </span>
      <span class="cell-metre">
      <i class="fas fa-expand"></i>
      متر 100
      </span>
      <span class="cell-beds">
      <i class="fas fa-bed"></i>
      دو خوابه
      </span>
      <span class="cell-address">
      <i class="fas fa-map-marker-alt"></i>
      بلوار صیاد شیرازی
      </span>
      <span class="cell-year">
      رهن: 100 میلیون تومان
      </span>
      <span class="cell-month">
      اجاره: 250 میلیون تومان
      </span>
      <button class="btn cell-btn" style="margin-left:10%;">
      جزئیات
      </button>
      <button class="btn cell-btn">
      تماس
      <i class="fas fa-phone"></i>
      </button>
      </div>
      </div>
      <div class="cell">
      <img alt="house" src="base/Images/city_illustrations_empire_state_building_2x.png" class="house-image">
      <h3 class="cell-h3">
      عنوان
      </h3>
      <div class="cell-content">
      <span class="cell-type">
      <i class="fas fa-home"></i>
      مسکونی
      </span>
      <span class="cell-metre">
      <i class="fas fa-expand"></i>
      متر 100
      </span>
      <span class="cell-beds">
      <i class="fas fa-bed"></i>
      دو خوابه
      </span>
      <span class="cell-address">
      <i class="fas fa-map-marker-alt"></i>
      بلوار صیاد شیرازی
      </span>
      <span class="cell-year">
      رهن: 100 میلیون تومان
      </span>
      <span class="cell-month">
      اجاره: 250 میلیون تومان
      </span>
      <button class="btn cell-btn" style="margin-left:10%;">
      جزئیات
      </button>
      <button class="btn cell-btn">
      تماس
      <i class="fas fa-phone"></i>
      </button>
      </div>
      </div>
      <div class="cell" style="margin-right:2%;">
      <img alt="house" src="base/Images/city_illustrations_empire_state_building_2x.png" class="house-image">
      <h3 class="cell-h3">
      عنوان
      </h3>
      <div class="cell-content">
      <span class="cell-type">
      <i class="fas fa-home"></i>
      مسکونی
      </span>
      <span class="cell-metre">
      <i class="fas fa-expand"></i>
      متر 100
      </span>
      <span class="cell-beds">
      <i class="fas fa-bed"></i>
      دو خوابه
      </span>
      <span class="cell-address">
      <i class="fas fa-map-marker-alt"></i>
      بلوار صیاد شیرازی
      </span>
      <span class="cell-year">
      رهن: 100 میلیون تومان
      </span>
      <span class="cell-month">
      اجاره: 250 میلیون تومان
      </span>
      <button class="btn cell-btn" style="margin-left:10%;">
      جزئیات
      </button>
      <button class="btn cell-btn">
      تماس
      <i class="fas fa-phone"></i>
      </button>
      </div>
      </div>
      <div class="cell">
      <img alt="house" src="base/Images/city_illustrations_empire_state_building_2x.png" class="house-image">
      <h3 class="cell-h3">
      عنوان
      </h3>
      <div class="cell-content">
      <span class="cell-type">
      <i class="fas fa-home"></i>
      مسکونی
      </span>
      <span class="cell-metre">
      <i class="fas fa-expand"></i>
      متر 100
      </span>
      <span class="cell-beds">
      <i class="fas fa-bed"></i>
      دو خوابه
      </span>
      <span class="cell-address">
      <i class="fas fa-map-marker-alt"></i>
      بلوار صیاد شیرازی
      </span>
      <span class="cell-year">
      رهن: 100 میلیون تومان
      </span>
      <span class="cell-month">
      اجاره: 250 میلیون تومان
      </span>
      <button class="btn cell-btn" style="margin-left:10%;">
      جزئیات
      </button>
      <button class="btn cell-btn">
      تماس
      <i class="fas fa-phone"></i>
      </button>
      </div>
      </div>
      <div class="cell">
      <img alt="house" src="base/Images/city_illustrations_empire_state_building_2x.png" class="house-image">
      <h3 class="cell-h3">
      عنوان
      </h3>
      <div class="cell-content">
      <span class="cell-type">
      <i class="fas fa-home"></i>
      مسکونی
      </span>
      <span class="cell-metre">
      <i class="fas fa-expand"></i>
      متر 100
      </span>
      <span class="cell-beds">
      <i class="fas fa-bed"></i>
      دو خوابه
      </span>
      <span class="cell-address">
      <i class="fas fa-map-marker-alt"></i>
      بلوار صیاد شیرازی
      </span>
      <span class="cell-year">
      رهن: 100 میلیون تومان
      </span>
      <span class="cell-month">
      اجاره: 250 میلیون تومان
      </span>
      <button class="btn cell-btn" style="margin-left:10%;">
      جزئیات
      </button>
      <button class="btn cell-btn">
      تماس
      <i class="fas fa-phone"></i>
      </button>
      </div>
      </div>
      <div class="cell">
      <img alt="house" src="base/Images/city_illustrations_empire_state_building_2x.png" class="house-image">
      <h3 class="cell-h3">
      عنوان
      </h3>
      <div class="cell-content">
      <span class="cell-type">
      <i class="fas fa-home"></i>
      مسکونی
      </span>
      <span class="cell-metre">
      <i class="fas fa-expand"></i>
      متر 100
      </span>
      <span class="cell-beds">
      <i class="fas fa-bed"></i>
      دو خوابه
      </span>
      <span class="cell-address">
      <i class="fas fa-map-marker-alt"></i>
      بلوار صیاد شیرازی
      </span>
      <span class="cell-year">
      رهن: 100 میلیون تومان
      </span>
      <span class="cell-month">
      اجاره: 250 میلیون تومان
      </span>
      <button class="btn cell-btn" style="margin-left:10%;">
      جزئیات
      </button>
      <button class="btn cell-btn">
      تماس
      <i class="fas fa-phone"></i>
      </button>
      </div>
      </div>
      <div class="cell" style="margin-right:2%;">
      <img alt="house" src="base/Images/city_illustrations_empire_state_building_2x.png" class="house-image">
      <h3 class="cell-h3">
      عنوان
      </h3>
      <div class="cell-content">
      <span class="cell-type">
      <i class="fas fa-home"></i>
      مسکونی
      </span>
      <span class="cell-metre">
      <i class="fas fa-expand"></i>
      متر 100
      </span>
      <span class="cell-beds">
      <i class="fas fa-bed"></i>
      دو خوابه
      </span>
      <span class="cell-address">
      <i class="fas fa-map-marker-alt"></i>
      بلوار صیاد شیرازی
      </span>
      <span class="cell-year">
      رهن: 100 میلیون تومان
      </span>
      <span class="cell-month">
      اجاره: 250 میلیون تومان
      </span>
      <button class="btn cell-btn" style="margin-left:10%;">
      جزئیات
      </button>
      <button class="btn cell-btn">
      تماس
      <i class="fas fa-phone"></i>
      </button>
      </div>
      </div>
      <div class="cell">
      <img alt="house" src="base/Images/city_illustrations_empire_state_building_2x.png" class="house-image">
      <h3 class="cell-h3">
      عنوان
      </h3>
      <div class="cell-content">
      <span class="cell-type">
      <i class="fas fa-home"></i>
      مسکونی
      </span>
      <span class="cell-metre">
      <i class="fas fa-expand"></i>
      متر 100
      </span>
      <span class="cell-beds">
      <i class="fas fa-bed"></i>
      دو خوابه
      </span>
      <span class="cell-address">
      <i class="fas fa-map-marker-alt"></i>
      بلوار صیاد شیرازی
      </span>
      <span class="cell-year">
      رهن: 100 میلیون تومان
      </span>
      <span class="cell-month">
      اجاره: 250 میلیون تومان
      </span>
      <button class="btn cell-btn" style="margin-left:10%;">
      جزئیات
      </button>
      <button class="btn cell-btn">
      تماس
      <i class="fas fa-phone"></i>
      </button>
      </div>
      </div>
      <div class="cell">
      <img alt="house" src="base/Images/city_illustrations_empire_state_building_2x.png" class="house-image">
      <h3 class="cell-h3">
      عنوان
      </h3>
      <div class="cell-content">
      <span class="cell-type">
      <i class="fas fa-home"></i>
      مسکونی
      </span>
      <span class="cell-metre">
      <i class="fas fa-expand"></i>
      متر 100
      </span>
      <span class="cell-beds">
      <i class="fas fa-bed"></i>
      دو خوابه
      </span>
      <span class="cell-address">
      <i class="fas fa-map-marker-alt"></i>
      بلوار صیاد شیرازی
      </span>
      <span class="cell-year">
      رهن: 100 میلیون تومان
      </span>
      <span class="cell-month">
      اجاره: 250 میلیون تومان
      </span>
      <button class="btn cell-btn" style="margin-left:10%;">
      جزئیات
      </button>
      <button class="btn cell-btn">
      تماس
      <i class="fas fa-phone"></i>
      </button>
      </div>
      </div>
      <div class="cell">
      <img alt="house" src="base/Images/city_illustrations_empire_state_building_2x.png" class="house-image">
      <h3 class="cell-h3">
      عنوان
      </h3>
      <div class="cell-content">
      <span class="cell-type">
      <i class="fas fa-home"></i>
      مسکونی
      </span>
      <span class="cell-metre">
      <i class="fas fa-expand"></i>
      متر 100
      </span>
      <span class="cell-beds">
      <i class="fas fa-bed"></i>
      دو خوابه
      </span>
      <span class="cell-address">
      <i class="fas fa-map-marker-alt"></i>
      بلوار صیاد شیرازی
      </span>
      <span class="cell-year">
      رهن: 100 میلیون تومان
      </span>
      <span class="cell-month">
      اجاره: 250 میلیون تومان
      </span>
      <button class="btn cell-btn" style="margin-left:10%;">
      جزئیات
      </button>
      <button class="btn cell-btn">
      تماس
      <i class="fas fa-phone"></i>
      </button>
      </div>
      </div>
    </div>
  </div>
</div>
<div class="carousel-buttons">
  <button class="btn next-btn" data-target="#carouselExampleControls">بعدی</button>
  <ul style="list-style:none; width: 17%; margin-bottom:0 !important; padding:0;">
  <li data-target="#carouselExampleControls" class="number-li" data-slide-to="2">
   <a class="btn number-btn three" style="color:#4016BA">3</a>
   </li>
   <li data-target="#carouselExampleControls" class="number-li" data-slide-to="1">
    <a class="btn number-btn firstNum two">2</a>
    </li>
   <li data-target="#carouselExampleControls" class="number-li" data-slide-to="0">
    <a class="btn number-btn one" style="color:#4016BA">1</a>
    </li>
   </ul>
  <button class="btn prev-btn" data-target="#carouselExampleControls">قبلی</button>
</div>
<div class="title-bottom">
<h2 class="title-head">دفاتر املاک</h2>
</div>

<div class="image-carousel">
<div class="card-back">
<img alt="carousel-card-back" src="base/Images/bg-slideshow.png" class="image-back-card">
</div>
<div class="container-fluid" style="position: relative; z-index: 3;">
  <div id="myCarousel" class="carousel hi slide">
    <div class="carousel-inner hi1 row w-100 mx-auto">
      <div class="carousel-item card-item col-md-4 active">
        <div class="card">
          <img class="card-img-top img-fluid" src="base/Images/g5.jpg" alt="Card image cap">
          <div class="card-content">
          <h3 class="card-h3">املاک رضایی</h3>
          <p class="card-p">لورم ایپسوم متن ساختگی با تولید سادگی
نامفهوم از صنعت چاپ و با استفاده از طراحان
 گرافیک است.
متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
          <button class="btn card-btn" style="margin-left:10%;">
      جزئیات
      </button>
          </div>
        </div>
      </div>
      <div class="carousel-item  card-item col-md-4">
        <div class=" even">
          <img class="card-img-top img-fluid" src="base/Images/g5.jpg" alt="Card image cap">
          <div class="card-content">
           <h3 class="card-h3">املاک رضایی</h3>
          <p class="card-p">لورم ایپسوم متن ساختگی با تولید سادگی
نامفهوم از صنعت چاپ و با استفاده از طراحان
 گرافیک است.
متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
          <button class="btn card-btn" style="margin-left:10%;">
      جزئیات
      </button>
        </div>
        </div>
      </div>
      <div class="carousel-item card-item col-md-4 ">
        <div class="card">
          <img class="card-img-top img-fluid" src="base/Images/g5.jpg" alt="Card image cap">
          <div class="card-content">
           <h3 class="card-h3">املاک رضایی</h3>
          <p class="card-p">لورم ایپسوم متن ساختگی با تولید سادگی
نامفهوم از صنعت چاپ و با استفاده از طراحان
 گرافیک است.
متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
          <button class="btn card-btn" style="margin-left:10%;">
      جزئیات
      </button>
        </div>
        </div>
      </div>
      <div class="carousel-item  card-item col-md-4">
        <div class=" even">
          <img class="card-img-top img-fluid" src="base/Images/g5.jpg" alt="Card image cap">
          <div class="card-content">
          <h3 class="card-h3">املاک رضایی</h3>
          <p class="card-p">لورم ایپسوم متن ساختگی با تولید سادگی
نامفهوم از صنعت چاپ و با استفاده از طراحان
 گرافیک است.
متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
          <button class="btn card-btn" style="margin-left:10%;">
      جزئیات
      </button>
        </div>
      </div>
      </div>
      <div class="carousel-item card-item col-md-4">
        <div class="card">
          <img class="card-img-top img-fluid" src="base/Images/g5.jpg" alt="Card image cap">
          <div class="card-content">
           <h3 class="card-h3">املاک رضایی</h3>
          <p class="card-p">لورم ایپسوم متن ساختگی با تولید سادگی
نامفهوم از صنعت چاپ و با استفاده از طراحان
 گرافیک است.
متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
          <button class="btn card-btn" style="margin-left:10%;">
      جزئیات
      </button>
        </div>
        </div>
      </div>
      <div class="carousel-item card-item  col-md-4">
        <div class=" even">
          <img class="card-img-top img-fluid" src="base/Images/g5.jpg" alt="Card image cap">
          <div class="card-content">
           <h3 class="card-h3">املاک رضایی</h3>
          <p class="card-p">لورم ایپسوم متن ساختگی با تولید سادگی
نامفهوم از صنعت چاپ و با استفاده از طراحان
 گرافیک است.
متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
          <button class="btn card-btn" style="margin-left:10%;">
      جزئیات
      </button>
        </div>
        </div>
      </div>
      <div class="carousel-item card-item col-md-4">
        <div class="card">
          <img class="card-img-top img-fluid" src="base/Images/g5.jpg" alt="Card image cap">
          <div class="card-content">
           <h3 class="card-h3">املاک رضایی</h3>
          <p class="card-p">لورم ایپسوم متن ساختگی با تولید سادگی
نامفهوم از صنعت چاپ و با استفاده از طراحان
 گرافیک است.
متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
          <button class="btn card-btn" style="margin-left:10%;">
      جزئیات
      </button>
        </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>
<footer class="page-footer font-small indigo">
<div class="footer-back">
<img alt="footer-background" class="footer-image" src="base/Images/bg-footer-simple.png">
</div>
<div class="footer-logo">
<img alt="logo" src="base/Images/Untitled-1.png" style="width:40%;">
</div>
  <div class=" text-center footer-inner text-md-left">
    <div class="row" style=" border-bottom:thin solid; padding: 0 7%;">
      <div class="col mx-auto">
        <ul class="list-unstyled footer-icon">
          <li>
            <img alt="ozv" src="base/Images/ecunion-logo.png">
          </li>
          <li>
           <img alt="ozv" src="base/Images/eanjoman.jpg">
          </li>
          <li>
            <img alt="ozv" src="base/Images/logo.png">
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


<script type="text/javascript" src="base/jquery/index.js"></script>
<script type="text/javascript" src="base/jquery/bootstrap.js"></script>
<script type="text/javascript" src="base/fontawesome/js/all.js"></script>
</body>
</html>
