@include('template.header')
<form action="{{@route('resetPassword')}}" method="post">
    @csrf
    <label for="phone">لطفا کد تایید را وارد کنید</label>
    <input type="text" name="verify" placeholder="ActivationCode" />
    <label for="phone">لطفا رمز تایید را وارد کنید</label>
    <input type="text" name="password" placeholder="password" />
    <input type="submit" value="send">
</form>
@include('template.footer')
