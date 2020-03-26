@extends('Admin.master')
<?php $agent = auth()->user()->rollId == 0 ? "master" : \App\Agent::where('id',-1*auth()->user()->rollId)->first();  ?>
@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <h1 class="page-header"> سلام {{$agent->name ?? ""}}</h1>
        @if($agent != "master")
        <h3 class="title-content"> تعداد ثبتی ها ی شما تا این لحضه : {{$agent->registered_items}}</h3>
        @endif
    </div>
@endsection
