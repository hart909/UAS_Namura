<br><br><section class="section" id="testimonial">
    <style>
        .card {
  border: none;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  transition: transform 0.3s ease;
}

.card:hover {
  transform: translateY(-10px);
}

.card-img-top {
  position: relative;
  overflow: hidden;
}

.card-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.6);
  display: flex;
  justify-content: center;
  align-items: center;
  opacity: 0;
  transition: opacity 0.3s ease;
}

.card:hover .card-overlay {
  opacity: 1;
}

.social-icons {
  display: flex;
  justify-content: center;
  align-items: center;
}

.social-icons a {
  color: #fff;
  font-size: 24px;
  margin: 0 10px;
  transition: transform 0.3s ease;
}

.social-icons a:hover {
  transform: scale(1.2);
}

.card-body {
  padding: 20px;
  text-align: center;
}

.card-title {
  font-size: 18px;
  font-weight: bold;
  margin-bottom: 10px;
}

.card-text {
  font-size: 14px;
  color: #666;
}
    </style>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 offset-lg-4 text-center">
        <div class="section-heading">
          <h6>Our Testimonial</h6>
          <h2>Here our Customer Story with Us</h2>
        </div>
      </div>
    </div>

    <div class="row">
      @foreach($data3 as $data3)
      <div class="col-lg-4 mb-4">
        <div class="card">
          <div class="card-img-top">
            <img src="testimonialimage/{{ $data3->image }}" alt="Testimonial #1" class="img-fluid">
            <div class="card-overlay">
              <div class="social-icons">
                <a href="#reservation" class="scroll-to-section"><i class="fa fa-arrow-down"></i></a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <h4 class="card-title">{{ $data3->title }}</h4>
            <p class="card-text">{{ $data3->description }}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>