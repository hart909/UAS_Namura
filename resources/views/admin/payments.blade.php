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
    <th style="padding:10px">Name </th>
    <th style="padding:10px">Order </th>
    <th style="padding:10px">Total Price</th>
    <th style="padding:10px">Payment </th>
    <th style="padding:10px">Status </th>
    <th style="padding:10px">Action</th>
  </tr>
  @foreach($data as $data)
  <tr align="center">
    <td>{{$data->name}}</td>
    <td>{{$data->orderList}}</td>
    <td>{{$data->total}}</td>
    <td><img src="{{ asset('/payment/' . $data->image) }}" alt="payment"></td>
    <td>{{$data->status}}</td>
    <td>
        @if ($data->status === "No Status")
        <form action="{{url('/payments/status')}}" method="get" class="mb-2">
            <input type="hidden" name="id" value="{{$data->id}}">
            <input type="hidden" name="status" value="true">
            <button type="submit" class="btn btn-success">Approve</button>
        </form>
        <form action="{{url('/payments/status')}}" method="get">
            <input type="hidden" name="id" value="{{$data->id}}">
            <input type="hidden" name="status" value="false">
            <button type="submit" class="btn btn-danger">Decline</button>
        </form>
        @endif
    </td>
  </tr>
  @endforeach
</table>
</div>
  </div>

    @include("admin.adminscript")
  </body>

</html>
