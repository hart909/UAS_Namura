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

  <form action="{{url('/updatefoodpacket',$data->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    <div>
        <label >Package Name</label>
        <input style="color:black;" type="text" name="name" value="{{$data->name}}">
    </div>
    <div>
        <label >Description</label>
        <input type="text" name="description" value="{{$data->description}}">
    </div>
    <div>
        <label >Old Image</label>
        <img height= "200" width="200" src="/packetimage/{{$data->image}}" alt="">
    </div>
    <div>
        <label >New Image</label>
        <input type="file" name="image">
    </div>

    <div>
        <input type="submit" value="Update Package" required="">
    </div>
  </form>

  </div>
   
    @include("admin.adminscript")
  </body>
  
</html>