<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
      <meta name="description" content="املاک انلاین- فایلینگ- خرید آپارتمان- خرید ویلا- املاک مشهد">
    <title>ٌصفحه اصلی</title>
    <link href="{{asset("base/css/index.css")}}" rel="stylesheet" type="text/css">
    <link href="{{asset("base/css/bootstrap.css")}}" rel="stylesheet" type="text/css">
    <link href="{{asset("base/fontawesome/css/all.css")}}" rel="stylesheet" type="text/css">
    <script src="{{asset("base/jquery/jquery-3-4-1.js")}}"></script>

</head>

<body class="body">
@include("Base.section.popup")
<div style="position:absolute; left:0px; top:0px;">
    <img alt="background-texture-top" src="{{asset("base/images/bgHeader5.png")}}" class="background">
</div>
<div style="position:absolute; top:27%; right:5%;" class="main-div">
    <img alt="background-texture-top" src="{{asset("base/images/building-main.png")}}" class="background-building">
</div>
<div class="headingitems fixed-top">
    <nav class="navbar navbar-expand-xl"
         style=" margin:0; box-sizing:inherit;padding-bottom:0.5%; width:100%; margin-top:1%;">
        <div class="logo">
            <img alt="logo" src="{{asset("base/images/logo2.png")}}" style="width:60%; transition-duration:0.5s;">
        </div>
        <div id="navbarNavAltMarkup" style="width: 100%;margin-bottom: 2%;">
          <div class="navbar-nav topnav">
    <a href="javascript:void(0);" class="iconst" onclick="myFunction()">
    <i class="fa fa-bars" style="color:#6C6A6A;"></i>
  </a>
                <div class="dropdown">
                    <button class="dropbtn"><a class="nav-item nav-link navitems home" href="{{route('base')}}">صفحه
                            اصلی</a></button>
                </div>
                <div class="dropdown">
                    <button class="dropbtn"><a class="nav-item nav-link navitems" href="{{route('customer')}}">مشاورین
                            املاک</a></button>
                </div>
                <div class="dropdown">
                    <button class="dropbtn"><a class="nav-item nav-link navitems" href="{{route('rules')}}">قوانین</a>
                    </button>
                </div>
                <div class="dropdown">
                    <button class="dropbtn"><a class="nav-item nav-link navitems" href="{{route('about')}}">درباره
                            ما</a>
                    </button>
                </div>
                <div class="dropdown">
                    <button class="dropbtn"><a class="nav-item nav-link navitems" href="{{route('contactUs')}}">ارتباط
                            با
                            ما</a></button>
                </div>
                @include('Base.section.btnMenu')
            </div>
        </div>
    </nav>
</div>

<div class="quote">
    <div class="h1-top">
        <h1> املاک آنلاین</h1>
    </div>
    <div class="head">
        جست و جوی املاک سطح شهر به همراه
        فیلترهای اختصاصی و پیشرفته
    </div>
    <p class="head-p">
        امکان فیلترگزاری بر اساس نوع ملک،
        نوع سند،پارکینگ،قیمت، متراژ و...
        که در اختیار عموم کاربران قرار میگیرد
    </p>
</div>
<div class="search" id="search">
    <form action="{{route("search")}}" >
        <script>
            function search(type = 0) {
                if (type !== 0)
                    $('#seType').val(type);
                $('#search').submit();
            }
        </script>
        <div class="pop-parent2">
        </div>
        <div class="search-btn-buy-rent">
            <input type="hidden" id="seType" name="type">
            <a class="rent-button kharidbtn">
                <button type="submit" onclick="search(1)" class="btn">
                    خرید
                </button>
            </a>
            <a class="rent-button rahnbtn" style="margin-right:10%;">
                <button type="submit" onclick="search(2)" class="btn">
                    اجاره
                </button>
            </a>
        </div>
        <div class="search-search">
            <input type="hidden" name="reg" id="reg">
            <div class="search-search-text">
                <div class="search-search-input">
                    <div class="mahale" style="border-left:thin solid #707070">
                        <button type="button" class="mahalebtn"><i class="fas fa-map-marker-alt" style="background: -webkit-linear-gradient(rgba(64,22,186,1),  rgba(190,86,212,1));
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;"></i>
                            <div style="display: inline;" id="regTest">منطقه</div>
                            <i class="fas fa-chevron-down"></i></button>
                        <div id="myDropdown" class="mahale-content">
                            <a onclick="$('#reg').val(1);$('#regTest').text('1'); ">منطقه 1 شهرداری</a>
                            <a onclick="$('#reg').val(2);$('#regTest').text('2'); ">منطقه 2 شهرداری</a>
                            <a onclick="$('#reg').val(3);$('#regTest').text('3'); ">منطقه 3 شهرداری</a>
                            <a onclick="$('#reg').val(4);$('#regTest').text('4'); ">منطقه 4 شهرداری</a>
                            <a onclick="$('#reg').val(5);$('#regTest').text('5'); ">منطقه 5 شهرداری</a>
                            <a onclick="$('#reg').val(6);$('#regTest').text('6'); ">منطقه 6 شهرداری</a>
                            <a onclick="$('#reg').val(7);$('#regTest').text('7'); ">منطقه 7 شهرداری</a>
                            <a onclick="$('#reg').val(8);$('#regTest').text('8'); ">منطقه 8 شهرداری</a>
                            <a onclick="$('#reg').val(9);$('#regTest').text('9'); ">منطقه 9 شهرداری</a>
                            <a onclick="$('#reg').val(10);$('#regTest').text('10'); ">منطقه 10 شهرداری</a>
                            <a onclick="$('#reg').val(11);$('#regTest').text('11'); ">منطقه 11 شهرداری</a>
                            <a onclick="$('#reg').val(12);$('#regTest').text('12'); ">منطقه 12 شهرداری</a>
                            <a onclick="$('#reg').val(13);$('#regTest').text('13'); ">منطقه 13 شهرداری</a>
                            <a onclick="$('#reg').val(14);$('#regTest').text('ثامن'); ">منطقه ثامن </a>
                        </div>
                    </div>
                    <div class="wrapInput">
                        <input type="text" name="code" placeholder="جستجوی کد ملک  یا کلید واژه" maxlength="25">
                    </div>
                    <a class="search-button ">
                        <button type="submit" class="btn">
                            جستجو
                        </button>
                    </a>
                </div>
                <div class="search-search-input pishrafte-hide">
                    <div class="cost">
                        <input type="hidden" name="buildingType" id="buildingT">
                        <button id="btnBuildingType" type="button" class="costbtn">نوع ملک <i
                                class="fas fa-chevron-down"></i></button>
                        <div class="cost-content">
                            <a onclick="$('#buildingT').val(2);$('#btnBuildingType').text(this.innerText);">آپارتمان</a>
                            <a onclick="$('#buildingT').val(1);$('#btnBuildingType').text(this.innerText);">ویلایی</a>
                            <a onclick="$('#buildingT').val(3);$('#btnBuildingType').text(this.innerText);">اداری و
                                تجاری</a>
                            <a onclick="$('#buildingT').val(4);$('#btnBuildingType').text(this.innerText);">زمین و
                                کلنگی</a>
                        </div>
                    </div>
                    <div class="metrazh">
                        <div class="metrazhbtn">
                          <span>
                          متراژ:
                          </span>
                            <span style=" margin-right:4%;"> از</span>
                            <input type="number" name="from" style=" right:18%;" id="metre1"
                                   onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                            <span style="margin-right:38%;"> تا</span>
                            <input type="number" name="to" style="left:5.2%;" id="metre2"
                                   onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                        </div>
                    </div>
                    <a class="search-button btnspecial">
                        <button type="button" class="btn">
                            جستجوی پیشرفته
                        </button>
                    </a>
                </div>
                <div class="search-pishrafte">
                    <button type="button" class="pishraftebtn">جستجو پیشرفته <i class="fas fa-chevron-down"></i>
                    </button>
                </div>
            </div>
        </div>
    </form>
    <form class="pop-div2 pop3" action="{{route("smartSearch")}}" method="post">
        @csrf
        <div class="pop-cross2">
            <i class="fas fa-times"></i>
        </div>
        <div class="pop-content">
            <div class="pop-content-form7">
                <div class="pop-content-input7">
                    <div class="input-top7">
                        <div class="mablagh">
                            <div class="mablaghbtn mab1">
  <span>
  رهن:
  </span>
                                <span style=" margin-right:3%;"> از</span>
                                <input type="number" name="rafrom" style=" right:7%;"
                                       onkeypress="return event.charCode >= 48 && event.charCode <= 57 && this.value.length < 10">
                                <span style="margin-right:28%;"> تا</span>
                                <input type="number" name="rato" style="right:40%;"
                                       onkeypress="return event.charCode >= 48 && event.charCode <= 57 && this.value.length < 10">
                                <span style="margin-right:28%; font-size: 0.9vw;"> هزار تومان</span>
                            </div>
                        </div>
                        <div class="mablagh mab2">
                            <div class="mablaghbtn">
  <span>
  اجاره:
  </span>
                                <span style=" margin-right:1%;"> از</span>
                                <input type="number" name="ejfrom" style=" right:5%;"
                                       onkeypress="return event.charCode >= 48 && event.charCode <= 57 && this.value.length < 10">
                                <span style="margin-right:28%;"> تا</span>
                                <input type="number" name="ejto" style="right:38%;"
                                       onkeypress="return event.charCode >= 48 && event.charCode <= 57 && this.value.length < 10">
                                <span style="margin-right:28%; font-size: 0.9vw;"> هزار تومان</span>
                            </div>
                        </div>
                        <div class="mablagh mab3">
                            <div class="mablaghbtn">
  <span>
  مبلغ:
  </span>
                                <span style=" margin-right:3%;"> از</span>
                                <input type="number" name="byfrom" style=" right:7%;" id="mablagh1"
                                       onkeypress="return event.charCode >= 48 && event.charCode <= 57 && this.value.length < 10">
                                <span style="margin-right:28%;"> تا</span>
                                <input type="number" name="byto" style="right:40%;" id="mablagh2"
                                       onkeypress="return event.charCode >= 48 && event.charCode <= 57 && this.value.length < 10">
                                <span style="margin-right:28%; font-size: 0.9vw;"> هزار تومان</span>
                            </div>
                        </div>
                        <div class="beds">
                            <div class="bedsbtn">
  <span>
  تعداد خواب:
  </span>
                                <span style=" margin-right:1%;"> از</span>
                                <input type="number" name="befrom" style=" right: 21%; width: 15%;" id="beds1"
                                       onkeypress="return event.charCode >= 48 && event.charCode <= 57 && this.value.length < 2">
                                <span style="margin-right:18%;"> تا</span>
                                <input type="number" name="beto" style="right: 45%; width: 15%;" id="beds2"
                                       onkeypress="return event.charCode >= 48 && event.charCode <= 57 && this.value.length < 2">
                            </div>
                        </div>
                        <div class="old">
                            <div class="oldbtn">
  <span>
  سن بنا:
  </span>
                                <span style=" margin-right:3%;"> از</span>
                                <input type="number" name="agfrom" style=" right: 12%; width: 20%;" id="old1"
                                       onkeypress="return event.charCode >= 48 && event.charCode <= 57 && this.value.length < 4">
                                <span style="margin-right:23%;"> تا</span>
                                <input type="number" name="agto" style="right:40%; width:20%" id="old2"
                                       onkeypress="return event.charCode >= 48 && event.charCode <= 57 && this.value.length < 4">
                                <span style="margin-right:25%; font-size: 0.9vw;"> سال</span>
                            </div>
                        </div>
                        <div class="floor">
                            <div class="floorbtn">
  <span>
  طبقه:
  </span>
                                <span style=" margin-right:3%;"> از</span>
                                <input type="number" name="flfrom" style="right: 8%; width: 15%;" id="floor1"
                                       onkeypress="return event.charCode >= 48 && event.charCode <= 57 && this.value.length < 3">
                                <span style="margin-right:18%;"> تا</span>
                                <input type="number" name="flto" style="right:31%; width: 15%;" id="floor2"
                                       onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                            </div>
                        </div>
                        <div class="entry">
                            <div class="entrybtn">
  <span>
  متراژ:
  </span>
                                <span style=" margin-right:5%;"> از</span>
                                <input type="text" name="mefrom" style=" right:17%; width:27%" id="entry1"
                                       onkeypress="return event.charCode >= 47 && event.charCode <= 57 && this.value.length < 10">
                                <span style="margin-right:35%;"> تا </span>
                                <input type="text" name="meto" style="right:50%; width:27%" id="entry2"
                                       onkeypress="return event.charCode >= 47 && event.charCode <= 57 && this.value.length < 10">
                            </div>
                        </div>
                    </div>
                    <div class="input-top7" style="padding-right: 5%; border: none; padding-bottom:0;">
                        <div class="mablagh">
                            <div class="mablaghbtn">
  <span>
  آسانسور:
  </span>
                                <input type="hidden"  value="0"  id="chas" name="chas">
                                <input type="checkbox" class="checkbox2" onclick="$('#chas').val(this.checked ? 1:0 )">
                            </div>
                        </div>
                        <div class="beds">
                            <div class="bedsbtn">
  <span>
  پارکینگ:
  </span>
                                <input type="hidden"  value="0"  id="chpa" name="chpa">
                                <input type="checkbox" class="checkbox2" onclick="$('#chpa').val(this.checked ? 1:0 )">
                            </div>
                        </div>
                        <div class="old">
                            <div class="oldbtn">
  <span>
  تراس:
  </span>
                                <input type="hidden"  value="0"  id="chtr" name="chtr">
                                <input type="checkbox" class="checkbox2" onclick="$('#chtr').val(this.checked ? 1:0 )">
                            </div>
                        </div>
                        <div class="floor">
                            <div class="floorbtn">
  <span>
  انباری:
  </span>
                                <input type="hidden"  value="0"  id="chan" name="chan">
                                <input type="checkbox" class="checkbox2" onclick="$('#chan').val(this.checked ? 1:0 )">
                            </div>
                        </div>
                        <div class="entry">
                            <div class="entrybtn">
  <span>
  درب برقی:
  </span>
                                <input type="hidden"  value="0"  id="ched" name="ched">
                                <input type="checkbox" class="checkbox2" onclick="$('#ched').val(this.checked ? 1:0 )">
                            </div>
                        </div>
                        <div class="entry">
                            <div class="entrybtn">
  <span>
  کمد دیواری:
  </span>
                                <input type="hidden"  value="0"  id="chko" name="chko">
                                <input type="checkbox" class="checkbox2" onclick="$('#chko').val(this.checked ? 1:0 )">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pop-buttons7">
                    <button type="button" class="pop-button-right7 btn">
                        انصراف
                    </button>
                    <button type="submit" class="pop-button-left7 btn">
                        ثبت
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
<div class="tri-left">
    <img class="tri-image-left" alt="tri-background" src="{{asset("base/images/curve1.png")}}">
</div>
<div id="carouselExampleControls" class="carousel carousel1 slide">
    <div class="carousel-inner">
        <div class="carousel-item active first-slide">
            @if(count($files)>24)
                @for($i=25;$i<count($files);$i++)
                    @include("Base.section.fileItem")
                @endfor
            @endif
        </div>
        <div class="carousel-item  second-slide">
            @if(count($files) <= 12)
                @for($i=0;$i<count($files);$i++)
                    @include("Base.section.fileItem")
                @endfor
            @else
                @for($i=0;$i<13;$i++)
                    @include("Base.section.fileItem")
                @endfor
            @endif
        </div>
        <div class="carousel-item third-slide">
            @if(count($files)>12  && count($files) < 24)
                @for($i=13;$i<count($files);$i++)
                    @include("Base.section.fileItem")
                @endfor
            @elseif(count($files)>12 && count($files) >24)
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
<div class="title-bottom">
    <h2 class="title-head">دفاتر املاک</h2>
</div>

<div class="image-carousel">
    <div class="card-back">
        <img alt="carousel-card-back" src="{{asset("base/images/bgSlideshow.png")}}" class="image-back-card">
    </div>
    <div class="container-fluid" style="position: relative; z-index: 3;">
        <div id="myCarousel" class="carousel hi slide">
            <div class="carousel-inner hi1 row w-100 mx-auto">
                <div class="carousel-item card-item col-md-4 active">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="{{asset("base/images/g5.jpg")}}" alt="Card image cap">
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
                @for($i =0 ; $i<count($customers);$i++)
                    <div class="carousel-item card-item col-md-4">
                        <div class="card">
                            <img class="card-img-top img-fluid"
                                 src="@if($customers[$i]["image"]!=null) {{asset("/storage/".$customers[$i]["image"])}} @else{{asset("base/images/g8.jpg")}}@endif"
                                 alt="Card image cap">
                            <div class="card-content">
                                <h3 class="card-h3">{{$customers[$i]["office"]}}</h3>
                                <p class="card-p">
                                    {{$customers[$i]["address"]}}
                                </p>
                                <a href="{{route('profile',$customers[$i]['id'])}}">
                                    <button class="btn card-btn" style="margin-left:10%;">
                                        جزئیات
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                @endfor
                <div class="carousel-item card-item col-md-4">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="{{asset("base/images/g5.jpg")}}" alt="Card image cap">
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
        <img alt="footer-background" class="footer-image" src="{{asset("base/images/bgFooter2.png")}}">
    </div>
    <div class="footer-logo">
        <img alt="logo" src="{{asset("base/images/logo1.png")}}" style="width:40%;">
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
                        <a href="{{route('rules')}}">قوانین</a>
                    </li>
                    <li>
                        <h5 class="font-weight-bold footer-head text-uppercase mt-3 mb-4"
                            style="margin-top: 5% !important;">شبکه های اجتماعی</h5>
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
                        <a href="javascript:void(0)" id="footsec">ورود مشاورین</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" id="footfirst">ثبت آگهی رایگان</a>
                    </li>
                    <h5 class="font-weight-bold footer-head text-uppercase mt-3 mb-4"
                        style="margin-top: 5% !important;">جستجو</h5>
                    <li>
                        <a href="#search">جستجوی ملک</a>
                    </li>
                    <li>
                        <a href="#search">فیلتر های جستجو</a>
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


<script>
    @if(isset($type))
    @if($type == 1)

    $(".mab1").hide();
    $(".mab2").hide();
    $(".mab3").show();

    @else
    $(".mab1").show();
    $(".mab2").show();
    $(".mab3").hide();
    @endif
    @endif
</script>
<script type="text/javascript" src="{{asset("base/jquery/index.js")}}"></script>
<script type="text/javascript" src="{{asset("base/jquery/bootstrap.js")}}"></script>
<script type="text/javascript" src="{{asset("base/fontawesome/js/all.js")}}"></script>
</body>
</html>
