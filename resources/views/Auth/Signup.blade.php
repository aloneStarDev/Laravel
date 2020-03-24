@include('template.header')

<div class="container">
	<div class="row">
		<form action="{{route('register')}}" method="POST">
			@csrf
            <div class="form-group">
                <input dir="rtl" type="text" name="name" class="form-control @error('name') alert alert-danger @enderror" placeholder="name"/>
            </div>
            <div class="form-group">
                <input dir="rtl" type="text" name="lastname" class="form-control @error('lastname') alert alert-danger @enderror" placeholder="lastname"/>
            </div>
            <div class="form-group">
                <input dir="rtl" type="text" id="phonenumber" name="phonenumber" class="form-control @error('phonenumber') alert alert-danger @enderror" placeholder="phonenumber"/>
            </div>
            <div class="form-group">
                <input dir="rtl" type="number" name="region" class="form-control @error('region') alert alert-danger @enderror" placeholder="region"/>
            </div>
            <div class="form-group">
                <textarea dir="rtl" type="text" name="address" class="form-control @error('address') alert alert-danger @enderror" placeholder="address"></textarea>
            </div>
            <div class="form-group">
                <span for="call">این شماره ی برای نمایش به مشتری است در صورتی که این فیلد را پر نکنید شماره ی همراه به کاربران نمایش داده می شود</span>
                <input id="call" dir="rtl" type="text" name="call" class="form-control @error('call') alert alert-danger @enderror" placeholder="call"/>
            </div>
            <button type="submit" class="btn btn-primary form-control">send</button>
        </form>
    </div>
</div>

@include('template.footer')
