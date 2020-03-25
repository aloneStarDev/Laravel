@extends('Admin.master')

@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="page-header head-section">
            <h2> ویرایش تعرفه -  {{ $tariff->months }} ماهه</h2>
        </div>
        <form class="form-horizontal" action="{{ route('tariffs.update', ['tariff' => $tariff->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            @include('Admin.section.errors')
            @method('patch')
            <div class="form-group">
                <div class="col-sm-12">
                    <label for="price" class="control-label">قیمت</label>
                    <input type="text" class="form-control" name="price" id="price" placeholder="قیمت را وارد کنید" value="{{ $tariff->price }}">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <label for="price" class="control-label">قیمت کاربر اضافه</label>
                    <input type="text" class="form-control" name="addOnMember" id="price" placeholder="قیمت را وارد کنید" value="{{ $tariff->addOnMember }}">
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
