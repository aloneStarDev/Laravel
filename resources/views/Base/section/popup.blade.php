<div class="pop-parent">
</div>
<div class="pop-div pop1">
    @include("Base.section.errors")
    <div class="pop-cross">
        <i class="fas fa-times"></i>
    </div>
    <div class="pop-top">
        <div class="pop-top-right" style="border-top-right-radius:20px;">
            <button class="pop-right-btn sabt btn">
                ثبت نام
            </button>
        </div>
        <div class="pop-top-left" style="border-top-left-radius:20px;">
            <button class="pop-left-btn vorood btn">
                ورود
            </button>
        </div>
    </div>
    <div class="pop-content content1">
        <div class="pop-content-title">
            <h3>فرم ورود</h3>
        </div>
        <div class="pop-content-image">
            <img alt="vorood-img" src="../base/images/3.png">
        </div>
        <div class="pop-content-form">
            <form class="login100-form validate-form" action="{{route("login")}}" method="POST">
                @csrf
                <div class="pop-content-input">
                    <div style="position: relative; height: 50px;">
                        <i class="fas fa-user input-user"></i>
                        <input type="text" name="userName" placeholder="نام کاربری" maxlength="25">
                    </div>
                    <div style="position: relative; height: 50px; margin-top: 3%;">
                        <i class="fas fa-lock input-lock"></i>
                        <input type="password" name="passWord" placeholder="رمز عبور" maxlength="25">
                    </div>
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
                    <button class="pop-button-left btn" type="submit">
                        ورود
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="pop-content content2">
        <div class="pop-content-title2">
            <h3>فرم ثبت نام</h3>
        </div>
        <div class="pop-content-form2"><!--username password repeat_Password phonenumber-->
            <div class="pop-content-input2">
                <form id="fa">
                <div class="input-right">
                        <div style="position: relative; height: 50px;">
                            <i class="fas fa-user input-user2"></i>
                            <input type="text" id="username" placeholder="نام کاربری" maxlength="25">
                        </div>
                        <div style="position: relative; height: 50px; margin-top:3%;">
                            <i class="fas fa-lock input-lock2"></i>
                            <input type="password" id="password" placeholder="رمز عبور" maxlength="25">
                        </div>
                    </div>
                <div class="input-left">
                        <div style="position: relative; height: 50px;">
                            <i class="fas fa-phone input-phone"></i>
                            <input type="number" id="phonenumber" placeholder="شماره تلفن همراه"
                                   onkeypress="return event.charCode >= 48 && event.charCode <= 57 && this.value.length < 11">
                        </div>
                        <div style="position: relative; height: 50px; margin-top:3%;">
                            <i class="fas fa-lock input-lock-repeat"></i>
                            <input type="password" id="password_repeat" placeholder="تکرار رمز عبور" maxlength="25">
                    </div>
                </div>
                </form>
                <div class="input-center">
                <input type="number" id="code" placeholder="کد تایید"
                           onkeypress="return event.charCode >= 48 && event.charCode <= 57 && this.value.length < 11">
                </div>
            </div>
            <div class="pop-buttons2">
                <button class="pop-button-right2 btn">
                    انصراف
                </button>
                <button class="pop-button-left2 btn" onclick="regA()" id="btnSubmit">
                    دریافت کد تائید
                </button>
            </div>
            <div class="circles">
                <div class="circle1"></div>
                <div class="circle2"></div>
                <div class="circle3" style="background-color: #4016BA;"></div>
            </div>
        </div>
    </div>
    <div class="pop-content content3">
        <div class="pop-content-title2">
            <h3>فرم ثبت نام</h3>
        </div>
        <div class="pop-content-form2">
            <div class="pop-content-input3">
                <div class="input-top">
                    <i class="fas fa-user input-user3"></i>
                    <input type="text" id="name" placeholder="نام " maxlength="10">
                    <i class="fas fa-user input-user4"></i>
                    <input type="text" id="lastname" placeholder="نام خانوادگی" maxlength="20">
                    <div class="sex">
                        <button class="sexbtn">جنسیت <i class="fas fa-chevron-down"></i></button>
                        <div class="sex-content">
                            <a>مرد</a>
                            <a>زن</a>
                        </div>
                    </div>
                </div>
                <div class="input-text">
                    <textarea type="text" id="address" placeholder="آدرس دفتر" maxlength="200"
                              style="margin-top:3%"></textarea>
                </div>
                <div class="input-middle">
                    <input type="text" id="office" placeholder="نام دفتر" maxlength="25" style="margin-left:30%;">
                    <i class="fas fa-phone-square input-home"></i>
                    <input type="number" id="phone_home" placeholder="شماره تلفن ثابت"
                           onkeypress="return event.charCode >= 48 && event.charCode <= 57 && this.value.length < 11">
                </div>
                <div class="input-bottom">
                    <i class="fas fa-envelope input-envelope"></i>
                    <input type="number" id="email" placeholder="ایمیل" style="margin-right:28%; width:40%;">
                </div>
            </div>
            <div class="pop-buttons3">
                <button class="pop-button-right3 btn">
                    انصراف
                </button>
                <button class="pop-button-left3 btn">
                    ادامه
                </button>
            </div>
            <div class="circles" style="margin-top:40%;">
                <div class="circle1"></div>
                <div class="circle2"></div>
                <div class="circle3"></div>
            </div>
        </div>

    </div>
    <div class="pop-content content4">
        <div class="pop-content-title2">
            <h3>فرم ثبت نام</h3>
        </div>
        <div class="subtitle">
            <h4>انتخاب نوع اشتراک</h4>
            <label class="systemlbl">تعداد سیستم: </label>
 <input class="systeminp" type="number" name="phone-home" placeholder="1" onkeypress="return event.charCode >= 48 && event.charCode <= 57 && this.value.length < 11" >
        </div>
        <div class="pop-content-form2">
            <div class="content-button">
                <button class="button1 btn">
                    <h3 class="button-title">1 ماهه</h3>
                    <p class="button-content"><p id="p4"> 200 </p> هزار تومان</p>
                    <p class="button-content"> هر کاربر اضافه : <p id="p4a"> 200 </p> </p>
                </button>
                <button class="button2 btn">
                    <h3 class="button-title">3 ماهه</h3>
                    <p class="button-content"><p id="p3"> 200 </p> هزار تومان</p>
                    <p class="button-content"> هر کاربر اضافه : <p id="p3a"> 200 </p> </p>
                </button>
                <button class="button3 btn">
                    <h3 class="button-title">6 ماهه</h3>
                    <p class="button-content"><p id="p2"> 200 </p> هزار تومان</p>
                    <p class="button-content"> هر کاربر اضافه : <p id="p2a"> 200 </p> </p>
                </button>
                <button class="button4 btn">
                    <h3 class="button-title">1 ساله</h3>
                    <p class="button-content"><p id="p1"> 200 </p> هزار تومان</p>
                    <p class="button-content"> هر کاربر اضافه : <p id="p1a"> 200 </p> </p>
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
            <div class="circles" style="margin-top:35%;">
                <div class="circle1"></div>
                <div class="circle2"></div>
                <div class="circle3"></div>
            </div>
        </div>

    </div>
</div>
<div class="pop-div pop2">
    <div class="pop-cross">
        <i class="fas fa-times"></i>
        @include("Base.section.errors")
    </div>
    <div class="pop-top2">
        <div class="pop-top-right2" style="border-top-right-radius: 20px;">
            <button class="pop-right-btn2 sabt2 btn">
                ثبت درخواست ملک
            </button>
        </div>
        <div class="pop-top-left2" style="border-top-left-radius: 20px;">
            <button class="pop-left-btn2 vorood2 btn">
                ثبت ملک
            </button>
        </div>
    </div>
    <div class="pop-content content5">
        <div class="pop-content-form5">
            <div class="pop-content-input5">
                <div class="input-top5">
                    <i class="fas fa-user input-user5"></i>
                    <input type="text" name="name" placeholder="نام " maxlength="10">
                    <i class="fas fa-user input-user6"></i>
                    <input type="text" name="family" placeholder="نام خانوادگی" maxlength="20">
                    <i class="fas fa-phone  input-phone5"></i>
                    <input type="number" name="phone" placeholder="شماره تلفن "
                           onkeypress="return event.charCode >= 48 && event.charCode <= 57 && this.value.length < 11"
                           style="width:35%;">
                </div>
                <div class="input-middle5">
                    <div class="vagozari">
                        <button class="vagozaribtn">
                            <i class="fas fa-scroll input-scroll"></i>
                            نوع واگذاری
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="vagozari-content">
                            <a>ویلایی</a>
                            <a>آپارتمان</a>
                            <a>تجاری</a>
                            <a>اداری</a>
                            <a>کلنگی و زمین</a>
                        </div>
                    </div>
                    <div class="melk">
                        <button class="melkbtn">
                            <i class="fas fa-home input-home2"></i>
                            نوع ملک
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="melk-content">
                            <a>خرید و فروش</a>
                            <a>رهن و اجاره</a>
                        </div>
                    </div>
                    <textarea type="text" name="adress" placeholder="آدرس ملک" maxlength="200"
                              class="textarea-melk"></textarea>
                </div>
                <div class="input-bottom5">
                    <textarea type="text" name="explanation" placeholder="توضیحات" maxlength="200"
                              class="textarea-melk2"></textarea>
                </div>
            </div>
            <div class="pop-buttons5">
                <button class="pop-button-right5 btn">
                    انصراف
                </button>
                <button class="pop-button-left5 btn">
                    ثبت
                </button>
            </div>
        </div>
    </div>
    <div class="pop-content content6">
        <div class="pop-content-form6">
            <div class="pop-content-input6">
                <div class="input-top6">
                    <i class="fas fa-user input-user7"></i>
                    <input type="text" name="name" placeholder="نام " maxlength="10">
                    <i class="fas fa-user input-user8"></i>
                    <input type="text" name="family" placeholder="نام خانوادگی" maxlength="20">
                    <i class="fas fa-phone  input-phone6"></i>
                    <input type="number" name="phone" placeholder="شماره تلفن "
                           onkeypress="return event.charCode >= 48 && event.charCode <= 57 && this.value.length < 11"
                           style="width:35%;">
                </div>
                <div class="input-middle6">
                    <div class="vagozari1">
                        <button class="vagozaribtn1">
                            <i class="fas fa-scroll"></i>
                            نوع درخواست
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="vagozari-content1">
                            <a>ویلایی</a>
                            <a>آپارتمان</a>
                            <a>تجاری</a>
                            <a>اداری</a>
                            <a>کلنگی و زمین</a>
                        </div>
                    </div>
                    <div class="melk1">
                        <button class="melkbtn1">
                            <i class="fas fa-home"></i>
                            نوع ملک
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="melk-content1">
                            <a>خرید و فروش</a>
                            <a>رهن و اجاره</a>
                        </div>
                    </div>
                    <textarea type="text" name="address" placeholder="آدرس ملک" maxlength="200"
                              class="textarea-melk3"></textarea>
                </div>
                <div class="input-bottom6">
                    <textarea type="text" name="explanation" placeholder="توضیحات" maxlength="200"
                              class="textarea-melk4"></textarea>
                </div>
            </div>
            <div class="pop-buttons6">
                <button class="pop-button-right6 btn">
                    انصراف
                </button>
                <button class="pop-button-left6 btn">
                    ثبت
                </button>
            </div>
        </div>
    </div>
</div>



<script>
    function regA() {
        if ($("#btnSubmit").text() === "ادامه") {
            let code = $("#code").val();
            $.ajax({
                url: '{{route('registerB')}}',
                type: 'GET',
                data: {code},
                success: function (response) {
                    if(response === "false")
                        alert("کد تایید اشتباه است");
                },
                error: function (err) {
                    console.log(err);
                }
            });
        }
        else {
            let username = $("#username").val();
            let password = $("#password").val();
            let password_repeat = $("#password_repeat").val();
            let phonenumber = $("#phonenumber").val();
            if (password === password_repeat) {
                $.ajax({
                    url: '{{route('registerA')}}',
                    type: 'GET',
                    data: {username, password, phonenumber},
                    success: function (response) {
                        alert("کد تایید برای شما ارسال شد");
                    },
                    error: function (err) {
                        console.log(err.responseJSON.errors);
                    }
                });
            }
        }
    }
</script>
