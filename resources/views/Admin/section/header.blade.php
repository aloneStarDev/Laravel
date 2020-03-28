<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">وبسایت</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">

            <div class="navbar-left">
                <a href="{{route('logout')}}" class="btn btn-sm btn-warning" style="margin: 15px">خروج از پنل کاربری</a>
            </div>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li class="active"><a href="#">پنل اصلی</a></li>
                @can('master')
                    <li><a href="/admin/agents">صفحه کارمندان <span class="badge">0</span></a></li>
                    <li><a href="/admin/members">صفحه کاربران ثبت نام کرده</a></li>
                    <li><a href="{{route('tariffs.index')}}">صفحه تعرفه های ثبت نام <span class="badge">0</span></a></li>
                    <li><a href="/admin/successful-payments">پرداختی های موفق <span class="badge">{{ $paymentSuccessfulCount }}</span></a></li>
                    <li><a href="/admin/unsuccessful-payments">پرداختی های ناموفق <span class="badge">{{ $paymentUnsuccessfulCount }}</span></a></li>
                @endcan
            </ul>

            <ul class="nav nav-sidebar">
                @can('admin')
                    <li><a href="{{route('files.index')}}"> صفحه ثبت ملک<span class="badge">0</span></a></li>
                @endcan
                <li><a href="{{route('archives')}}">بایگانی<span class="badge">0</span></a></li>
            </ul>

            <ul class="nav nav-sidebar">
                @can('master')
                    <li><a href="#">صفحه درخواست های ثبت شده از طریق صفحه اصلی</a></li>
                    <li><a href="#">صفحه ملک های ثبت شده کاربران از طریق صفحه اصلی</a></li>
                    <li><a href="#">*صفحه دریافت اعلام مغایرت ها و گزارش واگذاری ها</a></li>
                @endcan
            </ul>
        </div>
    </div>
</div>
