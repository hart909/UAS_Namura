<!DOCTYPE html>
<html lang="en">

<head>
  <ul>
    <x-app-layout>
    </x-app-layout>
  </ul>

  @include("admin.admincss")
  <style>
    .table-container {
      margin: 20px auto;
      max-width: 800px; /* Menentukan lebar maksimal tabel */
      width: 90%; /* Lebar tabel disesuaikan dengan ukuran layar */
      overflow-x: auto; /* Untuk menangani tabel yang lebarnya melebihi layar pada perangkat kecil */
    }

    table {
      width: 100%; /* Lebar tabel 100% dari kontainer */
      border-collapse: collapse;
      font-size: 16px;
      text-align: left;
    }

    th, td {
      padding: 12px;
      border: 1px solid #ddd;
    }

    th {
      background-color: black;
    }


  

    th a {
      color: #000;
      text-decoration: none;
    }

    th a:hover {
      color: #007BFF;
    }
  </style>
</head>

<body>

  <div class="container-scroller">
    @include("admin.navbar")

    <div class="table-container">
      <table>
        <tr>
          <th style="padding:30px">Name <a href="{{url('/all_messages/name/asc')}}"><i class="fa-solid fa-arrow-up-wide-short"></i></a> <a href="{{url('/all_messages/name/desc')}}"><i class="fa-solid fa-arrow-down-wide-short"></i></a></th>
          <th style="padding:30px">Email</th>
          <th style="padding:30px">Phone</th>
          <th style="padding:30px">Message</th>
          <th style="padding:30px">Reply with Email</th>
        </tr>

        @foreach($data as $data)
        <tr align="center">
          <td>{{$data->name}}</td>
          <td>{{$data->email}}</td>
          <td>{{$data->phone}}</td>
          <td>{{$data->message}}</td>
          <td><a class="btn btn-success" href="{{url('send_mail',$data->id)}}"><i class="fa-solid fa-envelope"></i></a></td>
        </tr>
        @endforeach

      </table>
    </div>
  </div>

  @include("admin.adminscript")
</body>

</html>
