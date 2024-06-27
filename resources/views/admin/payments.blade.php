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
    <td>
  <img id="payment-image" style="height:200px; width: auto" src="{{ asset('/payment/' . $data->image) }}" alt="payment">
</td>

<div id="popup-container" class="popup-container" style="display: none;">
  <div class="popup-content">
    <span class="close-button">&times;</span>
    <img id="popup-image" src="{{ asset('/payment/' . $data->image) }}" alt="payment">
  </div>
</div>
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

<script>
  const paymentImage = document.getElementById('payment-image');
  const popupContainer = document.getElementById('popup-container');
  const popupImage = document.getElementById('popup-image');
  const closeButton = document.querySelector('.close-button');

  paymentImage.addEventListener('click', () => {
    popupImage.src = paymentImage.src;
    popupContainer.style.display = 'block';
  });

  closeButton.addEventListener('click', () => {
    popupContainer.style.display = 'none';
  });

  window.addEventListener('click', (event) => {
    if (event.target == popupContainer) {
      popupContainer.style.display = 'none';
    }
  });
</script>

<style>
  .popup-container {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.4);
  }

  .popup-content {
    background-color: #fefefe;
    margin: 15% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
  }

  .close-button {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
  }

  .close-button:hover,
  .close-button:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
  }
</style>