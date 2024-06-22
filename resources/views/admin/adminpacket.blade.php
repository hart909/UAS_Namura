<x-app-layout>
</x-app-layout>
<!DOCTYPE html>
<html lang="en">

  <head>
    @include("admin.admincss")
    <style>
      form {
        position: relative;
        top:50px;
        background-color: #fff;
        border-radius: 4px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        padding: 30px;
        max-width: 500px;
        margin: 0 auto;
        height:30%;
      }

      form div {
        margin-bottom: 20px;
      }

      label {
        display: block;
        font-weight: 600;
        color: #333;
        margin-bottom: 8px;
      }

      input {
        width: 100%;
        padding: 12px 16px;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 16px;
        transition: border-color 0.3s;
        color:black;
      }

      input:focus {
        outline: none;
        border-color: #4CAF50;
      }

      input[type="submit"] {
        display: block;
        background-color: black;
        color: #fff;
        border: none;
        border-radius: 4px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s;
      }

      input[type="submit"]:hover {
        background-color: #45a049;
      }
    </style>
  </head>

  <body>
    <div class="container-scroller">
      @include("admin.navbar")

      <form action="{{url('/uploadpacket')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
          <label>Name</label>
          <input type="text" name="name" required="" placeholder="Write Package Name">
        </div>

        <div>
          <label>Description</label>
          <input type="text" name="description" required="" placeholder="Write Package Description">
        </div>

        <div>
          <label>Image</label>
          <input type="file" name="image" required="">
        </div>

        <div>
          <input type="submit" value="Save">
        </div>
      </form>
      
      <style>
  table {
    width: 50%;
    border-collapse: collapse;
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
  }

  th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
    color: black;
  }

  th {
    padding: 100px;
    background-color: black;
    color: white;
  }

  td img {
    max-width: 80px;
    height: auto;
  }

  td a {
    display: inline-block;
    background-color: #4CAF50;
    color: #fff;
    padding: 6px 12px;
    text-decoration: none;
    border-radius: 4px;
    transition: background-color 0.3s ease;
  }

  td a:hover {
    background-color: #45a049;
  }
</style>
      <table>
        <tr>
          <th style="padding:30px">Name</th>
          <th style="padding:30px">Description</th>
          <th style="padding:30px">Image</th>
          <th style="padding:30px">Action</th>
          <th style="padding:30px">Action2</th>
        </tr>

        @foreach($data as $data)
        <tr align= center>
          <td>{{$data->name}}</td>
          <td>{{$data->description}}</td>
          <td><img height="100" width="100" src="/packetimage/{{$data->image}}" ></td>
          <td><a href="{{url('/updatepacket',$data->id)}}">Update</a></td>
          <td><a href="{{url('/deletepacket',$data->id)}}">Delete</a></td>
        </tr>
      @endforeach

      </table>
      @include("admin.adminscript")
    </div>
  </body>
</html>