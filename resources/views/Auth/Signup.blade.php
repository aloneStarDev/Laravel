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
			<input type="text" name="name" placeholder="name"/>
			<input type="text" name="lastname" placeholder="lastname"/>
			<input type="text" name="phonenumber" placeholder="phonenumber"/>
			<input type="text" name="region" placeholder="region"/>
			<input type="number" name="password" placeholder="password"/>
			<textarea type="text" name="adress" placeholder="adress"></textarea>
			<input type="submit" name="submit"/>
		</form>	
	</div>
</div>
@include('template.footer')