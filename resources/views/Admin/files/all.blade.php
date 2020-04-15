@extends('Admin.master')

@section('content')
    @include('Admin.section.errors')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="page-header head-section">
            <h2>فایل</h2>
            @can('admin')
            <a href="{{ route('files.create') }}" class="btn btn-sm btn-primary">ایجاد فایل</a>
            @include("Admin.files.search")
            @endcan
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>نام و نام خانوادگی</th>
                    <th>تلفن</th>
                    <th>آدرس اصلی</th>
                    <th>آدرس فرعی</th>
                    <th>منطقه</th>
                    <th>کد فایل</th>
                    @can("admin","master")
                        <th>وضعیت</th>
                    @endcan
                @can("master")
                        <th>کنترل</th>
                @endcan
                </tr>
                </thead>
                <tbody>
                @foreach($files as $file)
                    <tr>
                        <td>{{ $file->name }} {{ $file->lastname }}</td>
                        <td>{{ $file->phonenumber }}</td>
                        <td>{{ $file->addressPu }}</td>
                        <td>{{ $file->addressPv }}</td>
                        <td>{{ \App\File::$region_map[$file->region] }}</td>
                        <td>{{$file->code}}</td>
                        @can("admin","master")
                        <td>@if($file->visible) فعال @else غیرفعال @endif </td>
                        @endcan
                        @can('master')
                        <td>
                            <div class="btn-group btn-group-xs">
                                <form action="{{ route('files.destroy', $file) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-default">حذف</button>
                                    <a href="{{ route('files.edit', $file) }}" class="btn btn-default">ویرایش</a>
                                    <a href="{{ route('changeMode', $file) }}" class="btn btn-default">تغییر وضعیت</a>
                                    <a href="{{ route('archive',$file) }}" class="btn btn-default">بایگانی</a>
                                    <a href="{{ route('files.show',$file) }}" class="btn btn-default">نمایش جزئیات</a>
                                </form>
                            </div>
                        </td>
                        @endcan
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
