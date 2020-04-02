@extends('Admin.master')
<style>
    li:hover{
        cursor: pointer;
    }
</style>
@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="page-header head-section">
            <h2>نمایش</h2>
        </div>
        <div>
            @include('Admin.section.errors')
            <div class="row">
                <label class="control-label">نام و نام خانوادگی مالک</label>
                <div class="text-primary">{{$receive->name}} {{ $receive->lastname }}</div>
            </div>
            <div class="row">
                <label class="control-label">نوع ملک</label>
                <div class="text-primary">{{\App\File::$bulbing_type[$receive->buildingType]}}</div>
            </div>
            <div class="row">
                <label class="control-label">آدرس</label>
                <div class="text-primary">{{ $receive->address }}</div>
            </div>
            <div class="row">
                <label class="control-label">شماره تماس</label>
                <div class="text-primary">{{ $receive->phonenumber }}</div>
            </div>
            @if($receive->description != null)
            <div class="row">
                <label class="control-label">توضیحات</label>
                <div class="text-primary">{{ $receive->description }}</div>
            </div>
            @endif
            <div class="form-group">
                <div class="col-sm-12">
                    <a href="{{route("received",$receive->type)}}" class="btn btn-danger">بازگشت</a>
                </div>
            </div>
        </div>
    </div>
@endsection
