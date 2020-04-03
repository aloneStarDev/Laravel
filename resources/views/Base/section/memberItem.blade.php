<div class="cell" @if($i % 3 == 1) style="margin-right:2%;" @endif >
    <img alt="house" src="../base/images/g5.jpg" class="house-image">
    <div class="card-content">
        <h3 class="card-h3">املاک {{$customers[$i]->office}}</h3>
        <p class="card-p">
            {{$customers[$i]->address}}

            {{$customers[$i]->explain}}
        </p>
        <a href="{{route('profile',$customers[$i]->id)}}">
            <button class="btn card-btn" style="margin-left:10%;">
                جزئیات
            </button>
        </a>
    </div>
</div>
