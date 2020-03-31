@extends('Admin.master')

@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="page-header head-section">
            <h2>پرداخت ها</h2>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>نام کاربر</th>
                    <th>مقدار پرداختی</th>
                    <th>نوع پرداخت</th>
                    <th>وضعیت</th>
                    <th>شماره تماس</th>
                    <th>تنظیمات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($payments as $payment)
                    <tr>
                        <td>{{ $payment->customer->name }} {{$payment->customer->lastname }}</td>
                        <td>{{ $payment->price }}</td>
                        @if($payment->subscription_month != 12)
                            <td> اشتراک {{ $payment->subscription_month }} ماهه </td>
                        @else
                            <td>اشتراک یک ساله</td>
                        @endif
                        <td>@if($payment->payment) موفق @else نا موفق @endif</td>
                        <td>{{$payment->customer->phonenumber}}</td>
                        <td>
                            <form action="/admin/payments/{{ $payment->id }}" method="post">
                                @csrf
                                @method('delete')
                                <div class="btn-group btn-group-xs">
                                    <button type="submit" class="btn btn-danger">حذف</button>
                                </div>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div style="text-align: center">
            {!! $payments->render() !!}
        </div>
    </div>
@endsection
