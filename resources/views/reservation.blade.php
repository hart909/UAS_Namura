<!-- ***** Reservation Us Area Starts ***** -->
<section class="section" id="reservation">
  {{--CSS--}}
  <style>
    .reservation-container {
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      align-items: flex-start;
      padding: 20px;
    }

    .reservation-container .left-content,
    .reservation-container .right-form {
      width: 48%;
    }

    .reservation-container .right-form form {
      display: flex;
      flex-wrap: wrap;
    }

    .reservation-container .right-form form .form-group {
      width: 48%;
      margin: 1%;
    }

    .reservation-container .right-form form .form-group.full-width {
      width: 98%;
    }

    .reservation-container .right-form form button {
      width: 100%;
      background-color: #8b0000;
      color: #fff;
      border: none;
      padding: 10px 0;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .reservation-container .right-form form button:hover {
      background-color: #a52a2a;
    }
  </style>
  {{--Sweet Alert--}}
  @if (session('success'))
  <script>
    Swal.fire({
      icon: 'success',
      title: 'Berhasil!',
      text: '{{ session('success') }}',
      timer: 3000,
      showConfirmButton: false
    });
  </script>
  @endif
  <div class="container reservation-container">
    <div class="left-content">
      <div class="section-heading">
        <h6>Our Reservation</h6>
        <h2>If you are willing to have our menu in huge number, you can reserved our package first!</h2>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <div class="phone">
            <i class="fa fa-phone"></i>
            <h4>Phone Numbers</h4>
            <span><a href="#">080-090-0990</a><br><a href="#">080-090-0880</a></span>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="message">
            <i class="fa fa-envelope"></i>
            <h4>Emails</h4>
            <span><a href="#">hello@company.com</a><br><a href="#">info@company.com</a></span>
          </div>
        </div>
      </div>
    </div>
    <div class="right-form">
      <form id="contact" action="{{url('reservation')}}" method="post">
        @csrf
        <div class="form-group full-width">
          <h4>Reservation</h4>
        </div>
        <div class="form-group">
          <input name="name" type="text" id="name" placeholder="Your Name*" required="">
        </div>
        <div class="form-group">
          <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" required="">
        </div>
        <div class="form-group">
          <input name="phone" type="text" id="phone" placeholder="Phone Number*" required="">
        </div>
        <div class="form-group">
          <select name="packet">
            <option value="">Select your packet</option>
            @foreach($data2 as $packet)
            <option value="{{$packet->name}}">{{$packet->name}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <div id="filterDate2">
            <div class="input-group date" data-date-format="dd/mm/yyyy">
              <input name="date" id="date" type="text" class="form-control" placeholder="dd/mm/yyyy">
              <div class="input-group-addon">
                <span class="glyphicon glyphicon-th"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="form-group">
          <input type="time" name="Time of Take Order">
        </div>
        <div class="form-group full-width">
          <textarea name="message" rows="6" id="message" placeholder="Message" required=""></textarea>
        </div>
        <div class="form-group full-width">
          <button type="submit" id="form-submit" class="main-button-icon">Make A Reservation</button>
        </div>
      </form>
    </div>
  </div>
</section>
<!-- ***** Reservation Area Ends ***** -->

{{-- Script tetap di halaman --}}
<script type="text/javascript">
  $(window).scroll(function () {
    sessionStorage.scrollTop = $(this).scrollTop();
  });

  $(document).ready(function () {
    if (sessionStorage.scrollTop != "undefined") {
      $(window).scrollTop(sessionStorage.scrollTop);
    }
  });
</script>
