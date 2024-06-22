<section class="section" id="packets">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Our Packets</h6>
                        <h2>We offer several packets suitable for your events</h2>
                    </div>
                </div>
            </div>

            @foreach($data2 as $data2)
            <div class="row">
                <div class="col-lg-4">
                    <div class="packet-item">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <ul class="social-icons">
                                <li class="scroll-to-section"><a href="#reservation">↓</i></a></li>

                            </ul>
                            <img src="packetimage/{{$data2->image}}" alt="Packet #1">
                        </div>
                        <div class="down-content">
                            <h4>{{$data2->name}}</h4>
                            <span>{{$data2->description}}</span>
                        </div>
                    </div>
                </div>
               @endforeach
            </div>
        </div>
    </section>