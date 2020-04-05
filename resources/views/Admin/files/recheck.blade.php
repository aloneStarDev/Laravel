@extends('Admin.master')

@section('content')
    @include('Admin.section.errors')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="page-header head-section">
            <h2>اعلام مغایرت</h2>
        </div>
        <div class="row">
            <a href="{{ route('file.callback',["file"=>json_encode($file),'mode'=>$mode]) }}" class="btn  btn-success">نادیده گرفتن و ثبت</a>
            <a href="{{ route('file.callback',["file"=>json_encode($file),'mode'=>($mode+2)]) }}" class="btn  btn-default">بازگشت و ویرایش</a>
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
                    <th>کد فایل</th>
                    <th>نوع مغایرت</th>
                    @can("master")
                            <th>کنترل</th>
                    @endcan
                </tr>
                </thead>
                <tbody>
                @foreach($filesN as $f)
                    <tr>
                        <td>{{ $f->name }} {{ $f->lastname }}</td>
                        <td>{{ $f->phonenumber }}</td>
                        <td>{{ $f->addressPu }}</td>
                        <td>{{ $f->addressPv }}</td>
                        <td>{{ $f->region }}</td>
                        <td>{{ $f->code}}</td>
                        <td> نام و نام خانوادگی </td>
                        @can('master')
                        <td>
                            <div class="btn-group btn-group-xs">
                                <form action="{{ route('files.destroy', $f) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-default">حذف</button>
                                    <a href="{{ route('files.edit', $f) }}" class="btn btn-default">ویرایش</a>
                                    <a href="{{ route('changeMode', $f) }}" class="btn btn-default">تغییر وضعیت</a>
                                    <a href="{{ route('archive',$f) }}" class="btn btn-default">بایگانی</a>
                                    <a href="{{ route('files.show',$f) }}" class="btn btn-default">نمایش جزئیات</a>
                                </form>
                            </div>
                        </td>
                        @endcan
                    </tr>
                @endforeach

                @foreach($filesP as $f)
                    <tr>
                        <td>{{ $f->name }} {{ $f->lastname }}</td>
                        <td>{{ $f->phonenumber }}</td>
                        <td>{{ $f->addressPu }}</td>
                        <td>{{ $f->addressPv }}</td>
                        <td>{{ $f->region }}</td>
                        <td>{{ $f->code}}</td>
                        <td> شماره تماس </td>
                        @can('master')
                            <td>
                                <div class="btn-group btn-group-xs">
                                    <form action="{{ route('files.destroy', $f) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-default">حذف</button>
                                        <a href="{{ route('files.edit', $f) }}" class="btn btn-default">ویرایش</a>
                                        <a href="{{ route('changeMode', $f) }}" class="btn btn-default">تغییر وضعیت</a>
                                        <a href="{{ route('archive',$f) }}" class="btn btn-default">بایگانی</a>
                                        <a href="{{ route('files.show',$f) }}" class="btn btn-default">نمایش جزئیات</a>
                                    </form>
                                </div>
                            </td>
                        @endcan
                    </tr>
                @endforeach

                @foreach($filesA as $f)
                    <tr>
                        <td>{{ $f->name }} {{ $f->lastname }}</td>
                        <td>{{ $f->phonenumber }}</td>
                        <td>{{ $f->addressPu }}</td>
                        <td>{{ $f->addressPv }}</td>
                        <td>{{ $f->region }}</td>
                        <td>{{ $f->code}}</td>
                        <td> آدرس </td>
                        @can('master')
                            <td>
                                <div class="btn-group btn-group-xs">
                                    <form action="{{ route('files.destroy', $f) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-default">حذف</button>
                                        <a href="{{ route('files.edit', $f) }}" class="btn btn-default">ویرایش</a>
                                        <a href="{{ route('changeMode', $f) }}" class="btn btn-default">تغییر وضعیت</a>
                                        <a href="{{ route('archive',$f) }}" class="btn btn-default">بایگانی</a>
                                        <a href="{{ route('files.show',$f) }}" class="btn btn-default">نمایش جزئیات</a>
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
