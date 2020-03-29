<ul class=" justify-content-end nav-pills topul">
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
    @can("customer")
        <li class="nav-item">
            <a class="atag secProf" href="{{route("logout")}}">
                <button type="button" class="btn">
                    <i class="fas fa-chevron-right" style="margin-left:5%;"></i>
                    <span>
                        {{auth()->user()->customer()->office}}
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
    @endcan
</ul>
