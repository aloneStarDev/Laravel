<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>ٌثبت نام</title>
    <link href="{{asset("base/css/bootstrap.css")}}"  rel="stylesheet" type="text/css">
    <link href="{{asset("base/fontawesome/css/all.css")}}"  rel="stylesheet" type="text/css">
    <link href="{{asset("base/css/sabtnam.css")}}"  rel="stylesheet" type="text/css">
    <script src="{{asset("base/jquery/jquery-3-4-1.js")}}" ></script>
</head>

<body class="body">
@include("Base.section.popup")
<img alt="background-texture-top" src="{{asset("base/images/bgHeader2.png")}}"  class="background">
<div class="headingitems fixed-top">
    <nav class="navbar navbar-expand-xl"
         style=" margin:0; box-sizing:inherit;padding-bottom:0.5%; width:100%; margin-top:1%;">
        <div class="logo">
            <img alt="logo" src="{{asset("base/images/logo1.png")}}"  style="width:60%;">

        </div>

        <div id="navbarNavAltMarkup" style="width: 100%;">
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
                    <button class="dropbtn"><a class="nav-item nav-link navitems" href="#">قوانین</a></button>
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
    <h1 class="darbarema">ثبت نام</h1>
</div>
<div class="tri-right">
    <img alt="background-texture-right" src="{{asset("base/images/curve3.png")}}" >
</div>
<div class="tri-left">
    <img alt="background-texture-left" src="{{asset("base/images/curve1.png")}}" >
</div>
<div class="error">
    <h2> فیلد ایمیل با فرمت درستی وارد نشده!</h2>
</div>
@include("Base.section.errors");
<form action="{{route("register")}}" method="post" class="pop-content-form2 content3">
    @csrf
    <div class="pop-content-input3">
        <div class="input-top">
            <input type="hidden" name="phonenumber" value="{{$phonenumber}}">
            <i class="fas fa-user input-user3"></i>
            <input type="text" name="name" placeholder="نام " maxlength="10" value="{{old("name")}}">
            <i class="fas fa-user input-user4"></i>
            <input type="text" name="lastname" placeholder="نام خانوادگی" maxlength="20" value="{{old("lastname")}}">
            <input type="hidden" id="region" name="region" value="{{old("region")}}">
            <div class="sex">
                <button type="button" class="sexbtn"> منطقه <i class="fas fa-chevron-down"></i></button>
                <div class="sex-content">
                    <a onclick="$('#region').val(1);">منطقه 1 شهرداری</a>
                    <a onclick="$('#region').val(2);">منطقه 2 شهرداری</a>
                    <a onclick="$('#region').val(3);">منطقه 3 شهرداری</a>
                    <a onclick="$('#region').val(4);">منطقه 4 شهرداری</a>
                    <a onclick="$('#region').val(5);">منطقه 5 شهرداری</a>
                    <a onclick="$('#region').val(6);">منطقه 6 شهرداری</a>
                    <a onclick="$('#region').val(7);">منطقه 7 شهرداری </a>
                    <a onclick="$('#region').val(8);">منطقه 8 شهرداری</a>
                    <a onclick="$('#region').val(9);"> منطقه 9 شهرداری</a>
                    <a onclick="$('#region').val(10);">منطقه 10 شهرداری</a>
                    <a onclick="$('#region').val(11);"> منطقه 11 شهرداری</a>
                    <a onclick="$('#region').val(12);">منطقه 12 شهرداری</a>
                    <a onclick="$('#region').val(13);">منطقه 13 شهرداری</a>
                    <a onclick="$('#region').val(14);">منطقه ثامن </a>
                </div>
            </div>
        </div>
        <div class="input-text">
            <textarea type="text" name="address" placeholder="آدرس دفتر" maxlength="200"
                      style="margin-top:3%">{{old("address")}}</textarea>
        </div>
        <div class="input-middle">
            <input type="text" name="office" placeholder="نام دفتر" value="{{old("office")}}" maxlength="25" style="margin-left:30%;">
            <i class="fas fa-phone-square input-home"></i>
            <input type="number" name="call" placeholder="شماره تلفن ثابت" value="{{old("call")}}"
                   onkeypress="return event.charCode >= 48 && event.charCode <= 57 && this.value.length < 11">
        </div>
        <div class="input-bottom">
            <i class="fas fa-envelope input-envelope"></i>
            <input type="text" name="email" placeholder="ایمیل" value="{{old("email")}}" style="margin-right:28%; width:40%;">
        </div>
    </div>
    <input type="hidden" name="panel" id="panel" value="{{old("panel")}}">
    <div class="subtitle">
        <h4>انتخاب نوع اشتراک</h4>
        <label class="systemlbl">تعداد سیستم: </label>
        <input class="systeminp" type="number" name="ipCount" value="{{old("ipCount") ?? 1}}"
               onkeypress="return event.charCode >= 48 && event.charCode <= 57 && this.value.length < 11">
    </div>
    <div class="content-button">
        <button type="button" type="button" onclick="$('#panel').val(1)" class="button1 btn">
            <h3 class="button-title">1 ماهه</h3>
            <p class="button-content">{{$plans[0]->price}} هزار تومان</p>
            <p class="button-content"> {{$plans[0]->addOnMember}} هزار تومان هر کاربر اضافه</p>
        </button>
        <button type="button" type="button" onclick="$('#panel').val(2)" class="button2 btn">
            <h3 class="button-title">3 ماهه</h3>
            <p class="button-content">{{$plans[1]->price}} هزار تومان</p>
            <p class="button-content">{{$plans[1]->addOnMember}} هزار تومان هر کاربر اضافه</p>
        </button>
        <button type="button" type="button" onclick="$('#panel').val(3)" class="button3 btn ">
            <h3 class="button-title">6 ماهه</h3>
            <p class="button-content">{{$plans[2]->price}}هزار تومان</p>
            <p class="button-content">{{$plans[2]->addOnMember}} هزار تومان هر کاربر اضافه</p>
        </button>
        <button type="button" type="button" onclick="$('#panel').val(4)" class="button4 btn">
            <h3 class="button-title">1 ساله</h3>
            <p class="button-content">{{$plans[3]->price}} هزار تومان</p>
            <p class="button-content">{{$plans[3]->addOnMember}} هزار تومان هر کاربر اضافه</p>
        </button>
    </div>
    <div class="pop-buttons4">
        <a href="{{route("base")}}">
            <button type="button" class="pop-button-right4 btn">
                انصراف
            </button>
        </a>
        <button type="submit" class="pop-button-left4 btn">
            پرداخت و ثبت اشتراک
        </button>
    </div>
</form>

<footer class="page-footer font-small indigo">
    <div class="footer-back">
        <img alt="footer-background" class="footer-image" src="{{asset("base/images/bgFooter1.png")}}" >
    </div>
    <div class="footer-logo">
        <img alt="logo" src="{{asset("base/images/logo1.png")}}"  style="width:40%;">
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
                        <h5 class="font-weight-bold footer-head text-uppercase mt-3 mb-4"
                            style="margin-top: 5% !important;">شبکه های اجتماعی</h5>
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
                    <h5 class="font-weight-bold footer-head text-uppercase mt-3 mb-4"
                        style="margin-top: 5% !important;">جستجو</h5>
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
<script type="text/javascript" src="{{asset("base/jquery/sabtnam.js")}}" ></script>
</body>
</html>
