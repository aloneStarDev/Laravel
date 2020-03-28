@include('template.header')
<form action="{{route('verify')}}" method="post">
    @csrf
    <input type="text" name="verify" placeholder="ActivationCode" />
    <input type="submit" value="send">
</form>
@include('template.footer')
