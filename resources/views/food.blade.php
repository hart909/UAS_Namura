<!-- ***** Menu Area Starts ***** -->
<section class="section" id="menu">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style>
        .add-cart-button {
            background-color: #4CAF50; /* Green background */
            border: none; /* Remove borders */
            color: white; /* White text */
            padding: 15px 32px; /* Some padding */
            text-align: center; /* Centered text */
            text-decoration: none; /* Remove underline */
            display: inline-block; /* Get it to display as a block */
            font-size: 16px; /* Increase font size */
            margin: 4px 2px; /* Some margin */
            cursor: pointer; /* Pointer/hand icon */
            border-radius: 12px; /* Rounded corners */
            transition-duration: 0.4s; /* 0.4 second transition effect to hover state */
        }
        
        .add-cart-button:hover {
            background-color: white; /* White background on hover */
            color: black; /* Black text on hover */
            border: 2px solid #4CAF50; /* Green border on hover */
        }
    </style>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6>Our Menu</h6>
                        <h2>Our selection of food, try the oriental taste</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <form action="{{url('/home')}}" method="get">
                    <input type="text" name="search" placeholder="Search here">
                    <button type="submit" class="btn " style="background-color: maroon; color: #ffffff; hover:background-color: #ffa500;"><i class="fa-solid fa-magnifying-glass"></i></button>
                  </form><br>
                  <p style="font-weight: bold;">Sort by price</p>
                  <form class="my-3" action="{{url('/home')}}" method="get">
                    <input type="number" name="min" placeholder="min. total price">
                    <span>-</span>
                    <input type="number" name="max" placeholder=" max. total price" style="background-color: #ffff; color: black;">
<button type="submit" class="btn" style="background-color: maroon; color: #ffffff; hover:background-color: #ffa500;"><li class="fa fa-filter"></li></button>
                  </form>
                  <div class="flex">
                  <form action="{{url('/home')}}" method="get">
                  <input type="hidden" name="sort" value="asc">
                  <button type="submit" class="btn " style="background-color: maroon; color: #ffffff; hover:background-color: #ffa500;"><i class="fa fa-sort"></i>Sort A-Z</button> 
                  </form>
                  <br>
                  <form action="{{url('/home')}}" method="get">
                    <input type="hidden" name="sort" value="desc">
                    <button type="submit" class="btn " style="background-color: maroon; color: #ffffff; hover:background-color: #ffa500;"><i class="fa fa-sort"></i>Sort Z-A</button>
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
                        <button type="submit" class="add-cart-button">
            <i class="fas fa-shopping-cart"></i> Add to Cart
        </button>
                    </div>

                    </form>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Menu Area Ends ***** -->
