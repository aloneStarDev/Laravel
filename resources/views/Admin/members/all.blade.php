
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
                    <th>نام املاکی</th>
                    <th>نام نام خانوادگی</th>
                    <th>شماره تماس</th>
                    <th>ناحیه</th>
                    <th>آدرس</th>
                    <th>نوع اشتراک</th>
                    <th>تاریخ اتمام اشتراک</th>
                    <th>تنظیمات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($customers as $customer)
                    <tr>
                        <td>{{ $customer->office }}</td>
                        <td>{{ $customer->name }} {{ $customer->lastname }}</td>
                        <td>{{ $customer->phonenumber }}</td>
                        <td>{{ $customer->region }}</td>
                        <td>{{ $customer->address }}</td>
                        @switch($customer->panel)
                             @case(1) <td>یک ماهه</td> @break
                             @case(2) <td>سه ماهه</td> @break
                             @case(3) <td>شش ماهه</td> @break
                             @case(4) <td>یک ساله</td> @break
                             @default <td>بدون اشتراک</td> @break
                        @endswitch
                        <td>{{ $customer->expire_subscription ?? "" }}</td>
                        <td>
                            <a class="btn btn-default" href="{{route('disable.member',$customer)}}"> @if($customer->enable!=0) غیرفعال @else فعال @endif</a>
                            <a class="btn btn-default" href="{{route('members.edit',$customer)}}"> ویرایش</a>
                            <a class="btn btn-default" href="{{route('members.show',$customer)}}">  نمایش اطلاعات</a>
                            <a class="btn btn-default" href="{{route('resetIp',$customer)}}">ریست ip</a>
                            <form action="{{route('members.destroy',$customer->id)}}" method="post">
                                @csrf
                                @method("delete")
                                <button class="btn btn-default" type="submit">حذف</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div style="text-align: center">
            {!! $customers->render() !!}
        </div>
    </div>
@endsection
