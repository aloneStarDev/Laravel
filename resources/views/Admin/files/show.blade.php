@extends('Admin.master')
<style>
    li:hover{
        cursor: pointer;
    }
</style>
@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="page-header head-section">
            <h2>نمایش</h2>
        </div>
        <div>
            @include('Admin.section.errors')
            @if($file->buy != null)
            <div class="row">
                <label class="control-label">هزینه ی خرید</label>
                <div class="text-primary"> {{\App\File::floatPrice($file->buy)}} </div>
            </div>
            @endif
            @if($file->rahn != null)
            <div class="row">
                <label class="control-label">هزینه ی رهن</label>
                <div class="text-primary">{{\App\File::floatPrice($file->rahn)}}</div>
            </div>
            @endif
            @if($file->ejare != null)
            <div class="row">
                <label class="control-label">هزینه ی اجاره </label>
                <div class="text-primary">{{\App\File::floatPrice($file->ejare)}}</div>
            </div>
            @endif

            <div class="row">
                <label class="control-label">نام و نام خانوادگی مالک</label>
                <div class="text-primary">{{$file->name}} {{ $file->lastname }}</div>
            </div>
            <div class="row">
                <label class="control-label">نوع ساختمان</label>
                <div class="text-primary">{{\App\File::$bulbing_type[$file->buildingType]}}</div>
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
                <div class="text-primary">{{ \App\File::$region_map[$file->region] }}</div>
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
            @if($file->floorCovering != 0)
            <div class="row">
                <label for="floorCovering" class="control-label">کفپوش</label>
                <div class="text-primary" id="floorCovering">{{ \App\File::$floor_covering[$file->floorCovering] }}</div>
            </div>
            @endif
            @if($file->cabinet != 0)
                <div class="row">
                    <label for="cabinet" class="control-label">کابینت</label>
                    <div class="text-primary" id="cabinet">{{ \App\File::$cabinet_[$file->cabinet] }}</div>
                </div>
            @endif
            @if($file->floorCount != null)
                <div class="row">
                    <label for="floorCount" class="control-label">تعداد طبقات</label>
                    <div class="text-primary" id="floorCount">{{ $file->floorCount }}</div>
                </div>
            @endif
            @if($file->heating != 0)
                <div class="row">
                    <label for="heating" class="control-label">گرمایش</label>
                    <div class="text-primary" id="heating">{{ \App\File::$heating_[$file->heating] }}</div>
                </div>
            @endif
            @if($file->cooling != 0)
                <div class="row">
                    <label for="cooling" class="control-label">سرمایش</label>
                    <div class="text-primary" id="cooling">{{ \App\File::$heating_[$file->cooling] }}</div>
                </div>
            @endif
            @if($file->view != 0)
                <div class="row">
                    <label for="view" class="control-label">نما</label>
                    <div class="text-primary" id="view">{{ \App\File::$view_[$file->view] }}</div>
                </div>
            @endif
            @if($file->document != 0)
                <div class="row">
                    <label for="document" class="control-label">سند</label>
                    <div class="text-primary" id="document">{{ \App\File::$document_[$file->document] }}</div>
                </div>
            @endif
            @if($file->description != null)
            <div class="row">
                <label class="control-label">توضیحات</label>
                <div class="text-primary">{{ $file->description }}</div>
            </div>
            @endif
            <div class="form-group">
                <div class="col-sm-12">
                    <a href="{{route("files.index")}}" class="btn btn-danger">بازگشت</a>
                </div>
            </div>
        </div>
    </div>
@endsection
