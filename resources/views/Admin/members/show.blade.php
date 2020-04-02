
@extends('Admin.master')

@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="page-header head-section">
            <h2>مشترک ها</h2>
            <a href="{{ route('members.create') }}" class="btn btn-sm btn-primary">ایجاد کاربر</a>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>عنوان</th>
                    <th>مقدار</th>
                </tr>
                </thead>
                <tbody>
                @foreach($customer->toArray() as $key => $val)
                    <tr>
                        <td>{{ $key }}</td>
                        <td>{{ $val }}</td>
                    </tr>
                @endforeach
            </table>
            <a href="{{route('members.index')}}">
                <button class="btn btn-danger">بازگشت</button>
            </a>
        </div>
    </div>
@endsection
