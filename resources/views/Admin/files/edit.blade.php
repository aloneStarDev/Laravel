@extends('Admin.master')

@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="page-header head-section">
            <h2>ویرایش فایل</h2>
        </div>
        <form class="form-horizontal" action="{{ route('files.update', ['file' => $file->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            @include('Admin.section.errors')
            @method('patch')
            <div class="form-group">
                <div class="col-sm-12">
                    <label for="name" class="control-label">نام</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="نام را وارد کنید" value="{{ $file->name }}">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <label for="lastname" class="control-label">نام خانوادگی</label>
                    <input type="text" class="form-control" name="lastname" id="lastname" placeholder="نام خانوادگی را وارد کنید" value="{{ $file->lastname }}">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <label for="phonenumber" class="control-label">شماره تلفن</label>
                    <input type="text" class="form-control" name="phonenumber" id="phonenumber" placeholder="شماره تلفن را وارد کنید" value="{{ $file->phonenumber }}">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <label for="region" class="control-label">منطقه</label>
                    <input type="number" class="form-control" name="region" id="region" placeholder="منطقه ی شهرداری را وارد کنید" value="{{ old('region') }}">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <label for="addressPu" class="control-label">آدرس اصلی</label>
                    <textarea rows="5" class="form-control" name="addressPu" id="addressPu" placeholder="آدرس اصلی را وارد کنید">{{ $file->addressPu }}</textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <label for="addressPv" class="control-label">آدرس</label>
                    <textarea rows="5" class="form-control" name="addressPv" id="addressPv" placeholder="آدرس فرعی را وارد کنید">{{ $file->addressPv }}</textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-danger">ویرایش</button>
                </div>
            </div>

        </form>
    </div>
@endsection
