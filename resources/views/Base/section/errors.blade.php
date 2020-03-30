
<div id="err">
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li style="text-align: right">{{ $error }}</li>
            @endforeach
        </ul>
    @endif
</div>
@if($errors->has("login") || $errors->has("passWord") || $errors->has("userName") || $errors->has("username") || $errors->has("password") || $errors->has("phonenumber") || $errors->has("code"))
<script>
    $("#err").addClass("alert alert-danger");
    $(".pop-parent").show();
    $(".pop1").show();
</script>
@endif
