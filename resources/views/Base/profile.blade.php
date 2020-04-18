<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>ٌپروفایل مشاورین</title>
      <meta name="description" content="املاک انلاین- فایلینگ- خرید آپارتمان- خرید ویلا- املاک مشهد">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset("base/css/bootstrap.css")}}" rel="stylesheet" type="text/css">
    <link href="{{asset("base/fontawesome/css/all.css")}}" rel="stylesheet" type="text/css">
    <script src="{{asset("base/jquery/jquery-3-4-1.js")}}"></script>
    <link href="{{asset("base/css/profile.css")}}" rel="stylesheet" type="text/css">
</head>
<body class="body">
@include("Base.section.popup")
<img alt="background-texture-top" src="{{asset("base/images/bgHeader2.png")}}" class="background">
<div class="headingitems fixed-top">
    <nav class="navbar navbar-expand-xl"
         style=" margin:0; box-sizing:inherit;padding-bottom:0.5%; width:100%; margin-top:1%;">
        <div class="logo">
            <img alt="logo" src="{{asset("base/images/logo1.png")}}" style="width:60%;">
        </div>
        <div id="navbarNavAltMarkup" style="width: 100%; margin-bottom:2%;">
          <div class="navbar-nav topnav">
  <a href="javascript:void(0);" class="iconst" onclick="myFunction()">
  <i class="fa fa-bars" style="color:#6C6A6A;"></i>
</a>
                <div class="dropdown">
                    <button class="dropbtn"><a class="nav-item nav-link navitems" href="{{route("base")}}">صفحه اصلی</a>
                    </button>
                </div>
                <div class="dropdown">
                    <button class="dropbtn"><a class="nav-item nav-link navitems" href="{{route("customer")}}">مشاورین
                            املاک</a></button>
                </div>
                <div class="dropdown">
                    <button class="dropbtn"><a class="nav-item nav-link navitems" href="{{route("rules")}}">قوانین</a>
                    </button>
                </div>
                <div class="dropdown">
                    <button class="dropbtn"><a class="nav-item nav-link navitems" href="{{route("about")}}">درباره
                            ما</a></button>
                </div>
                <div class="dropdown">
                    <button class="dropbtn"><a class="nav-item nav-link navitems" href="{{route("contactUs")}}">ارتباط
                            با ما</a></button>
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
        <h1 style="color: #FFFFFF; font-size:3vw;">املاک  {{$customer->office}}</h1>
        <h3 style="color: #FFFFFF; font-size:2vw;">مالک: {{$customer->name}} {{$customer->lastname}}</h3>
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
        <div class="matn">
            {{$customer->explain ?? " با ما تماس بگیرید " }}
        </div>
    </div>

    <div class="texticons"><p class="icontitle">اطلاعات تماس</p>
        <div style="margin-top: 15%;">

            <div style="float: right; display: block">
                <div style="float: right; display: block" class="homeicon"><i class="fas fa-home"></i></div>
                <div style="float: right; display: block" class="iconstext">ایران-مشهد</div>
                <div style="float: right; display: block" class="icontext1">{{$customer->address}}</div>
            </div>

            <div style="float: right; display: block; margin-top: 20%">
                <div style="float: right; display: block" class="phoneicon"><i class="fas fa-phone-square"></i></div>
                <div style="float: right; display: block" class="iconstextt"> {{$customer->call}} </div>
                <div style="float: right; display: block" class="icontext2">ساعت 8 تا 16 هرروز</div>
            </div>

            @if($customer->telegram)
            <div style="float: right; display: block; padding:0 10px; cursor: pointer; margin-top: 20%;" onclick="alert('{{$customer->telegram}}')">
                <div style="float: right; display: block" class="phoneicon"><i class="fab fa-telegram"></i></div>
            </div>
            @endif
            @if($customer->twitter)
                <div style="float: right; display: block; padding:0 10px; cursor: pointer; margin-top: 20%;" onclick="alert('{{$customer->twitter}}')">
                    <div style="float: right; display: block" class="phoneicon"><i class="fab fa-twitter"></i></div>
                </div>
            @endif
            @if($customer->instagram)
                <div style="float: right; display: inline; padding:0 10px; cursor: pointer; margin-top: 20%;" onclick="alert('{{$customer->instagram}}')">
                    <div style="float: right; display: block" class="phoneicon"><i class="fab fa-instagram"></i></div>
                </div>
            @endif
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
<script type="text/javascript" src="{{asset("base/jquery/bootstrap.js")}}"></script>
<script type="text/javascript" src="{{asset("base/fontawesome/js/all.js")}}"></script>
<script type="text/javascript" src="{{asset("base/jquery/profile.js")}}"></script>
</body>
</html>
