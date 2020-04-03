<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>ٌصفحه داخلی املاک</title>
    <link href="{{asset("base/css/bootstrap.css")}}" rel="stylesheet" type="text/css">
    <link href="{{asset("base/fontawesome/css/all.css")}}" rel="stylesheet" type="text/css">
    <script src="{{asset("base/jquery/jquery-3-4-1.js")}}"></script>
    <link href="{{asset("base/css/amlak.css")}}" rel="stylesheet" type="text/css">

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
            <div class="navbar-nav">
                <div class="dropdown">
                    <button class="dropbtn"><a class="nav-item nav-link navitems" href="{{route("base")}}">صفحه اصلی</a>
                    </button>
                </div>
                <div class="dropdown">
                    <button class="dropbtn"><a class="nav-item nav-link navitems" href="{{route("customer")}}">مشاورین
                            املاک</a></button>
                </div>
                <div class="dropdown">
                    <button class="dropbtn"><a class="nav-item nav-link navitems" href="#">قوانین</a></button>
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
        <img alt="building_photo" src="{{asset("base/images/city_illustrations_empire_state_building_2x.png")}}"
             class="amlakimage">
    </div>
    <div class="titlediv">
        <h1 style="color: #FFFFFF; font-size:2vw;">{{ \App\File::$bulbing_type[$file->buildingType] }}  {{$file->area}}متری</h1>
        <div class="top-content">
            <p class="right-sub">{{$file->code}} : کد ملک </p>
            <p class="left-sub"> {{verta($file->updated_at)}} :تاریخ درج آگهی</p>
        </div>
    </div>
</div>
<div class="tri-right">
    <img alt="background-texture-right" src="{{asset("base/images/curve3.png")}}">
</div>
<div class="tri-left">
    <img alt="background-texture-left" src="{{asset("base/images/curve1.png")}}">
</div>
<div class="top-titles-div">
@if($file->buy != null)
    <div class="top-titles-right">
        <p class="top-titles-rt">فروش</p>
        <p class="top-titles-lt">{{\App\File::floatPrice($file->buy) }}</p>
    </div>
@else
    @if($file->rahn != null)
        <div class="top-titles-right">
            <p class="top-titles-rt">رهن</p>
            <p class="top-titles-lt">{{\App\File::floatPrice($file->rahn)}}</p>
        </div>
    @endif
    @if($file->ejare != null)
        <div class="top-titles-left">
            <p class="top-titles-rt">اجاره</p>
            <p class="top-titles-lt">{{\App\File::floatPrice($file->ejare)}}</p>
        </div>
    @endif
@endif
</div>
<!-- there should be repaired -->
<div class="side"><!--there should be change-->
    @foreach($customers as $customer)
    <div class="left-image-div">
        <div class="image-absolute">
            <img alt="prof-image" src="{{asset("base/images/g8.jpg")}}">
            <h4 class="image-absolute-h4">مشاور ملک</h4>
            <p class="image-p" style="margin-top: 5%;">{{$office}}</p>
            <p class="image-p">{{$customer->name}}</p>
        </div>
        <a href="{{route("profile",$customer->id)}}">
            <button class="tamas btn"><i class="fas fa-phone "></i>اطلاعات تماس</button>
        </a>
    </div>
    @endforeach
 <div class="parent-image">
    <div class="left-image-div">
        <div class="image-absolute">
            <img alt="prof-image" src="{{asset("base/images/g8.jpg")}}">
            <h4 class="image-absolute-h4">مشاور ملک</h4>
            <p class="image-p" style="margin-top: 5%;">asdads</p>
            <p class="image-p">asdasd</p>
        </div>
            <button class="tamas btn"><i class="fas fa-phone "></i>اطلاعات تماس</button>

    </div>
    <div class="left-image-div">
        <div class="image-absolute">
            <img alt="prof-image" src="{{asset("base/images/g8.jpg")}}">
            <h4 class="image-absolute-h4">مشاور ملک</h4>
            <p class="image-p" style="margin-top: 5%;">asdads</p>
            <p class="image-p">asdasd</p>
        </div>
        <button class="tamas btn"><i class="fas fa-phone "></i>اطلاعات تماس</button>

    </div><div class="left-image-div">
        <div class="image-absolute">
            <img alt="prof-image" src="{{asset("base/images/g8.jpg")}}">
            <h4 class="image-absolute-h4">مشاور ملک</h4>
            <p class="image-p" style="margin-top: 5%;">asdads</p>
            <p class="image-p">asdasd</p>
        </div>
        <button class="tamas btn"><i class="fas fa-phone "></i>اطلاعات تماس</button>

    </div>
    <div class="left-image-div">
        <div class="image-absolute">
            <img alt="prof-image" src="{{asset("base/images/g8.jpg")}}">
            <h4 class="image-absolute-h4">مشاور ملک</h4>
            <p class="image-p" style="margin-top: 5%;">asdads</p>
            <p class="image-p">asdasd</p>
        </div>
        <button class="tamas btn"><i class="fas fa-phone "></i>اطلاعات تماس</button>
    </div>
     </div>
</div>
<div class="table1">
    <div class="table-row">
        <div class="table-content-right">
            <p class="table-p-right">
                : نام و نام خانوادگی مالک
            </p>
            <p class="table-p-left">
                {{$file->name}} {{ $file->lastname }}
            </p>
        </div>
        <div class="table-content-left">
            <p class="table-p-right">
                : نوع ملک
            </p>
            <p class="table-p-left">
                {{\App\File::$bulbing_type[$file->buildingType]}}
            </p>
        </div>
    </div>
    <div class="table-row">
        <div class="table-content-right">
            <p class="table-p-right">
                : طبقه
            </p>
            <p class="table-p-left">
                {{$file->floor}}
            </p>
        </div>
        <div class="table-content-left">
            <p class="table-p-right">
                : متراژ
            </p>
            <p class="table-p-left">
                100 متر
            </p>
        </div>
    </div>
    <div class="table-row">
        <div class="table-content-right">
            <p class="table-p-right">
                : تعداد کل طبقات
            </p>
            <p class="table-p-left">
                4
            </p>
        </div>
        <div class="table-content-left">
            <p class="table-p-right">
                : تعداد واحدها
            </p>
            <p class="table-p-left">
                12
            </p>
        </div>
    </div>
    <div class="table-row">
        <div class="table-content-right">
            <p class="table-p-right">
                : طول عمر بنا
            </p>
            <p class="table-p-left">
                10
            </p>
        </div>
        <div class="table-content-left">
            <p class="table-p-right">
                : تعداد خواب
            </p>
            <p class="table-p-left">
                2
            </p>
        </div>
    </div>
    <div class="table-row" style="border-bottom:none;">
        <div class="table-content-right">
            <p class="table-p-right">
                : آدرس
            </p>
            <p class="table-p-left">
                خیابان آبکوه انتهای احمد
            </p>
        </div>
    </div>
</div>
<h2 class="amlak-title">: امکانات</h2>
<div class="table2">
    <div class="table-row">
        <div class="table-content-right">
            <p class="table-p-right">
                : آسانسور
            </p>
            <div class="table-p-left2 greendiv">
                <i class="fas fa-check"></i>
            </div>
        </div>
        <div class="table-content-left">
            <p class="table-p-right">
                : تراس
            </p>
            <div class="table-p-left2 reddiv">
                <i class="fas fa-times"></i>
            </div>
        </div>
    </div>
    <div class="table-row">
        <div class="table-content-right">
            <p class="table-p-right">
                : پارکینگ
            </p>
            <div class="table-p-left2 reddiv">
                <i class="fas fa-times"></i>
            </div>
        </div>
        <div class="table-content-left">
            <p class="table-p-right">
                : انباری
            </p>
            <div class="table-p-left2 greendiv">
                <i class="fas fa-check"></i>
            </div>
        </div>
    </div>
    <div class="table-row">
        <div class="table-content-right">
            <p class="table-p-right">
                : درب برقی
            </p>
            <div class="table-p-left2 greendiv">
                <i class="fas fa-check"></i>
            </div>
        </div>
        <div class="table-content-left">
            <p class="table-p-right">
                : عدم حضور مالک
            </p>
            <div class="table-p-left2 reddiv">
                <i class="fas fa-times"></i>
            </div>
        </div>
    </div>
    <div class="table-row">
        <div class="table-content-right">
            <p class="table-p-right">
                : آبگرمکن
            </p>
            <div class="table-p-left2 reddiv">
                <i class="fas fa-times"></i>
            </div>
        </div>
        <div class="table-content-left">
            <p class="table-p-right">
                : تخلیه
            </p>
            <div class="table-p-left2 greendiv">
                <i class="fas fa-check"></i>
            </div>
        </div>
    </div>
    <div class="table-row" style="border-bottom:none;">
        <div class="table-content-right">
            <p class="table-p-right">
                : اُپن
            </p>
            <div class="table-p-left2 greendiv">
                <i class="fas fa-check"></i>
            </div>
        </div>
        <div class="table-content-left">
            <p class="table-p-right">
                : بازسازی شده
            </p>
            <div class="table-p-left2 reddiv">
                <i class="fas fa-times"></i>
            </div>
        </div>
    </div>
</div>
<div class="table2" style="margin-top:1%;">
    <div class="table-row">
        <div class="table-content-right">
            <p class="table-p-right">
                : دیوارپوش
            </p>
            <p class="table-p-left3">
                نقاشی
            </p>
        </div>
        <div class="table-content-left">
            <p class="table-p-right">
                : کف پوش
            </p>
            <p class="table-p-left3">
                سرامیک
            </p>
        </div>
    </div>
    <div class="table-row">
        <div class="table-content-right">
            <p class="table-p-right">
                : جهت ملک
            </p>
            <p class="table-p-left3">
                جنوبی
            </p>
        </div>
        <div class="table-content-left">
            <p class="table-p-right">
                : نما
            </p>
            <p class="table-p-left3">
                سنگ
            </p>
        </div>
    </div>
    <div class="table-row">
        <div class="table-content-right">
            <p class="table-p-right">
                : کابینت
            </p>
            <p class="table-p-left3">
                ام دی اف
            </p>
        </div>
        <div class="table-content-left">
            <p class="table-p-right">
                : برق
            </p>
            <p class="table-p-left3">
                مستقل
            </p>
        </div>
    </div>
    <div class="table-row">
        <div class="table-content-right">
            <p class="table-p-right">
                : کولر
            </p>
            <p class="table-p-left3">
                آبی
            </p>
        </div>
        <div class="table-content-left">
            <p class="table-p-right">
                : آب
            </p>
            <p class="table-p-left3">
                مستقل
            </p>
        </div>
    </div>
    <div class="table-row" style="border-bottom:none;">
        <div class="table-content-right">
            <p class="table-p-right">
                : گرمایش
            </p>
            <p class="table-p-left3">
                بخاری
            </p>
        </div>
        <div class="table-content-left">
            <p class="table-p-right">
                : گاز
            </p>
            <p class="table-p-left3">
                مستقل
            </p>
        </div>
    </div>
</div>
<h2 class="amlak-title">: توضیحات</h2>
<div class="exp">
    <p class="exp-p">
        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
        . چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی
        مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه
        درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری
        را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.
        در این صورت می توان امید

    </p>
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
<script type="text/javascript" src="{{asset("base/jquery/bootstrap.js")}}"></script>
<script type="text/javascript" src="{{asset("base/fontawesome/js/all.js")}}"></script>
<script type="text/javascript" src="{{asset("base/jquery/amlak.js")}}"></script>
</body>
</html>
