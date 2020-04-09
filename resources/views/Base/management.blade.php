<!doctype html>
<html>
<head>
    <meta charset="utf-8">
      <meta name="description" content="املاک انلاین- فایلینگ- خرید آپارتمان- خرید ویلا- املاک مشهد">
    <title>ٌمدیریت مشاورین املاک</title>
    <link href="{{asset("base/css/bootstrap.css")}}" rel="stylesheet" type="text/css">
    <link href="{{asset("base/fontawesome/css/all.css")}}" rel="stylesheet" type="text/css">
    <script src="{{asset("base/jquery/jquery-3-4-1.js")}}"></script>
    <link href="{{asset("base/css/management.css")}}" rel="stylesheet" type="text/css">

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
        <img alt="circle_photo" src="@if($customer->image!=null) {{asset("/storage/".$customer->image)}} @else{{asset("base/images/g8.jpg")}}@endif" class="circleimage">
    </div>
    <div class="titlediv">
        <h1 style="color: #FFFFFF; font-size:3vw;">{{$customer->office}}</h1>
        <h3 style="color: #FFFFFF; font-size:2vw;">{{$customer->name}} {{$customer->lastname}} </h3>
    </div>
</div>
<div class="tri-right">
    <img alt="background-texture-right" src="{{asset("base/images/curve3.png")}}">
</div>
<div class="tri-left">
    <img alt="background-texture-left" src="{{asset("base/images/curve1.png")}}">
</div>
<div class="menue-div">
    <h3 class="menue-h3">پنل کاربری </h3>
    <div class="menue-top">
        <div class="menue-top-head">
            <button class="btn menue-head-btn"><i class="fas fa-address-card"></i> اطلاعات کاربری <i
                    class="fas fa-chevron-down arrow-down"></i></button>
        </div>
        <div class="menue-top-hide">
            <button class="btn menuebtn1"> مشخصات کاربری</button>
            <button class="btn menuebtn2"> ویرایش اطلاعات</button>
            <button class="btn menuebtn3"> ثبت شماره تماس</button>
            <button class="btn menuebtn4"> تغییر رمز عبور</button>
        </div>
    </div>
    <div class="menue-middle">
        <button class="btn"><i class="fas fa-star"></i> اشتراک</button>
    </div>
    <div class="menue-buttom">
        <button class="btn"><i class="fas fa-dollar-sign"></i> پرداخت ها</button>
    </div>
</div>
    <div class="menue-content">
    <h4 class="menue-content-title"> مشخصات کاربری </h4>
    <div class="menue-content-sub1">
        <div class="sub1-div">
            <span class="span-right">نام و نام خانوادگی</span>
            <span class="span-left">{{ $customer->name." ".$customer->lastname }}</span>
        </div>
        <div class="sub1-div">
            <span class="span-right">نام دفتر</span>
            <span class="span-left">{{$customer->office}}</span>
        </div>
        <div class="sub1-div">
            <span class="span-right">نام کاربری</span>
            <span class="span-left">{{auth()->user()->username}}</span>
        </div>
        <div class="sub1-div">
            <span class="span-right">ایمیل</span>
            <span class="span-left">{{$customer->email}}</span>
        </div>
        <div class="sub1-div">
            <span class="span-right">شماره تماس</span>
            <span class="span-left">{{$customer->phonenumber}}</span>
        </div>
        <div class="sub1-div" style="border-bottom: none;">
            <span class="span-right">وضعیت حساب</span>
            <span class="span-left" style="color:@if(!$customer->active)#CA013D @else #28A29D @endif;">@if($customer->active)
                    حساب شما فعال است @else اشتراک شما منقضی شده است @endif</span>
        </div>
    </div>
    <div class="menue-content-sub2">
        <form action="{{route('member.panel.update')}}" method="post"  enctype="multipart/form-data">
            @csrf
            <div class="menue-image">
                <img alt="profile-image" src="@if($customer->image!=null) {{asset("/storage/".$customer->image)}} @else{{asset("base/images/g8.jpg")}}@endif">
                <button type="button" onclick="$('#imgin').fadeToggle();" class="btn">تغییر عکس <i class="fas fa-plus"></i></button>
                <input type="file" id="imgin" style="display: none" name="image"/>
            </div>

            <div class="sub2-div">
                <label class="menue-label">: نام </label>
                <input type="text" name="name" maxlength="40" value="{{$customer->name}}" class="menue-input">
            </div>

            <div class="sub2-div">
                <label class="menue-label">: نام خانوادگی</label>
                <input type="text" name="lastname" maxlength="40" value="{{$customer->lastname}}" class="menue-input">
            </div>
            <div class="sub2-div">
                <label class="menue-label">: نام کاربری</label>
                <input type="text" name="username" maxlength="40" value="{{auth()->user()->username}}"
                       class="menue-input">
            </div>
            <div class="sub2-div">
                <label class="menue-label">:نام دفتر</label>
                <input type="text" name="office" maxlength="40" value="{{$customer->office}}" class="menue-input">
            </div>
            <div class="sub2-div">
                <label class="menue-label">:ایمیل</label>
                <input type="text" name="email" maxlength="40" value="{{$customer->email}}" class="menue-input">
            </div>
            <div class="sub2-div">
                <label class="menue-label">:آدرس</label>
                <textarea type="text" name="address" maxlength="300"
                          class="menue-input">{{$customer->address}}</textarea>
            </div>
            <div class="sub2-div" style="border-bottom: none;">
                <label class="menue-label"> :درباره من</label>
                <textarea type="text" name="explain" maxlength="900"
                          class="menue-input" style="height: 260px;">{{$customer->explain}}</textarea>
            </div>
            <div class="sub2-div" style="border-bottom: none;">
                <hr style="background:#BCB8C9;">
                <label class="menue-label" style="font-size: 1.4vw; margin-bottom: 5%;">راه‌های ارتباطی</label>
            </div>
            <div class="sub2-div" style="border-bottom: none;">
                <label class="menue-label">:تلگرام</label>
                <input type="text" name="telegram" maxlength="40" value="{{$customer->telegram}}" class="menue-input">
            </div>
            <div class="sub2-div" style="border-bottom: none;">
                <label class="menue-label"> :اینستاگرام</label>
                <input type="text" name="instagram" maxlength="40" value="{{$customer->instagram}}" class="menue-input">
            </div>
            <div class="sub2-div" style="border-bottom: none;">
                <label class="menue-label"> :توییتر</label>
                <input type="text" name="twitter" maxlength="40" value="{{$customer->twitter}}" class="menue-input">
            </div>
            <div class="sub2-button">
                <button class="sub2-save btn" type="submit">ثبت تغییرات</button>
            </div>
        </form>
    </div>
    <div class="menue-content-sub3">
        <div id="erro_r"></div>
        <div class="sub2-div">
            <label class="menue-label">:شماره تماس فعلی</label>
            <input type="number" style="background:#C7DFD5; border:thin solid #2F8C63;"
                   onkeypress="return event.charCode >= 48 && event.charCode <= 57 && this.value.length < 11"
                   class="menue-input" id="oldPhone" value="{{$customer->phonenumber}}" disabled>
        </div>

        <form id="newPhoneForm" action="{{route('member.panel.resetPhonenumber')}}" method="post">
            @csrf
            <div class="sub2-div">
                <label class="menue-label">:ثبت شماره تماس جدید</label>
                <input name="newPhone" id="newPhone" type="number"
                       onkeypress="return event.charCode >= 48 && event.charCode <= 57 && this.value.length < 11"
                       class="menue-input">
            </div>
            <input type="hidden" name="nvPhone" id="nvPhone">
            <div class="sub2-button taiid">
                <input type="number" id="vCode" name="code" placeholder="کد تایید"
                       onkeypress="return event.charCode >= 48 && event.charCode <= 57">
            </div>
            <div class="sub2-button">
                <button type="button" class="sub2-save codebtn btn" id="resetPhone" onclick="checkPhone()">دریافت کد
                    تائید
                </button>
            </div>
        </form>
        <script>
            let j = false;

            function checkPhone() {
                if (j) {
                    let code = $("#vCode").val();
                    $("#resetPhone").text("ادامه");
                    $("#newPhoneForm").submit();
                } else {
                    $("#resetPhone").empty();
                    $("#erro_r").empty();
                    $("#erro_r").removeClass("alert alert-danger");
                    let oldPhone = $("#oldPhone").val();
                    let newPhone = $("#newPhone").val();
                    if (oldPhone != null && oldPhone !== "") {
                        if (newPhone !== oldPhone) {
                            $.ajax({
                                url: '{{route("member.panel.sendCode")}}',
                                type: 'GET',
                                data: {newPhone},
                                success: function (response) {
                                    if (response === "false") {
                                        var node = document.createElement("LI");
                                        var textnode = document.createTextNode("شماره تماس نا معتبر است");
                                        node.appendChild(textnode);
                                        node.style = "text-align: right";
                                        document.getElementById("erro_r").appendChild(node);
                                        $("#erro_r").addClass("alert alert-danger");
                                        $("#vCode").hide();
                                    } else {
                                        console.log(response);
                                        $("#vCode").show();
                                        alert("کد تایید برای شما ارسال شد");
                                        $("#resetPhone").text("ادامه");
                                        $("#nvPhone").val(newPhone);
                                        j = true;
                                    }
                                },
                                error: function (err) {
                                    if (err.hasOwnProperty("responseJSON")) {
                                        let error = err.responseJSON.errors;
                                        if (error.hasOwnProperty("newPhone")) {
                                            var node = document.createElement("LI");
                                            var textnode = document.createTextNode(error.newPhone[0]);
                                            node.appendChild(textnode);
                                            node.style = "text-align: right";
                                            document.getElementById("erro_r").appendChild(node);
                                            $("#erro_r").addClass("alert alert-danger");
                                            $("#vCode").hide();
                                        }
                                    } else {
                                        console.log(err);
                                    }
                                }
                            });
                        } else {
                            var node = document.createElement("LI");
                            var textnode = document.createTextNode("شماره تماس ها با هم برابر هستند");
                            node.appendChild(textnode);
                            node.style = "text-align: right";
                            document.getElementById("erro_r").appendChild(node);
                            $("#erro_r").addClass("alert alert-danger");
                            $("#vCode").hide();
                        }
                    } else {
                        var node = document.createElement("LI");
                        var textnode = document.createTextNode("شماره تماس جدید الزامی است");
                        node.appendChild(textnode);
                        node.style = "text-align: right";
                        document.getElementById("erro_r").appendChild(node);
                        $("#erro_r").addClass("alert alert-danger");
                        $("#vCode").hide();
                    }
                }
            }

        </script>
    </div>
    <div class="menue-content-sub4">
        <form action="{{route('member.panel.resetPass')}}" method="post">
            @csrf
            <div class="sub2-div">
                <label class="menue-label">:رمز عبور جدید</label>
                <input type="password" name="password" maxlength="25" class="menue-input">
            </div>
            <div class="sub2-div">
                <label class="menue-label">:تکرار رمز عبور جدید</label>
                <input type="password" name="repeatPassword" maxlength="25" class="menue-input">
            </div>
            <div class="sub2-button">
                <button type="submit" class="sub2-save btn">تغییر رمز عبور</button>
            </div>
        </form>
    </div>
    <div class="menue-content-sub5">
        <div class="sub-border">
            <div class="sub1-div">
                <span class="span-right">وضعیت حساب</span>
                <span class="span-left" style="color:@if(!$customer->active)#CA013D @else #28A29D @endif;">@if($customer->active)
                        حساب شما فعال است @else اشتراک شما منقضی شده است @endif</span>
            </div>
        </div>
        <div class="sub1-div">
            <span class="span-right">نوع اشتراک تهیه شده</span>
            <span class="span-left">{{\App\Tariff::$plan[$customer->panel]}}</span>
        </div>
        <div class="sub1-div">
            <span class="span-right">تاریخ تهیه</span>
            <span
                class="span-left">
                @if(count($payments)>=1)
                    <?php $lp = $payments->where("payment",true)->first(); ?>
                    @if($lp != null)
                        {{$lp->created_at}}
                    @else
                        هیچ پرداخت موفقی یافت نشد
                    @endif
                @else
                    شما اشتراکی تهیه نکرده اید @endif</span>
        </div>
        <div class="sub1-div" style="border-bottom:none;">
            <span class="span-right">تاریخ انقضا</span>
            <span class="span-left">@if($customer->expire_subscription != null){{verta($customer->expire_subscription)}}@else شما اشتراکی
                تهیه نکرده اید @endif</span>
        </div>
        <div class="sub2-button">
            <a href="{{route('member.panel.payment')}}">
                <button class="sub2-save btn">خرید اشتراک</button>
            </a>
        </div>
    </div>
    <div class="menue-content-sub6">
            <table class="menue-table">
                <tr>
                    <th class="table-title">عنوان</th>
                    <th class="table-date">تاریخ</th>
                    <th class="table-price">مبلغ پرداختی</th>
                    <th class="table-state">وضعیت</th>
                </tr>
                @foreach($payments as $p)
                    <tr>
                        <td class="table-title-sub">اشتراک</td>
                        <td class="table-date-sub">{{verta($p->created_at)}}</td>
                        <td class="table-price-sub">{{$p->price}} هزار تومان</td>
                        <td class="state @if(!$p->payment) red-cell @endif">@if($p->payment) موفق @else نا موفق @endif</td>
                    </tr>
                @endforeach
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
<script type="text/javascript" src="{{asset("base/jquery/management.js")}}"></script>
</body>
</html>
