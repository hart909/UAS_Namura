<x-app-layout>
</x-app-layout>
<!DOCTYPE html>
<html lang="en">

  <head>
    <base href="/public">
    @include("admin.admincss")
  </head>

  <body>
  <div class="container-scroller">
  @include("admin.navbar")
  <div style="position: relative; top: 60px; left: 200px;">
    <form action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data">

    @csrf
        <div>
            <label>Title</label>
            <input type="text" name="title" value="{{($data->title)}}" required style='color:black;'>
        </div>
        <div>
            <label>Price</label>
            <input type="number" name="price" value="{{($data->price)}}" required style='color:black;'>
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description" value="{{($data->description)}}" required style='color:black;'>
        </div>
        <div>
            <label>Old Image</label>
            <img height="200" width="200" src="/foodimage/{{($data->image)}}" alt="">
        </div>
        <div>
            <label>new Image</label>
            <input type="file" name="image" required style='color:black;'>
        </div>

        <div>
        <button style="color:black; background-color: white;" type="submit">Save</button>
        </div>
    </form>

    <div>  

</div>
   
    @include("admin.adminscript")
  </body>
  
</html>