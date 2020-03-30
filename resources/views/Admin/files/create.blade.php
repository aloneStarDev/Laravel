@extends('Admin.master')
<style>
    li:hover{
        cursor: pointer;
    }
</style>
@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="page-header head-section">
            <h2>ایجاد فایل</h2>
        </div>
        @include('Admin.section.errors')
        <form class="form-horizontal" action="{{ route('files.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <div class="col-sm-12">
                    <label for="buy" class="control-label">خرید</label>
                    <input type="number" class="form-control" name="buy" id="buy" step="0.001" placeholder="هزینه ی خرید کامل را  به میلیون وارد کنید" value="{{ old('buy') }}">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <label for="rahn" class="control-label">رهن</label>
                    <input type="number" class="form-control" name="rahn" id="rahn" step="0.001" placeholder="هزینه ی رهن را  به میلیون وارد کنید" value="{{ old('rahn') }}">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <label for="ejare" class="control-label">اجاره</label>
                    <input type="number" class="form-control" name="ejare" id="ejare" step="0.001" placeholder="هزینه ی اجاره را به میلیون وارد کنید" value="{{ old('ejare') }}">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <label for="name" class="control-label">نام</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="نام مالک را وارد کنید" value="{{ old('name') }}">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <label for="lastname" class="control-label">نام خانوادگی</label>
                    <input type="text" class="form-control" name="lastname" id="lastname" placeholder="نام خانوادگی  مالک را وارد کنید" value="{{old('lastname')}}">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <label for="buildingType" class="control-label">نوع ساختمان</label>
                    <select id = "buildingType" name="buildingType" class="bootstrap-select">
                        @foreach(\App\File::$bulbing_type as $key => $val)
                        <option value ={{$key}} > {{$val}} </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <label for="floor" class="control-label">طبقه</label>
                    <input type="number" class="form-control" name="floor" id="floor" placeholder="طبقه را وارد کنید" value="{{ old('floor') }}">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <label for="area" class="control-label">متراژ</label>
                    <input type="number" class="form-control" name="area" id="area" placeholder="متراژ را وارد کنید" value="{{ old('area') }}">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <label for="age" class="control-label">سن بنا</label>
                    <input type="number" class="form-control" name="age" id="age" placeholder="سن بنا را وارد کنید" value="{{ old('age') }}">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <label for="unit" class="control-label">تعداد واحد</label>
                    <input type="number" class="form-control" name="unit" id="unit" placeholder="تعداد واحد را وارد کنید" value="{{ old('unit') }}">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <label for="bedroom" class="control-label">تعداد خواب</label>
                    <input type="number" class="form-control" name="bedroom" id="bedroom" placeholder="تعداد خواب را وارد کنید" value="{{ old('bedroom') }}">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <label for="region" class="control-label">منطقه</label>
                    <label for="region">منطقه ی شهرداری را انتخاب کنید</label>
                    <select class="form-control" name="region" id="region">
                        @foreach(\App\File::$region_map as $key =>$val)
                            <option value="{{$key}}">{{$val}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <label for="addressPu" class="control-label">آدرس اصلی</label>
                    <textarea rows="5" class="form-control" name="addressPu" id="addressPu" placeholder="آدرس اصلی را وارد کنید">{{  old('addressPu') }}</textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <label for="addressPv" class="control-label">آدرس فرعی</label>
                    <textarea rows="5" class="form-control" name="addressPv" id="addressPv" placeholder="آدرس فرعی را وارد کنید">{{ old('addressPv') }}</textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <label for="phonenumber" class="control-label">شماره تماس</label>
                    <input type="number" class="form-control" name="phonenumber" id="phonenumber" placeholder="شماره تماس مالک را وارد کنید" value="{{ old('phonenumber') }}">
                </div>
            </div>
            <hr/>
            <div class="form-group">
                <label for="optionType">
                     ویژگی ها
                </label>
                <div class="col-sm-12">
                    <select id="optionType" onchange="changeOptionType()">
                        <option value="1">گزینه ای</option>
                        <option value="2">توضیحات</option>
                    </select>
                    <input type="text" id="optionInput"/> :
                    <input type="checkbox" id="optionValue1"/>
                    <input type="text" id="optionValue2"/>
                    <button type="button" onclick="addOption()">اضافه کردن ویژگی</button>
                </div>
            </div>
            <ul id="boolOption">

            </ul>
            <hr/>
            <ul id="textOption">

            </ul>
            <input type="hidden" name="options" id="options" value="{{ old('options') }}">

            <div class="form-group">
                <div class="col-sm-12">
                    <label for="description" class="control-label">توضیحات</label>
                    <textarea rows="5" class="form-control" name="description" id="description" placeholder="توضیحات را وارد کنید">{{ old('description') }}</textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-success">ارسال</button>

                    <a href="{{route("files.index")}}" class="btn btn-danger">بازگشت</a>
                </div>
            </div>

        </form>
    </div>
    <script>
        let optionType = $("#optionType").find(":selected").val();
        $("#optionValue2").hide();
        let options = {
            options1:[],
            options2:[]
        };
        document.querySelector('body').addEventListener('click', removeOption);

        function removeOption(event) {
            if (event.target.tagName.toLowerCase() === 'li') {
                let number = -1 ;
                let counter = 0;
                options.options1.forEach(function (key) {
                    if(key.hasOwnProperty(event.target.id)){
                        number = counter;
                        delete key[event.target.id];
                    }
                    counter++;
                });
                if(number >= 0)
                    options.options1.splice(number,1);

                number = -1;
                counter = 0;

                options.options2.forEach(function (key) {
                    if(key.hasOwnProperty(event.target.id)){
                        number = counter;
                        delete key[event.target.id];
                    }
                    counter++;
                });
                if(number >= 0)
                    options.options2.splice(number,1);
                document.getElementById(event.target.id).remove();
                $("#options").val(JSON.stringify(options));
            }
        }

        function addOption() {
            try {
                let option = {};
                let optionName = $("#optionInput").val();

                switch (optionType) {
                    case "1":
                        option[optionName] = $("#optionValue1").is(":checked");
                        options.options1.push(option);
                        var node = document.createElement("LI");
                        node.id = optionName;
                        var textNode = document.createTextNode(optionName + " : " + (option[optionName] ? "دارد": "ندارد"));
                        node.appendChild(textNode);
                        document.getElementById("boolOption").appendChild(node);
                        break;
                    case "2":
                        option[optionName] = $("#optionValue2").val();
                        options.options2.push(option);
                        var node = document.createElement("LI");
                        node.id = optionName;
                        var textNode = document.createTextNode(optionName + " : " + option[optionName]);
                        node.appendChild(textNode);
                        document.getElementById("textOption").appendChild(node);
                        break;
                }
                $("#options").val(JSON.stringify(options));
            }catch(err){
                console.error(err);
            }
        }
        function changeOptionType() {
            optionType = $("#optionType").find(":selected").val();
            switch (optionType) {
                case "1":
                    $('#optionValue2').hide();
                    $('#optionValue1').show();
                    break;
                case "2":
                    $('#optionValue2').show();
                    $('#optionValue1').hide();
                    break;
            }
        }
    </script>
@endsection
