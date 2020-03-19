<!DOCTYPE html>
<html lang="en">
<head>
<title>{{$title}}</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{asset('asset/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/fontawesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/hamburgers/1.1.3/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animsition/4.0.2/js/animsition.min.js">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.12/js/select2.min.js">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.5/daterangepicker.min.js">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('asset/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('asset/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
	@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
            <form class="login100-form validate-form" action="{{route('login')}}" method="POST">
                    @csrf
					<span class="login100-form-title p-b-26">
						خوش آمدید
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>

					<div class="wrap-input100 validate-input" dir="rtl" data-validate = "نام کاربری اجباری است">
						<input  class="input100"  type="text" name="userName"/>
						<span class="focus-input100" dir="rtl" data-placeholder="نام کاربری"></span>
					</div>

					<div class="wrap-input100 validate-input" dir="rtl" data-validate="گذرواژه اجباری است">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" dir="rtl" type="password" name="passWord"/>
						<span class="focus-input100"  dir="rtl" data-placeholder="گذرواژه"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit">
								ورود
							</button>
						</div>
					</div>
                <div class="text-center">
						<span class="txt1">
                            آیا رمز خود رافراموش کرده اید ؟ -
						</span>
                    <a class="txt2" href="{{route('forget')}}">
                        بازیابی
                    </a>
                </div>
					<div class="text-center p-t-115">
						<span class="txt1">
							آیا حساب ندارید؟ ایجاد کنید  -
						</span>
						<a class="txt2" href="{{route('signup')}}">
							ایجاد حساب
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!--===============================================================================================-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/animsition/4.0.2/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/esm/popper.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.12/js/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.5/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/countdown/2.6.0/countdown.js"></script>
<!--===============================================================================================-->
	<script src="{{asset('asset/js/main.js')}}"></script>

</body>
</html>
