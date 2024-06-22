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

    <div>
    <style>
    .form-container {
        max-width: 600px;
        margin: 0 auto;
        padding: 30px;
        background-color: #f5f5f5;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        font-family: Arial, sans-serif;
        color:black;
        position: relative;
        top: 10px;
        left: 150px;
    }
    
    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .form-group input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
        font-size: 16px;
    }

    .form-group input[type="file"] {
        padding: 5px;
    }

    .btn {
        display: inline-block;
        padding: 10px 20px;
        background-color: #4CAF50;
        color: #fff;
        border: none;
        border-radius: 3px;
        font-size: 16px;
        cursor: pointer;
    }

    .btn:hover {
        background-color: #45a049;
    }
</style>

<div class="form-container">
    <form action="{{ url('/uploadfood') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" placeholder="Write a Name" required>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" id="price" name="price" placeholder="Put a Price" required>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" id="image" name="image" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" id="description" name="description" placeholder="Write a Description" required>
        </div>
        <div class="form-group">
            <button class="btn" type="submit">Save</button>
        </div>
    </form>
</div>

    <div>
        <br>
        <style>
    .table-container {
        max-width: 100%;
        
        font-family: Arial, sans-serif;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        background-color: #f5f5f5;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        position: relative;
        top: 10px;
        left: 150px;
    }

    th, td {
        padding: 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: black;
        color: #fff;
    }

    td {
        vertical-align: middle;
        color: black;
    }

    td img {
        max-width: 100px;
        height: auto;
    }

    .action-btn {
        display: inline-block;
        padding: 8px 12px;
        background-color: #4CAF50;
        color: #fff;
        text-decoration: none;
        border-radius: 3px;
        transition: background-color 0.3s;
    }

    .action-btn:hover {
        background-color: #45a049;
    }
</style>

<div class="table-container">
    <table>
        <tr>
            <th>Food Name</th>
            <th>Price</th>
            <th>Description</th>
            <th>Image</th>
            <th>Action</th>
            <th>Action2</th>
        </tr>

        @foreach($data as $data)
        <tr>
            <td>{{ $data->title }}</td>
            <td>{{ $data->price }}</td>
            <td>{{ $data->description }}</td>
            <td><img src="/foodimage/{{ $data->image }}" alt="{{ $data->title }}"></td>
            <td><a class="action-btn" href="{{ url('/deletemenu', $data->id) }}">Delete</a></td>
            <td><a class="action-btn" href="{{ url('/updateview', $data->id) }}">Update</a></td>
        </tr>
        @endforeach
    </table>
</div>

    </div>

    </div>


</div>

    @include("admin.adminscript")
  </body>
  
</html>