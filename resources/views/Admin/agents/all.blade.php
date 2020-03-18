@extends('Admin.master')

@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="page-header head-section">
            <h2>کارمندان</h2>
            <a href="{{ route('agents.create') }}" class="btn btn-sm btn-primary">ایجاد کارمند</a>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>نام</th>
                    <th>تلفن</th>
                    <th>کد ملی</th>
                    <th>رمز عبور</th>
                    <th>آدرس</th>
                    <th>تعداد ثبتی</th>
                    <th>وضعیت</th>
                </tr>
                </thead>
                <tbody>
                @foreach($agents as $agent)
                    <tr>
                        <td>{{ $agent->name }} {{ $agent->lastname }}</td>
                        <td>{{ $agent->phonenumber }}</td>
                        <td>{{ $agent->nationCode }}</td>
                        <td><a href="#" class="btn btn-info">تغیرر رمز عبور</a></td>
                        <td>{{ $agent->address }}</td>
                        <td>{{ $agent->registered_items }}</td>
                        <td>{{ $agent->active }}</td>
                        <td>
                            <form action="{{ route('agents.destroy', ['agent' => $agent->id]) }}" method="post">
                                @csrf
                                @method('delete')
                                <div class="btn-group btn-group-xs">
                                    <a href="{{ route('agents.edit', ['agent' => $agent->id]) }}" class="btn btn-primary">ویرایش</a>
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
            {!! $agents->render() !!}
        </div>
    </div>
@endsection
