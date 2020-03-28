
@extends('Admin.master')

@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <form action="{{route('register')}}" method="POST">
            @include("Admin.section.errors")
            @csrf
            <div class="form-group">
                <input dir="rtl" type="text" name="name" class="form-control @error('name') alert alert-danger @enderror" placeholder="name"/>
            </div>
            <div class="form-group">
                <input dir="rtl" type="text" name="lastname" class="form-control @error('lastname') alert alert-danger @enderror" placeholder="lastname"/>
            </div>
            <div class="form-group">
                <input dir="rtl" type="text" id="phonenumber" name="phonenumber" class="form-control @error('phonenumber') alert alert-danger @enderror" placeholder="phonenumber"/>
            </div>
            <div class="form-group">
                <input dir="rtl" type="number" name="region" class="form-control @error('region') alert alert-danger @enderror" placeholder="region"/>
            </div>
            <div class="form-group">
                <textarea dir="rtl" type="text" name="address" class="form-control @error('address') alert alert-danger @enderror" placeholder="address"></textarea>
            </div>
            <div class="form-group">
                <span for="call">این شماره ی برای نمایش به مشتری است در صورتی که این فیلد را پر نکنید شماره ی همراه به کاربران نمایش داده می شود</span>
                <input id="call" dir="rtl" type="text" name="call" class="form-control @error('call') alert alert-danger @enderror" placeholder="call"/>
            </div>

            <div class="form-group">
                <span for="panel">نوع اشتراک</span>
                <select name="panel" id="panel" class="bootstrap-select form-control">
                    <option value="1">یک ماه</option>
                    <option value="2">سه ماه</option>
                    <option value="3">شش ماه</option>
                    <option value="4">نه ماه</option>
                    <option value="5">یک ساله</option>
                </select>
            </div>
            <div class="form-group">
                <input type="number" class="form-control" name="addOnMember" placeholder="تعداد کاربران اضافه" />
            </div>
            <button type="submit" class="btn btn-primary form-control">send</button>
        </form>
    </div>
@endsection
