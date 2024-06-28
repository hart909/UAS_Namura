{{--CSS--}}
<style>
    .contact-section {
  padding: 80px 0;
  background-color: #f8f8f8;
}

.contact-container {
  max-width: 800px;
  margin: 0 auto;
  padding: 0 20px;
}

.contact-title {
  text-align: center;
  margin-bottom: 40px;
  font-size: 32px;
  font-weight: 600;
  color: #333;
}

.contact-form {
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-gap: 30px;
}

.form-group {
  display: flex;
  flex-direction: column;
}

.form-group label {
  font-size: 16px;
  font-weight: 500;
  color: #555;
  margin-bottom: 8px;
}

.form-group input,
.form-group textarea {
  padding: 12px 16px;
  border: 1px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  color: #333;
}

.form-group textarea {
  resize: vertical;
}

.submit-btn {
  grid-column: 1 / -1;
  justify-self: center;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 4px;
  padding: 12px 24px;
  font-size: 16px;
  font-weight: 500;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.submit-btn:hover {
  background-color: #0056b3;
}
</style>
{{--ISI FORM--}}
<section class="contact-section">
  <div class="contact-container">
    <h2 class="contact-title">Contact Us</h2>
    <form class="contact-form" action="{{url('contact')}}" method="Post">

    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Terkirim!',
                text: '{{ session('success') }}',
                timer: 5000,
                showConfirmButton: false
            });
        </script>
    @endif
        @csrf

      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="number" id="phone" name="phone" required>
      </div>
      <div class="form-group">
        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="5" required></textarea>
      </div>
      <button type="submit" class="send_btn">Send Message</button>
    </form>
  </div>
</section>

{{--Script untuk tetap di halaman--}}
    <script type="text/javascript"> 
   $(window).scroll(function() {
  sessionStorage.scrollTop = $(this).scrollTop();
});

$(document).ready(function(){
   if(sessionStorage.scrollTop != "undefined"){
      $(window).scrollTop(sessionStorage.scrollTop);
   }
});
   </script>