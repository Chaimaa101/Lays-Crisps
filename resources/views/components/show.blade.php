@props(['product'])
  <div class="grid-column">
          <div class="img">
            <img class="background" src="{{asset('storage/images/circlegreen1.svg')}}" alt="" />
           @if ($product->image)
        <img class="cheaps" src="{{asset('storage/'. $product->image ) }}" alt="">
        
        @else
        <img class="cheaps" src="{{asset('storage/images/default.jpg' ) }}" alt="">
        
        @endif

            <i class="ri-add-line plus"></i>
          </div>
          <div class="text-grid-column">
            <h3 class="price">{{$product->price}}</h3>
            <p class="p-normal">{{$product->name}}</p>
            <div class="stars">
              <i class="ri-star-fill"></i>
              <i class="ri-star-fill"></i>
              <i class="ri-star-fill"></i>
              <i class="ri-star-fill"></i>
              <i class="ri-star-fill"></i>
            </div>
          </div>
        </div>