@extends('Admin.master')

@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="page-header head-section">
            <h2>فایل</h2>
            @can('show_files')
            <a href="{{ route('files.create') }}" class="btn btn-sm btn-primary">ایجاد فایل</a>
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
                    <th>ناحیه</th>
                    @can("show_files")
                        <th>وضعیت</th>
                    @endcan
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
                        @can("show_files")
                        <td>@if($file->visible) فعال @else غیرفعال @endif </td>
                        @endcan
                        @can('admin_permissions')
                        <td>
                            <div class="btn-group btn-group-xs">
                                <form action="{{ route('files.destroy', $file) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-default">حذف</button>
                                    <a href="{{ route('files.edit', $file) }}" class="btn btn-default">ویرایش</a>
                                    <a href="{{ route('changeMode', $file) }}" class="btn btn-default">تغییر وضعیت</a>
                                    <a href="{{ route('archive',$file) }}" class="btn btn-default">بایگانی</a>
                                </form>
                            </div>
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
