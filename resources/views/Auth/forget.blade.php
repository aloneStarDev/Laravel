@include('template.header')
<form action="{{route('resetPassword')}}" method="POST">
    @csrf
    <label for="phone">لطفا شماره تماس را وارد کنید</label>
    <input type="text" id="phone" name="phonenumber" placeholder="phonenumber" />
    <input type="submit" value="send">
</form>
@include('template.footer')
