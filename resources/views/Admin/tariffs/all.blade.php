@extends('Admin.master')

@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="page-header head-section">
            <h2>تعرفه ها</h2>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>شماره</th>
                    <th>مدت</th>
                    <th>قیمت (تومان)</th>
                    <th>تنظیمات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($tariffs as $tariff)
                    <tr>
                        <td>{{ $tariff->id }}</td>
                        <td>{{ $tariff->months }} ماه</td>
                        <td>{{ $tariff->price }}</td>
                        <td>
                            <a href="{{ route('tariffs.edit', ['tariff' => $tariff->id]) }}" class="btn btn-primary">ویرایش</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
