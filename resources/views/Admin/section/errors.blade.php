@if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li dir="ltr" style="text-align: left">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
