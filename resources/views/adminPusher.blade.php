<script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('33af827e4f25e7e5e659', {
      cluster: 'ap1'
    });

    var channel = pusher.subscribe('admin-channel');
    channel.bind('reservation', function(data) {
        // alert(JSON.stringify(data.name))
        toastr.success("Reservasi baru telah dibuat oleh user");
    });
  </script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
