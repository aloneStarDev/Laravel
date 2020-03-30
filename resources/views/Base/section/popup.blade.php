
<div class="pop-parent">
</div>

<div class="pop-div pop1">
    <div class="pop-cross">
        <i class="fas fa-times"></i>
    </div>
    @include("Base.section.errors")
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
            <img alt="vorood-img" src="{{asset("base/images/3.png")}}">
        </div>
        <div class="pop-content-form">
            <form action="{{route("login")}}" method="post">
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
                    <button class="pop-button-left btn">
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
        <div class="pop-content-form2">
            <div class="pop-content-input2">
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
                <form action="{{route("verify")}}" method="post" id="verify">
                    @csrf
                <div class="input-center">
                <input type="number" id="code" name="code" placeholder="کد تایید"
                           onkeypress="return event.charCode >= 48 && event.charCode <= 57 && this.value.length < 11">
                    <input type="hidden" name="verifyPhone" id="verifyPhone" />
                </div>
                </form>
            </div>
            <div class="pop-buttons2">
                <button class="pop-button-right2 btn">
                    انصراف
                </button>
                <button class="pop-button-left2 btn" id="btnSubmit" onclick="checkUser()">
                    دریافت کد تأیید
                </button>
            </div>
        </div>

    </div>
</div>
<div class="pop-div pop2">
    <div class="pop-cross">
        <i class="fas fa-times"></i>
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
                    <textarea type="text" name="adress" placeholder="آدرس ملک" maxlength="200"
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
    let i  = false;
    function checkUser() {
        if (i) {
            let code = $("#code").val();
            $("#btnSubmit").text("ادامه");
            $("#verify").submit();
        }else {
            $("#btnSubmit").empty();
            $("#err").empty();
            $("#err").removeClass("alert alert-danger");
            let username = $("#username").val();
            let password = $("#password").val();
            let password_repeat = $("#password_repeat").val();
            let phonenumber = $("#phonenumber").val();
            if (password != "" && password_repeat != "") {
                if (password === password_repeat) {
                    $.ajax({
                        url: '/contact/checkUser',
                        type: 'GET',
                        data: {username, password, phonenumber},
                        success: function (response) {
                            $("#code").show();
                            alert("کد تایید برای شما ارسال شد");
                            $("#verifyPhone").val(phonenumber);
                            i = true;
                        },
                        error: function (err) {
                            if (err.hasOwnProperty("responseJSON")) {
                                let error = err.responseJSON.errors;
                                if (error.hasOwnProperty("username")) {
                                    var node = document.createElement("LI");
                                    var textnode = document.createTextNode(error.username[0]);
                                    node.appendChild(textnode);
                                    node.style = "text-align: right";
                                    document.getElementById("err").appendChild(node);
                                    $("#err").addClass("alert alert-danger");
                                    $("#code").hide();
                                }
                                if (error.hasOwnProperty("phonenumber")) {
                                    var node = document.createElement("LI");
                                    var textnode = document.createTextNode(error.phonenumber[0]);
                                    node.appendChild(textnode);
                                    node.style = "text-align: right";
                                    document.getElementById("err").appendChild(node);
                                    $("#err").addClass("alert alert-danger");
                                    $("#code").hide();
                                }
                            }else{
                                console.log(err);
                            }
                        }
                    });
                } else {
                    var node = document.createElement("LI");
                    var textnode = document.createTextNode("پسورد ها با هم برابر نیستند");
                    node.appendChild(textnode);
                    node.style = "text-align: right";
                    document.getElementById("err").appendChild(node);
                    $("#err").addClass("alert alert-danger");
                    $("#code").hide();
                }
            } else {
                var node = document.createElement("LI");
                var textnode = document.createTextNode("پسورد و تکرار آن الزامی است");
                node.appendChild(textnode);
                node.style = "text-align: right";
                document.getElementById("err").appendChild(node);
                $("#err").addClass("alert alert-danger");
                $("#code").hide();
            }
        }
    }

</script>
