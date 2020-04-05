@extends('Admin.master')
<style>
    li:hover {
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
                    <input type="number" class="form-control" name="buy" id="buy" step="0.001" max="9999999"
                           placeholder="هزینه ی خرید کامل را  به میلیون وارد کنید" value="{{ old('buy') }}">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <label for="rahn" class="control-label">رهن</label>
                    <input type="number" class="form-control" name="rahn" id="rahn" step="0.001" max="9999999"
                           placeholder="هزینه ی رهن را  به میلیون وارد کنید" value="{{ old('rahn') }}">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <label for="ejare" class="control-label">اجاره</label>
                    <input type="number" class="form-control" name="ejare" id="ejare" step="0.001" max="9999999"
                           placeholder="هزینه ی اجاره را به میلیون وارد کنید" value="{{ old('ejare') }}">
                </div>
            </div>

            <div class="form-group req">
                <div class="col-sm-12">
                    <label for="name" class="control-label">نام</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="نام مالک را وارد کنید"
                           value="{{ old('name') }}">
                </div>
            </div>

            <div class="form-group req">
                <div class="col-sm-12">
                    <label for="lastname" class="control-label">نام خانوادگی</label>
                    <input type="text" class="form-control" name="lastname" id="lastname"
                           placeholder="نام خانوادگی  مالک را وارد کنید" value="{{old('lastname')}}">
                </div>
            </div>

            <div class="form-group req">
                <div class="col-sm-12">
                    <label for="buildingType" class="control-label">نوع ملک</label>
                    <select id="buildingType" name="buildingType" class="bootstrap-select">
                        <option value="0" selected hidden>نوع ملک</option>
                        @foreach(\App\File::$bulbing_type as $key => $val)
                            <option value={{$key}} > {{$val}} </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <label for="floor" class="control-label">طبقه</label>
                    <input type="number" class="form-control" name="floor" id="floor" placeholder="طبقه را وارد کنید"
                           value="{{ old('floor') ?? 1 }}">
                </div>
            </div>

            <div class="form-group req">
                <div class="col-sm-12">
                    <label for="area" class="control-label">متراژ</label>
                    <input type="number" class="form-control" name="area" id="area" placeholder="متراژ را وارد کنید"
                           value="{{ old('area') }}">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <label for="age" class="control-label">سن بنا</label>
                    <input type="number" class="form-control" name="age" id="age" placeholder="سن بنا را وارد کنید"
                           value="{{ old('age') }}">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <label for="unit" class="control-label">تعداد واحد</label>
                    <input type="number" class="form-control" name="unit" id="unit"
                           placeholder="تعداد واحد را وارد کنید" value="{{ old('unit') }}">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <label for="bedroom" class="control-label">تعداد خواب</label>
                    <input type="number" class="form-control" name="bedroom" id="bedroom"
                           placeholder="تعداد خواب را وارد کنید" value="{{ old('bedroom') }}">
                </div>
            </div>

            <div class="form-group req">
                <div class="col-sm-12">
                    <label for="region" class="control-label">منطقه</label>
                    <label for="region">منطقه ی شهرداری را انتخاب کنید</label>
                    <select class="form-control" name="region" id="region">
                        <option value="0" selected hidden>منطقه ی شهرداری</option>
                        @foreach(\App\File::$region_map as $key =>$val)
                            <option value="{{$key}}">{{$val}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group req">
                <div class="col-sm-12">
                    <label for="addressPu" class="control-label">آدرس اصلی</label>
                    <textarea rows="5" class="form-control" name="addressPu" id="addressPu"
                              placeholder="آدرس اصلی را وارد کنید">{{  old('addressPu') }}</textarea>
                </div>
            </div>

            <div class="form-group req">
                <div class="col-sm-12">
                    <label for="addressPv" class="control-label">آدرس فرعی</label>
                    <textarea rows="5" class="form-control" name="addressPv" id="addressPv"
                              placeholder="آدرس فرعی را وارد کنید">{{ old('addressPv') }}</textarea>
                </div>
            </div>

            <div class="form-group req">
                <div class="col-sm-12">
                    <label for="phonenumber" class="control-label">شماره تماس</label>
                    <input type="number" class="form-control" name="phonenumber" id="phonenumber"
                           placeholder="شماره تماس مالک را وارد کنید" value="{{ old('phonenumber') }}">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <label for="floorCovering" class="control-label">کفپوش</label>
                    <select class="form-control" name="floorCovering" id="floorCovering">
                        @foreach(\App\File::$floor_covering as $key =>$val)
                            <option value="{{$key}}">{{$val}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <label for="cabinet" class="control-label">کابینت</label>
                    <select class="form-control" name="cabinet" id="cabinet">
                        @foreach(\App\File::$cabinet_ as $key =>$val)
                            <option value="{{$key}}">{{$val}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <label for="floorCount" class="control-label">تعداد طبقات</label>
                    <input type="number" class="form-control" name="floorCount" id="floorCount"
                           placeholder="تعداد طبقات را وارد کنید" value="{{ old('floorCount') }}">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <label for="heating" class="control-label">گرمایش</label>
                    <select class="form-control" name="heating" id="heating">
                        @foreach(\App\File::$heating_ as $key =>$val)
                            <option value="{{$key}}">{{$val}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <label for="cooling" class="control-label">سرمایش</label>
                    <select class="form-control" name="cooling" id="cooling">
                        @foreach(\App\File::$cooling_ as $key =>$val)
                            <option value="{{$key}}">{{$val}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <label for="view" class="control-label">نما</label>
                    <select class="form-control" name="view" id="view">
                        @foreach(\App\File::$view_ as $key =>$val)
                            <option value="{{$key}}">{{$val}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <label for="document" class="control-label">سند</label>
                    <select class="form-control" name="document" id="document">
                        @foreach(\App\File::$document_ as $key =>$val)
                            <option value="{{$key}}">{{$val}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <label for="direction" class="control-label">جهت ملک</label>
                    <select class="form-control" name="direction" id="direction">
                        @foreach(\App\File::$direction_ as $key =>$val)
                            <option value="{{$key}}">{{$val}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <table class="table table-responsive">
                <tr class="table-row">
                    <td class="table-date">
                        <div class="form-inline">
                            <div class="col-sm-12">
                                <label for="parking" class="control-label">پارکینگ</label>
                                <input type="checkbox" class="checkbox-inline" name="parking" value="0"
                                       onclick="change(this)"
                                       id="parking">
                            </div>
                        </div>
                    </td>
                    <td class="table-date">
                        <div class="form-inline">
                            <div class="col-sm-12">
                                <label for="iphone" class="control-label">آیفون تصویری</label>
                                <input type="checkbox" class="checkbox-inline" name="iphone" value="0"
                                       onclick="change(this)"
                                       id="iphone">
                            </div>
                        </div>
                    </td>
                    <td class="table-date">
                        <div class="form-inline">
                            <div class="col-sm-12">
                                <label for="trace" class="control-label">تراس</label>
                                <input type="checkbox" class="checkbox-inline" name="trace" value="0"
                                       onclick="change(this)"
                                       id="trace">
                            </div>
                        </div>
                    </td>
                    <td class="table-date">
                        <div class="form-inline">
                            <div class="col-sm-12">
                                <label for="anbary" class="control-label">انباری</label>
                                <input type="checkbox" class="checkbox-inline" name="anbary" value="0"
                                       onclick="change(this)"
                                       id="anbary">
                            </div>
                        </div>
                    </td>
                    <td class="table-date">
                        <div class="form-inline">
                            <div class="col-sm-12">
                                <label for="edoor" class="control-label">درب برقی</label>
                                <input type="checkbox" class="checkbox-inline" name="edoor" value="0"
                                       onclick="change(this)"
                                       id="edoor">
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="table-row">
                    <td class="table-date">
                        <div class="form-inline">
                            <div class="col-sm-12">
                                <label for="wc" class="control-label">سرویس فرنگی</label>
                                <input type="checkbox" class="checkbox-inline" name="wc" value="0"
                                       onclick="change(this)"
                                       id="wc">
                            </div>
                        </div>
                    </td>
                    <td class="table-date">
                        <div class="form-inline">
                            <div class="col-sm-12">
                                <label for="hamam" class="control-label">حمام مستر</label>
                                <input type="checkbox" class="checkbox-inline" name="hamam" value="0"
                                       onclick="change(this)"
                                       id="hamam">
                            </div>
                        </div>
                    </td>
                    <td class="table-date">
                        <div class="form-inline">
                            <div class="col-sm-12">
                                <label for="komod" class="control-label">کمد دیواری</label>
                                <input type="checkbox" class="checkbox-inline" name="komod" value="0"
                                       onclick="change(this)"
                                       id="komod">
                            </div>
                        </div>
                    </td>
                    <td class="table-date">
                        <div class="form-inline">
                            <div class="col-sm-12">
                                <label for="gas" class="control-label">گاز روکار</label>
                                <input type="checkbox" class="checkbox-inline" name="gas" value="0"
                                       onclick="change(this)"
                                       id="gas">
                            </div>
                        </div>
                    </td>
                    <td class="table-date">
                        <div class="form-inline">
                            <div class="col-sm-12">
                                <label for="asansor" class="control-label">آسانسور</label>
                                <input type="checkbox" class="checkbox-inline" name="asansor" value="0"
                                       onclick="change(this)"
                                       id="asansor">
                            </div>
                        </div>
                    </td>
                </tr>
            </table>

            <div class="form-group">
                <div class="col-sm-12">
                    <label for="description" class="control-label">توضیحات</label>
                    <textarea rows="5" class="form-control" name="description" id="description"
                              placeholder="توضیحات را وارد کنید">{{ old('description') }}</textarea>
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
        function change(element)
        {
            element.value = 1-element.value;
        }
    </script>
@endsection
