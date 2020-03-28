<div class="form-group">
<form action="{{route('find')}}" method="post">
    @csrf
    <select id="type" name="key" class="bootstrap-select" onchange="filter()">
        <option value="0">کد فایل</option>
        <option value="1">عنوان</option>
        <option value="2">هزینه ی خرید</option>
        <option value="3">هزینه ی رهن کامل</option>
        <option value="4">هزینه ی اجاره کامل</option>
        <option value="5">هزینه ی رهن و اجاره</option>
        <option value="6">نام یا نام خانوادگی مالک</option>
        <option value="7">نوع ساختمان</option>
        <option value="8">منطقه شهرداری</option>
        <option value="9">طبقه</option>
        <option value="10">متراژ</option>
        <option value="11">سن بنا</option>
        <option value="12">تعداد واحد</option>
        <option value="13">تعداد خواب</option>
        <option value="14">آدرس</option>
        <option value="15">شماره تماس</option>
        <option value="16">ثبت شده توسط</option>
    </select>
    <select name="buildingType" id="buildingType">
        <option value="2">آپارتمان</option>
        <option value="1">ویلایی</option>
    </select>
    <input type="number" class="form-control" name="valNum" id="valNum"/>
    <input type="number" class="form-control" name="valTel" id="valTel" placeholder="تلورانس"/>
    <input type="number" class="form-control" name="valE" id="valE" placeholder="رهن"/>
    <input type="number" class="form-control" name="valR" id="valR" placeholder="اجاره"/>
    <input type="text" class="form-control" name="valStr" id="valStr"/>
    <input type="submit" class="form-control" value="find"/>
</form>
</div>
<script>
    let numericval = ["0","2","3","4","5","8","9","10","11","12","13"];
    let usetel = ["2","3","4","5","10","11"];
    document.body.onloadend = new function(){
        $("#valStr").hide();
        $("#buildingType").hide();
        $("#valTel").hide();
        $("#valE").hide();
        $("#valR").hide();
    };
    function filter() {
        let opt = $("#type").val();
        $("#valNum").hide();
        $("#valStr").hide();
        $("#buildingType").hide();
        $("#valTel").hide();
        $("#valE").hide();
        $("#valR").hide();
        if(usetel.includes(opt))
            $("#valTel").show();
        if(opt == 5){
            $("#valE").show();
            $("#valR").show();
        }else if(numericval.includes(opt)){
            $("#valNum").show();
            $("#valNum").prop("placeholder",$("#type option:selected").text());
        }else if(opt == 7){
            $("#buildingType").show();
        }else{
            $("#valStr").show();
            $("#valStr").prop("placeholder",$("#type option:selected").text());
       }
    }
</script>
