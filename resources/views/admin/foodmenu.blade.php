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

    <div style="position: relative; top: 60px; left: 200px;">
    <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">

    @csrf
        <div>
            <label>Title</label>
            <input type="text" name="title" placeholder="Write a Name" required style='color:black;'>
        </div>
        <div>
            <label>Price</label>
            <input type="number" name="price" placeholder="Put a Price" required style='color:black;'>
        </div>
        <div>
            <label>Image</label>
            <input type="file" name="image" required style='color:black;'>
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description" placeholder="Write a Description" required style='color:black;'>
        </div>

        <div>
        <button style="color:black; background-color: white;" type="submit">Save</button>
        </div>
    </form>

    <div>
        <br>
        <style>
    .table {
        width: 100%;
        border-collapse: collapse;
        background-color: #f5f5f5;
        font-family: Arial, sans-serif;
    }

    .table th,
    .table td {
        padding: 12px 15px;
        text-align: center;
        border-bottom: 1px solid #ddd;
    }

    .table th {
        background-color: #4CAF50;
        color: white;
    }

    .table tr:hover {
        background-color: #f1f1f1;
    }

    .table img {
        max-width: 100px;
        max-height: 100px;
    }

    .btn-danger,
    .btn-primary {
        display: inline-block;
        padding: 6px 12px;
        margin-bottom: 0;
        font-size: 14px;
        font-weight: normal;
        line-height: 1.42857143;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        cursor: pointer;
        border: 1px solid transparent;
        border-radius: 4px;
    }

    .btn-danger {
        color: #fff;
        background-color: #d9534f;
        border-color: #d43f3a;
    }

    .btn-primary {
        color: #fff;
        background-color: #337ab7;
        border-color: #2e6da4;
    }
</style>

<table class="table">
    <thead>
        <tr>
            <th>Food Name</th>
            <th>Price</th>
            <th>Description</th>
            <th>Image</th>
            <th>Action</th>
            <th>Action2</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $item)
        <tr>
            <td>{{ $item->title }}</td>
            <td>{{ $item->price }}</td>
            <td>{{ $item->description }}</td>
            <td><img src="/foodimage/{{ $item->image }}" alt="{{ $item->title }}"></td>
            <td><a class="btn btn-danger" href="{{ url('/deletemenu', $item->id) }}">Delete</a></td>
            <td><a class="btn btn-primary" href="{{ url('/updateview', $item->id) }}">Update</a></td>
        </tr>
        @endforeach
    </tbody>
</table>

    </div>

    </div>


</div>
    @include("admin.adminscript")
  </body>
  
</html>