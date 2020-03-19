@include('template.header')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="container">
	<div class="row">
		<form action="{{route('register')}}" method="POST">
			@csrf
			<input type="text" name="name" class="@error('name') alert alert-danger @enderror" placeholder="name"/>
			<input type="text" name="lastname" class="@error('lastname') alert alert-danger @enderror" placeholder="lastname"/>
			<input type="text" id="phonenumber" name="phonenumber" class="@error('phonenumber') alert alert-danger @enderror" placeholder="phonenumber"/>
			<input type="number" name="region" class="@error('region') alert alert-danger @enderror" placeholder="region"/>
			<textarea type="text" name="address" class="@error('address') alert alert-danger @enderror" placeholder="address"></textarea>
            <button type="submit">send</button>
        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
<form id="reg" action="https://raygansms.com/AutoSendCode.ashx" method="get">
    <input type="hidden" name="Username" value="Amlakonlin"/>
    <input type="hidden" name="Password" value="8689811"/>
    <input type="hidden" name="Mobile" value="09304437493"/>
    <button type="submit">ffff</button>
</form>
<script>
    function send() {
       document.getElementById("reg").submit();
    }
</script>
@include('template.footer')
