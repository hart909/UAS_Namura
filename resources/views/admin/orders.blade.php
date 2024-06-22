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
  <form style="position:relative; left:130px" action="{{url('/search')}}" method="get">
    <input type="text" name="search" style="color:blue;">
    <input type="submit" value="search" class="btn btn-success;">
  </form>
<br>
  <style>
  table {
    width: 80%;
    margin: 0 auto;
    border-collapse: collapse;
    font-family: Arial, sans-serif;
    font-size: 14px;
  }

  th, td {
    padding: 10px;
    text-align: left;
    border-bottom: 1px solid #ddd;
  }

  th {
    background-color: #365E32;
    font-weight: bold;
  }

  tr:hover {
    background-color: #000;
    color: #fff;
  }

  td {
    vertical-align: middle;
  }
</style>

<table>
  <tr>
    <th style="padding:10px">Name</th>
    <th style="padding:10px">Phone</th>
    <th style="padding:10px">Address</th>
    <th style="padding:10px">Food Name</th>
    <th style="padding:10px">Price</th>
    <th style="padding:10px">Quantity</th>
    <th style="padding:10px">Total Price</th>
  </tr>
  @foreach($data as $data)
  <tr align="center">
    <td>{{$data->name}}</td>
    <td>{{$data->phone}}</td>
    <td>{{$data->address}}</td>
    <td>{{$data->foodname}}</td>
    <td>{{$data->price}}</td>
    <td>{{$data->quantity}}</td>
    <td>{{$data->price*$data->quantity}}</td>
    <td></td>
  </tr>
  @endforeach
</table>
</div>
  </div>
   
    @include("admin.adminscript")
  </body>
  
</html>