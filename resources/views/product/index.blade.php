
   
  <x-header>

    <section class="container">
      <h2 class="h2">
        We provide the testy and <br />
        the best chips for you !
      </h2>
      <img class="chips" src="{{asset('storage/images/COVER1.jpg')}}" alt="" />
      <div class="section1">
        <div class="left">
          <div class="container-chips">
            <img src="{{asset('storage/images/sircleroze.svg')}}" alt="" />
            <img class="cheaps-purple" src="{{asset('storage/images/cheaospurple.svg')}}" alt="" />
          </div>
        </div>
        <div class="right">
          <h3 class="h3">LAY'S &reg; BLT Flavored</h3>
          <div class="stars">
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
          </div>
          <p class="p-normal">Price</p>
          <h3 class="price">$3.93</h3>
          <p class="p-normal">
            It all starts with farm-grown potatoes, cooked and seasoned to
            perfection. Then we add the sweet taste of honey and the spicy kick
            of BBQ sauce. So every LAY'S potato chip is perfectly crispy and
            delicious. Happiness in Every Bite.
          </p>
          <div class="botton">
            <a href="#" class="botton2">Buy Now</a>
            <a href="#">See More <i class="ri-arrow-right-line"></i></a>
          </div>
        </div>
      </div>
    </section>
    <section class="section2 container">
      <h2 class="h2">find best taste here</h2>
      <p class="p1">
        Feel the best and awesome taste with Lays Crisps. There has been various
        kind of Crisps you can eat and feel
      </p>
      <div class="grid">
    
    @foreach ($products as $product)
        <x-show :product="$product"></x-show>
    @endforeach

      </div>
      <a href="#" class="botton1">All Crisps</a>
    </section>

    <section id="videos" class="section3 container">
      <h2 class="h2">Our popular Crisps</h2>
      <div class="root">
        <div class="section3-left">
          <div class="img">
            <img class="background" src="{{asset('storage/images/circlegreen2.svg')}}" alt="" />
            <img class="cheaps" src="{{asset('storage/images/P2.svg')}}" alt="" />
          </div>
          <div class="text-grid-column">
            <h3 class="h3-Semi">LAY’S® Wavy Ondulees Salt & Vinegar</h3>
            <p class="p-normal">
              <i class="ri-play-circle-fill play"></i> Play Video
            </p>
          </div>
        </div>
        <div class="section3-left">
          <div class="img">
            <img class="background" src="{{asset('storage/images/circlered2.svg')}}" alt="" />
            <img class="cheaps" src="{{asset('storage/images/cheapsred2.svg')}}" alt="" />
          </div>
          <div class="text-grid-column">
            <h3 class="h3-Semi">LAY’S® Wavy Ondulees Salt & Vinegar</h3>
            <p class="p-normal">
              <i class="ri-play-circle-fill play"></i> Play Video
            </p>
          </div>
        </div>
      </div>
    </section>
    <section id="" class="section4">
      <div class="container">
        <div class="section-left">
          <h2 class="h2">What’s Our Customer say</h2>
          <p class="p-inter">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
            ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat.
          </p>
          <div class="blue-line"></div>
          <div>
            <div class="name-year">
              <p class="h3-Semi">Younes Kadeww</p>
              <p class="p-normal">21 years old</p>
            </div>
            <div class="stars">
              <i class="ri-star-fill"></i>
              <i class="ri-star-fill"></i>
              <i class="ri-star-fill"></i>
              <i class="ri-star-fill"></i>
              <i class="ri-star-fill"></i>
            </div>
          </div>
        </div>
        <div class="section-right">
          <div>
            <img class="sircle" src="{{asset('storage/images/circleyellowphoto.svg')}}" alt="" />
            <img class="photo" src="{{asset('storage/images/girl.avif')}}" alt="" />
          </div>
        </div>
      </div>
    </section>
    <section id="where" class="section5">
      <img src="{{asset('storage/images/cheapsbackground.svg')}}" alt="" />
      <div class="container">
        <h2 class="h2">
          Find a crisps store <br />
          near you
        </h2>
        <p class="p1">
          Feel the best and awesome taste with Lays Crisps. There <br />has been
          various kind of Crisps you can eat and feel.
        </p>
        <a href="#" class="botton1">Find Store</a>
      </div>
    </section>

  </x-header>