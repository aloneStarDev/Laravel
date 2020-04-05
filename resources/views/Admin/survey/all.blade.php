@extends('Admin.master')

@section('content')
    @include('Admin.section.errors')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="page-header head-section">
            <h2>انتقاوات و پیشنهادات</h2>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>نام و نام خانوادگی</th>
                    <th>ایمیل</th>
                    <th>عنوان</th>
                    <th>جزئیات</th>
                    <th>حذف</th>
                </tr>
                </thead>
                <tbody>
                @foreach($survey as $file)
                    <tr>
                        <td>{{ $file->fullName }}</td>
                        <td>{{ $file->email }}</td>
                        <td>{{ $file->title }}</td>
                        <td><a href="{{route("survey.show",$file)}}" class="btn btn-default"> نمایش جزئیات</a></td>
                        <td><a href="{{route("survey.delete",$file)}}" class="btn btn-danger"> حذف </a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
