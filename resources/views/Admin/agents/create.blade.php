@extends('Admin.master')

@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="page-header head-section">
            <h2>ایجاد کارمند</h2>
        </div>
        <form class="form-horizontal" action="{{ route('agents.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @include('Admin.section.errors')

            <div class="form-group">
                <div class="col-sm-12">
                    <label for="name" class="control-label">نام</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="نام را وارد کنید" value="{{ old('name') }}">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <label for="lastname" class="control-label">نام خانوادگی</label>
                    <input type="text" class="form-control" name="lastname" id="lastname" placeholder="نام خانوادگی را وارد کنید" value="{{ old('lastname') }}">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <label for="phonenumber" class="control-label">شماره تلفن</label>
                    <input type="text" class="form-control" name="phonenumber" id="phonenumber" placeholder="شماره تلفن را وارد کنید" value="{{ old('phonenumber') }}">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <label for="nationCode" class="control-label">کدملی</label>
                    <input type="text" class="form-control" name="nationCode" id="nationCode" placeholder="کدملی را وارد کنید" value="{{ old('nationCode') }}">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <label for="address" class="control-label">آدرس</label>
                    <textarea rows="5" class="form-control" name="address" id="address" placeholder="آدرس را وارد کنید">{{ old('address') }}</textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-danger">ارسال</button>
                </div>
            </div>

        </form>
    </div>
@endsection
