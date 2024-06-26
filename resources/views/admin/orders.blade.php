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

  <form class="mt-3" style="position:relative; left:130px" action="{{url('/orders')}}" method="get">
    <input type="number" name="min" placeholder="min. total price" style="color:blue;">
    <span>-</span>
    <input type="number" name="max" placeholder=" max. total price" style="color:blue;">
    <input type="submit" value="filter" class="btn btn-success;">
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

  .fa-solid{
    color: white;
  }
  .fa-solid:hover{
    color: lightgray;
  }
</style>

<table>
  <tr>
    <th style="padding:10px">Name <a href="{{url('/orders/name/asc')}}"><i class="fa-solid fa-arrow-up-wide-short"></i></a> <a href="{{url('/orders/name/desc')}}"><i class="fa-solid fa-arrow-down-wide-short"></i></a></th>
    <th style="padding:10px">Phone </th>
    <th style="padding:10px">Address</th>
    <th style="padding:10px">Food Name <a href="{{url('/orders/foodname/asc')}}"><i class="fa-solid fa-arrow-up-wide-short"></i></a> <a href="{{url('/orders/foodname/desc')}}"><i class="fa-solid fa-arrow-down-wide-short"></i></a></th>
    <th style="padding:10px">Price <a href="{{url('/orders/price/asc')}}"><i class="fa-solid fa-arrow-up-wide-short"></i></a> <a href="{{url('/orders/price/desc')}}"><i class="fa-solid fa-arrow-down-wide-short"></i></a></th>
    <th style="padding:10px">Quantity <a href="{{url('/orders/quantity/asc')}}"><i class="fa-solid fa-arrow-up-wide-short"></i></a> <a href="{{url('/orders/quantity/desc')}}"><i class="fa-solid fa-arrow-down-wide-short"></i></a></th>
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
