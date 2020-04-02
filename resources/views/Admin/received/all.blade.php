@extends('Admin.master')

@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="page-header head-section">
            <h2>درخواست ها ی ثبت شده</h2>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>نام</th>
                    <th>نام خانوادگی</th>
                    <th>شماره تماس</th>
                    <th>آدرس</th>
                    <th>نوع درخواست</th>
                    <th>نوع ساختمان</th>
                    <th>عملیات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($receives as $r)
                    <tr>
                        <td>{{ $r->name }}</td>
                        <td>{{ $r->lastname }}</td>
                        <td>{{ $r->phonenumber }}</td>
                        <td>{{ $r->address}}</td>
                        <td>{{ \App\Receive::$mode_[$r->mode]}}</td>
                        <td>{{ \App\File::$bulbing_type[$r->buildingType]}}</td>
                        <td>
                            <a href="{{route('removeReceived',$r->id)}}"><button class="btn btn-danger">حذف</button></a>
                            <a href="{{route('showReceived',$r->id)}}"><button class="btn btn-default">نمایش</button></a>
                        @if($r->type==1)
                            <a href="{{route('editReceived',$r->id)}}"><button class="btn btn-success">ویرایش و ثبت</button></a>
                            @endif

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
