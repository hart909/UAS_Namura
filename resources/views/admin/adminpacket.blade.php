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

      @include("admin.adminscript")
    </div>
  </body>
</html>