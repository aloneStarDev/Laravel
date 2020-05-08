<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
    <meta name="description" content="املاک انلاین- فایلینگ- خرید آپارتمان- خرید ویلا- املاک مشهد">
    <title>ٌمشاورین املاک</title>
    <link href="../base/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="../base/fontawesome/css/all.css" rel="stylesheet" type="text/css">
    <link href="../base/css/moshaverin.css" rel="stylesheet" type="text/css">
    <script src="../base/jquery/jquery-3-4-1.js"></script>

</head>

<body class="body">
@include("Base.section.popup")
<img alt="background-texture-top" src="../base/images/bgHeader1.png" class="background">
<div class="background-building-div">
    <img alt="background-texture-top" src="../base/images/building2.png" class="background-building">
</div>
<div class="headingitems fixed-top">
    <nav class="navbar navbar-expand-xl"
         style=" margin:0; box-sizing:inherit;padding-bottom:0.5%; width:100%; margin-top:1%;">
        <div class="logo">
            <img alt="logo" src="../base/images/logo1.png" style="width:60%; transition-duration:0.5s;">
        </div>
        <div id="navbarNavAltMarkup" style="width: 100%;margin-bottom: 2%;">
          <div class="navbar-nav topnav">
  <a href="javascript:void(0);" class="iconst" onclick="myFunction()">
  <i class="fa fa-bars" style="color:#6C6A6A;"></i>
</a>
                <div class="dropdown">
                    <button class="dropbtn"><a class="nav-item nav-link navitems" href="{{route("base")}}">صفحه اصلی</a>
                    </button>
                </div>
                <div class="dropdown">
                    <button class="dropbtn"><a class="nav-item nav-link navitems home" href="{{route("customer")}}">مشاورین
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
<div class="moshaverin-div">
    <h1 class="moshaverin">مشاورین املاک</h1>
</div>
<div class="search">
    <div class="search-search">
        <div class="search-search-text">
            <div class="search-search-input">
                <form action="{{route("searchMember")}}" method="post">
                    @csrf
                    <div class="wrapInput">
                        <input type="text" name="filter" placeholder="نام دفتر یا منطقه فعالیت" maxlength="25">
                    </div>
                    <a class="search-button">
                        <button type="submit" class="btn">
                            جستجو
                        </button>
                    </a>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="tri-left">
    <img class="tri-image-left" alt="tri-background" src="../base/images/curve1.png">
</div>
<div class="tri-right">
    <img class="tri-image-right" alt="tri-background" src="../base/images/curve3.png">
</div>
<div id="carouselExampleControls" class="carousel carousel1 slide">

    <div class="carousel-inner">
        <div class="carousel-item active first-slide">
            @if(count($customers)>24)
                @for($i=25;$i<count($customers);$i++)
                    @include("Base.section.memberItem")
                @endfor
            @endif
        </div>
        <div class="carousel-item second-slide">
            @if(count($customers) <= 12)
                @for($i=0;$i<count($customers);$i++)
                    @include("Base.section.memberItem")
                @endfor
            @else
                @for($i=0;$i<13;$i++)
                    @include("Base.section.memberItem")
                @endfor
            @endif
        </div>
        <div class="carousel-item third-slide">
            @if(count($customers)>12  && count($customers) < 24)
                @for($i=13;$i<count($customers);$i++)
                    @include("Base.section.fileItem")
                @endfor
            @elseif(count($customers)>12 && count($customers) >24)
                @for($i=13;$i<=25;$i++)
                    @include("Base.section.fileItem")
                @endfor
            @endif
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
            <a class="btn number-btn  two">2</a>
        </li>
        <li data-target="#carouselExampleControls" class="number-li" data-slide-to="0">
            <a class="btn number-btn firstNum one" style="color:#4016BA">1</a>
        </li>
    </ul>
    <button class="btn prev-btn" data-target="#carouselExampleControls">قبلی</button>
</div>
<footer class="page-footer font-small indigo" style="margin-top:80%;">
    <div class="footer-back">
        <img alt="footer-background" class="footer-image" src="../base/images/bgFooter1.png">
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
                  <a href="https://t.me/amlakonlinefiling">تلگرام</a>
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


<script type="text/javascript" src="../base/jquery/moshaverin.js"></script>
<script type="text/javascript" src="../base/jquery/bootstrap.js"></script>
<script type="text/javascript" src="../base/fontawesome/js/all.js"></script>
</body>
</html>
