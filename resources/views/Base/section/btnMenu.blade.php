<ul class=" justify-content-end nav-pills topul">
    @auth
        @can("admin","master")
            <li class="nav-item">
                <a href="{{route("manage")}}" class="atag firstProf">
                    <button type="button" class="btn">
                        <i class="fas fa-chevron-right" style="margin-left:5%;"></i>
                        <span>
                       مدیرت
                     </span>
                        <i class="fas fa-plus icon"></i>
                    </button>
                </a>
            </li>
        @else
            <li class="nav-item">
                <a href="{{route("member.panel")}}" class="atag firstProf">
                    <button type="button" class="btn">
                        <i class="fas fa-chevron-right" style="margin-left:5%;"></i>
                        <span>
                       مدیرت
                     </span>
                        <i class="fas fa-plus icon"></i>
                    </button>
                </a>
            </li>
        @endcan
    @else
        <li class="nav-item">
            <a href="#" class="atag firstProf">
                <button type="button" class="btn">
                    <i class="fas fa-chevron-right" style="margin-left:5%;"></i>
                    <span>
                       ثبت آگهی رایگان
                     </span>
                    <i class="fas fa-plus icon"></i>
                </button>
            </a>
        </li>
    @endauth
    @auth
        <li class="nav-item">
            <a class="atag secProf" href="{{route("logout")}}">
                <button type="button" class="btn">
                    <i class="fas fa-chevron-right" style="margin-left:5%;"></i>
                    <span>
                        خروج حساب کاربری
                    </span>
                    <i class="fas fa-times-circle"></i>
                </button>
            </a>
        </li>
    @else
        <li class="nav-item">
            <a class="atag secProf">
                <button type="button" class="btn">
                    <i class="fas fa-chevron-right" style="margin-left:5%;"></i>
                    <span>
                            ورود/ثبت نام مشاورین
                            </span>
                    <i class="fas fa-user icon"></i>
                </button>
            </a>
        </li>
    @endauth
</ul>
