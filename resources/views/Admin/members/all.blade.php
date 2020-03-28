
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
                    <th>نام نام خانوادگی</th>
                    <th>شماره تماس</th>
                    <th>ناحیه</th>
                    <th>آدرس</th>
                    <th>نوع اشتراک</th>
                    <th>تاریخ شروع اشتراک</th>
                    <th>دسترسی ها</th>
                </tr>
                </thead>
                <tbody>
                @foreach($customers as $customer)
                    <tr>
                        <td>{{ $customer->name }} {{ $customer->lastname }}</td>
                        <td>{{ $customer->phonenumber }}</td>
                        <td>{{ $customer->region }}</td>
                        <td>{{ $customer->address }}</td>
                        <td>{{ $customer['subscribtion-time'] ?? ''}}</td>
                        <td>{{ $customer['start-subscribtion'] ?? '' }}</td>
                        <td><a href="{{route('disable.member',$customer)}}"> @if($customer->enable==0) غیرفعال @else فعال @endif</a> </tr>
                    </td>
                @endforeach
                </tbody>
            </table>
        </div>
        <div style="text-align: center">
            {!! $customers->render() !!}
        </div>
    </div>
@endsection
