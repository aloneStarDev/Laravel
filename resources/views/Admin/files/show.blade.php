@extends('Admin.master')
<style>
    li:hover{
        cursor: pointer;
    }
</style>
@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="page-header head-section">
            <h2>{{$file->title}}</h2>
        </div>
        <div>
            @include('Admin.section.errors')
            <div class="row">
                <label class="control-label">هزینه ی خرید</label>
                <div class="text-primary">{{ $file->buy }}</div>
            </div>
            <div class="row">
                <label class="control-label">هزینه ی رهن</label>
                <div class="text-primary">{{ $file->rahn }}</div>
            </div>

            <div class="row">
                <label class="control-label">هزینه ی اجاره </label>
                <div class="text-primary">{{ $file->ejare }}</div>
            </div>

            <div class="row">
                <label class="control-label">نام و نام خانوادگی مالک</label>
                <div class="text-primary">{{$file->lastname}} {{ $file->name }}</div>
            </div>
            <div class="row">
                <label class="control-label">نوع ساختمان</label>
                <div class="text-primary">@if($file->buildingType == 1) ویلایی @else آپارتمان @endif</div>
            </div>
            <div class="row">
                <label class="control-label">طبقه</label>
                <div class="text-primary">{{ $file->floor }}</div>
            </div>
            <div class="row">
                <label class="control-label">متراژ</label>
                <div class="text-primary">{{ $file->area }}</div>
            </div>
            <div class="row">
                <label class="control-label">سن بنا</label>
                <div class="text-primary">{{ $file->age }}</div>
            </div>
            <div class="row">
                <label class="control-label">تعداد واحد</label>
                <div class="text-primary">{{ $file->unit }}</div>
            </div>
            <div class="row">
                <label class="control-label">تعداد خواب</label>
                <div class="text-primary">{{ $file->bedroom }}</div>
            </div>
            <div class="row">
                <label class="control-label">منطقه</label>
                <div class="text-primary">{{ $file->region }}</div>
            </div>
            <div class="row">
                <label class="control-label">آدرس اصلی</label>
                <div class="text-primary">{{ $file->addressPu }}</div>
            </div>
            <div class="row">
                <label class="control-label">آدرس فرعی</label>
                <div class="text-primary">{{ $file->addressPv }}</div>
            </div>
            <div class="row">
                <label class="control-label">شماره تماس</label>
                <div class="text-primary">{{ $file->phonenumber }}</div>
            </div>
            <div class="row">
                <label class="control-label">جزئیات</label>
                <ul id="boolOption">

                </ul>

                <ul id="textOption">

                </ul>
            </div>
            <div class="row">
                <label class="control-label">توضیحات</label>
                <div class="text-primary">{{ $file->description }}</div>
            </div>

        </div>
    </div>
    <script>
        let options = JSON.parse(@json($file->options));
        if(options != null ){
            if(options.hasOwnProperty('options1'))
                options.options1.forEach(function (key) {
                    let keyset = Object.keys(key);
                    var node = document.createElement("LI");
                    node.id = keyset[0];
                    var textNode = document.createTextNode(keyset + " : " + (key[keyset] ? "دارد": "ندارد"));
                    node.appendChild(textNode);
                    document.getElementById("boolOption").appendChild(node);
                });
            if(options.hasOwnProperty('options2'))
                options.options2.forEach(function (key) {
                    let keyset = Object.keys(key);
                    var node = document.createElement("LI");
                    node.id = keyset[0];
                    var textNode = document.createTextNode(keyset + " : " + key[keyset] );
                    node.appendChild(textNode);
                    document.getElementById("textOption").appendChild(node);
                })
        }
    </script>
@endsection
