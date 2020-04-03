
@extends('Admin.master')

@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <form action="{{route('members.store')}}" method="POST">
            @include("Admin.section.errors")
            @csrf
            <div class="form-group">
                <input dir="rtl" type="text" name="name" class="form-control @error('name') alert alert-danger @enderror" placeholder="نام"/>
            </div>
            <div class="form-group">
                <input dir="rtl" type="text" name="lastname" class="form-control @error('lastname') alert alert-danger @enderror" placeholder="نام خانوادگی"/>
            </div>
            <div class="form-group">
                <input dir="rtl" type="text" id="phonenumber" name="phonenumber" class="form-control @error('phonenumber') alert alert-danger @enderror" placeholder="شماره تماس"/>
            </div>
            <div class="form-group">
                <input dir="rtl" type="number" name="region" class="form-control @error('region') alert alert-danger @enderror" placeholder="منطقه ی شهرداری"/>
            </div>
            <div class="form-group">
                <input dir="rtl" type="email" name="email" class="form-control @error('email') alert alert-danger @enderror" placeholder="ایمیل"/>
            </div>
            <div class="form-group">
                <input dir="rtl" type="text" name="office" class="form-control @error('region') alert alert-danger @enderror" placeholder="نام املاکی"/>
            </div>
            <div class="form-group">
                <textarea dir="rtl" type="text" name="address" rows="5" class="form-control @error('address') alert alert-danger @enderror" placeholder="آدرس"></textarea>
            </div>
            <div class="form-group">
                <span for="call">این شماره ی برای نمایش به مشتری است در صورتی که این فیلد را پر نکنید شماره ی همراه به کاربران نمایش داده می شود</span>
                <input id="call" dir="rtl" type="text" name="call" class="form-control @error('call') alert alert-danger @enderror" placeholder="شماره تماس"/>
            </div>
            <div class="form-group">
                <span for="panel">نوع اشتراک</span>
                <select name="panel" id="panel" class="bootstrap-select form-control">
                    <option value="1">یک ماه</option>
                    <option value="2">سه ماه</option>
                    <option value="3">شش ماه</option>
                    <option value="4">یک ساله</option>
                </select>
            </div>
            <div class="form-group">
                <input type="number" class="form-control" name="ipCount" placeholder="تعداد کاربران اضافه" />
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="username" placeholder="نام کاربری" />
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="گذرواژه" />
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-success">ارسال</button>

                    <a href="{{route("members.index")}}" class="btn btn-danger">بازگشت</a>
                </div>
            </div>
        </form>
    </div>
@endsection
