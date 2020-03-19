@extends('Admin.master')

@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="page-header head-section">
            <h2>فایل</h2>
            <a href="{{ route('files.create') }}" class="btn btn-sm btn-primary">ایجاد فایل</a>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>نام و نام خانوادگی</th>
                    <th>تلفن</th>
                    <th>آدرس اصلی</th>
                    <th>آدرس فرعی</th>
                    <th>ناحیه</th>
                    <th>نمایش تصویر</th>
                    <th>وضعیت</th>
                    @can("admin_permissions")
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
                        <td>{{ $file->region }}</td>
                        <td><a href="#" class="btn btn-info">نمایش تصویر</a></td>
                        <td>@if($file->visible) فعال @else غیرفعال @endif </td>
                        @can('admin_permissions')
                        <td>
                            <form action="{{ route('files.destroy', $file) }}" method="POST">
                                @csrf
                                @method('delete')
                                <div class="btn-group btn-group-xs">
                                    <a href="{{ route('files.edit', $file) }}" class="btn btn-primary">ویرایش</a>
                                    <button type="submit" class="btn btn-danger">حذف</button>
                                </div>
                            </form>
                        </td>
                        @endcan
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div style="text-align: center">
            {!! $files->render() !!}
        </div>
    </div>
@endsection
