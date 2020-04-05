@extends('Admin.master')

@section('content')

    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="form-group">
            نام خانوادگی
            <br>
            <input dir="rtl" type="text"
                   class="form-control" value="{{$survey->fullName}}">
        </div>
        <div class="form-group">
            ایمیل
            <br>
            <input dir="rtl" type="text" id="phonenumber" name="phonenumber"
                   class="form-control" value="{{$survey->email}}"/>
        </div>
        <div class="form-group">
            عنوان
            <br>
            <input dir="rtl" class="form-control" value="{{$survey->title}}"/>
        </div>
        <div class="form-group">
            توضیحات
            <textarea dir="rtl" type="text" rows="5"
                      class="form-control">{{$survey->description}}</textarea>

            <div class="col-sm-12">
                <a href="{{route("survey.index")}}" class="btn btn-danger">بازگشت</a>
            </div>
        </div>
    </div>
@endsection
