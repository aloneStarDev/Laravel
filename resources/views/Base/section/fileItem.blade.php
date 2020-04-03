<div class="cell" @if($i % 3 == 1) style="margin-right:2%;" @endif >
    <img alt="house" src="../base/images/city_illustrations_empire_state_building_2x.png"
         class="house-image">
    <h3 class="cell-h3">
        {{ \App\File::$bulbing_type[$files[$i]->buildingType] }}  {{$files[$i]->area}}متری
    </h3>
    <div class="cell-content">
      <span class="cell-type">
      <i class="fas fa-home"></i>
        {{ \App\File::$bulbing_type[$files[$i]->buildingType] }}
      </span>
        <span class="cell-metre">
      <i class="fas fa-expand"></i>
      متر {{$files[$i]->area}}
      </span>
        <span class="cell-beds">
      <i class="fas fa-bed"></i>
      {{$files[$i]->bedroom}} خوابه
      </span>
        <span class="cell-address">
      <i class="fas fa-map-marker-alt"></i>
      {{$files[$i]->addressPu}}
      </span>
        @if($files[$i]->rahn != null)
            <span class="cell-year">
      رهن : {{ \App\File::floatPrice($files[$i]->rahn)}}
      </span>
        @else
            @if($files[$i]->ejare != null)
                <span class="cell-month">
          اجاره: {{ \App\File::floatPrice($files[$i]->ejare)}}
          </span>
            @endif
            @if($files[$i]->buy != null)
                <span class="cell-month">
          خرید: {{ \App\File::floatPrice($files[$i]->buy)}}
          </span>
            @endif
        @endif
        <a href="{{route("info",$files[$i]->id)}}">
            <button class="btn cell-btn" style="margin-left:10%;">
                جزئیات
            </button>
        </a>
        <a href="tel:09304437593">
            <button class="btn cell-btn">
                تماس
                <i class="fas fa-phone"></i>
            </button>
        </a>
    </div>
</div>
