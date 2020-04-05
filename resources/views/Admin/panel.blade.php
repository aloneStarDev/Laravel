@extends('Admin.master')
<?php $agent = auth()->user()->rollId == 0 ? "master" : \App\Agent::where('id',-1*auth()->user()->rollId)->first();  ?>
@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <h1 class="page-header"> سلام {{$agent->name ?? ""}}</h1>
        @if($agent != "master")
        <h3 class="title-content"> تعداد ثبتی ها ی شما تا این لحضه : {{$agent->registered_items}}</h3>
        @endif
        <hr>
        <h3>تغییر نام و نام کاربری</h3>
        <form action="{{route("admin.reset.pass")}}" method="post">
            @include("Admin.section.errors")
            @csrf
            <div class="form-group">
                <div class="col-sm-12">
                    <label for="buy" class="control-label">نام کاربری</label>
                    <input type="text" class="form-control" name="username"">
                </div>
            </div>
            <br>
            <div class="form-group">
                <div class="col-sm-12">
                    <label for="buy" class="control-label">گذرواژه</label>
                    <input class="form-control" type="text" name="password">
                </div>
            </div>
            <div class="col-sm-12">
            <button type="submit" class="btn btn-success">تغییر</button>
            </div>
        </form>
    </div>
@endsection
