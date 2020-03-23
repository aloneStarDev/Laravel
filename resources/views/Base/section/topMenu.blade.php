<div class="headingitems fixed-top">
<nav class="navbar navbar-expand-xl" style=" margin:0; box-sizing:inherit;padding-bottom:2px; width:100%; margin-top:10px;">
    <div class="logo" >
        <img alt="logo" src="../base/Images/Untitled-2.png" style="width:60%; transition-duration:0.5s;">
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
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a href="@auth {{route('logout')}} @else {{route('signin')}} @endauth" class="atag firstProf">
                            <button type="button" class="btn">
                                <i class="fas fa-chevron-right" style="margin-left:5%;"></i><span>
                                    @auth
                                        خروج از حساب
                                    @else
                                        ورود
                                    @endauth
                                 </span>
                                <i class="fas fa-plus icon"></i>
                            </button></a>
                    </li>
                    <li class="nav-item">
                        <a href="@auth {{route('manage')}} @else {{route('register')}} @endauth" class="atag secProf">
                            <button type="button" class="btn"><i class="fas fa-chevron-right" style="margin-left:5%;"></i>
                                <span>
                                    @auth
                                        مدیریت
                                    @else
                                        ثبت نام مشاوران
                                    @endauth
                                </span>
                                <i class="fas fa-user icon"></i>
                            </button></a>

                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
</div>
