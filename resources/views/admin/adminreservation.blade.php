<x-app-layout>
</x-app-layout>
<!DOCTYPE html>
<html lang="en">

  <head>

    @include("admin.admincss")
  </head>

  <body>
  <div class="container-scroller">
  @include("admin.navbar")
  <div class="container">
  <form class="mt-3" action="{{url('/viewreservation')}}" method="get">
    <input type="text" name="search" style="color:blue;">
    <input type="submit" value="search" class="btn btn-success;">
  </form>

  <form class="mt-3" action="{{url('/viewreservation')}}" method="get">
    <p class="mb-0">Date:</p>
    <input type="date" name="min" placeholder="min. total price" style="color:blue;">
    <span>-</span>
    <input type="date" name="max" placeholder=" max. total price" style="color:blue;">
    <input type="submit" value="filter" class="btn btn-success;">
  </form>
    <div style="position: relative; top: 70px; left: 0px">
    <style> table { width: 100%; border-collapse: collapse; } th, td {
     padding: 15px; text-align: left; border-bottom: 1px solid #ddd; } th { background-color: #f2f2f2; color:black }
     .fa-solid{
    color: black;
  }
  .fa-solid:hover{
    color: darkgray;
  }
        </style>
    <table>
        <thead>
            <tr>
                <th style="padding: 30px;">Name <a href="{{url('/viewreservation/name/asc')}}"><i class="fa-solid fa-arrow-up-wide-short"></i></a> <a href="{{url('/viewreservation/name/desc')}}"><i class="fa-solid fa-arrow-down-wide-short"></i></a></th>
                <th style="padding: 30px;">Email</th>
                <th style="padding: 30px;">Phone</th>
                <th style="padding: 30px;">Packet <a href="{{url('/viewreservation/packet/asc')}}"><i class="fa-solid fa-arrow-up-wide-short"></i></a> <a href="{{url('/viewreservation/packet/desc')}}"><i class="fa-solid fa-arrow-down-wide-short"></i></a></th>
                <th style="padding: 30px;">Date <a href="{{url('/viewreservation/date/asc')}}"><i class="fa-solid fa-arrow-up-wide-short"></i></a> <a href="{{url('/viewreservation/name/desc')}}"><i class="fa-solid fa-arrow-down-wide-short"></i></a></th>
                <th style="padding: 30px;">Time</th>
                <th style="padding: 30px;">Message</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $data)
            <tr>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->phone}}</td>
                <td>{{$data->packet}}</td>
                <td>{{$data->date}}</td>
                <td>{{$data->time}}</td>
                <td>{{$data->message}}</td>
            </tr>
            @endforeach
         </tbody>
        </table>
        </div>




    @include("admin.adminscript")
  </body>


</html>
