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
			<input type="text" name="phonenumber" class="@error('phonenumber') alert alert-danger @enderror" placeholder="phonenumber"/>
			<input type="number" name="region" class="@error('region') alert alert-danger @enderror" placeholder="region"/>
			<input type="text" name="password" class="@error('password') alert alert-danger @enderror" placeholder="password"/>
			<textarea type="text" name="address" class="@error('address') alert alert-danger @enderror" placeholder="address"></textarea>
			<input type="submit" name="submit"/>
		</form>
	</div>
</div>
@include('template.footer')
