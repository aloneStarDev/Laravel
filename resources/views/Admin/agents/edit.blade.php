@extends('Admin.master')

@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="page-header head-section">
            <h2>ویرایش کارمند</h2>
        </div>
        <form class="form-horizontal" action="{{ route('agents.update', ['agent' => $agent->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            @include('Admin.section.errors')
            @method('patch')
            <div class="form-group">
                <div class="col-sm-12">
                    <label for="name" class="control-label">نام</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="نام را وارد کنید" value="{{ $agent->name }}">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <label for="lastname" class="control-label">نام خانوادگی</label>
                    <input type="text" class="form-control" name="lastname" id="lastname" placeholder="نام خانوادگی را وارد کنید" value="{{ $agent->lastname }}">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <label for="phonenumber" class="control-label">شماره تلفن</label>
                    <input type="text" class="form-control" name="phonenumber" id="phonenumber" placeholder="شماره تلفن را وارد کنید" value="{{ $agent->phonenumber }}">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <label for="nationCode" class="control-label">کدملی</label>
                    <input type="text" class="form-control" name="nationCode" id="nationCode" placeholder="کدملی را وارد کنید" value="{{ $agent->nationCode }}">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <label for="active" class="control-label">وضعیت</label>
                    <input type="checkbox" class="checkbox-inline" onclick="f()" @if($agent->active == 1) checked="true" @endif >
                    <script>
                        function f() {
                            let active = 0;
                            @if($agent->active)
                                active = 0;
                            @else
                                active = 1;
                            @endif
                            document.getElementById('active').value = active;
                        }
                    </script>
                    <input type="hidden" id="active" name="active" value="{{$agent->active}}">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <label for="address" class="control-label">آدرس</label>
                    <textarea rows="5" class="form-control" name="address" id="address" placeholder="آدرس را وارد کنید">{{ $agent->address }}</textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-danger">ویرایش</button>
                </div>
            </div>

        </form>
    </div>
@endsection
