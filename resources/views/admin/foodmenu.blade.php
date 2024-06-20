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
        <table bgcolor=grey>
        <tr>
            <th style="padding: 30px">Food Name</th>
            <th style="padding: 30px">Price</th>
            <th style="padding: 30px">Description</th>
            <th style="padding: 30px">Image</th>
            <th style="padding: 30px">Action</th>
        </tr>

        @foreach($data as $data)
        <tr align=center>
            <td>{{$data->title}}</td>
            <td>{{$data->price}}</td>
            <td>{{$data->description}}</td>
            <td><img src="/foodimage/{{$data->image}}" style="width: 100px; height: 100px;"></td>
            <td><a href="{{url('/deletemenu',$data->id)}}">Delete</a></td>
        </tr>
        @endforeach
        </table>

    </div>

    </div>


</div>
    @include("admin.adminscript")
  </body>
  
</html>