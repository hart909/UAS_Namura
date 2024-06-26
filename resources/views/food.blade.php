<!-- ***** Menu Area Starts ***** -->
<section class="section" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6>Our Menu</h6>
                        <h2>Our selection of cakes with quality taste</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <form action="{{url('/home')}}" method="get">
                    <input type="text" name="search">
                    <button type="submit" class="btn bg-orange-600 text-white hover:bg-orange-500">Search</button>
                  </form>

                  <form class="my-3" action="{{url('/home')}}" method="get">
                    <input type="number" name="min" placeholder="min. total price">
                    <span>-</span>
                    <input type="number" name="max" placeholder=" max. total price">
                    <button type="submit" class="btn bg-orange-600 text-white hover:bg-orange-500">Filter</button>
                  </form>
                  <div class="flex">
                  <form action="{{url('/home')}}" method="get">
                    <input type="hidden" name="sort" value="asc">
                    <button type="submit" class="btn bg-orange-600 text-white hover:bg-orange-500 mr-3">Sort A-Z</button>
                  </form>
                  <form action="{{url('/home')}}" method="get">
                    <input type="hidden" name="sort" value="desc">
                    <button type="submit" class="btn bg-orange-600 text-white hover:bg-orange-500 mb-3">Sort Z-A</button>
                  </form>
                </div>
                <div class="owl-menu-item owl-carousel">

                @foreach($data as $data)
                <form action="{{url('/addcart',$data->id)}}" method="post">
                @csrf
                <div class="item">
                        <div style="background-image: url('/foodimage/{{$data->image}}');"class='card '>
                            <div class="price"><h6>{{$data->price}}</h6></div>
                            <div class='info'>
                              <h1 class='title'>{{$data->title}}</h1>
                              <p class='description'>{{$data->description}}</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>

                        <input type="number" name="quantity" min="1" value="1"style="width: 80px;">
                        <input type="submit" value="add cart">
                    </div>

                    </form>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Menu Area Ends ***** -->
