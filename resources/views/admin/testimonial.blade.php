<x-app-layout>
</x-app-layout>
<!DOCTYPE html>
<html lang="en">

<head>
    @include("admin.admincss")
    <style>
        /* CSS Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            width: 100%;
            overflow-x: hidden;
        }

        .container-scroller {
            max-width: 100vw;
            overflow-x: hidden;
        }

        .create {
            position: relative;
            top: 50px;
            background-color: #fff;
            border-radius: 4px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            max-width: 500px;
            margin: 0 auto;
            height: 30%;
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
            color: black;
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

        table {
            width: 100%;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin-top: 50px;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            color: black;
        }

        th {
            padding: 20px;
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

        .fa-solid {
            color: white;
        }

        .fa-solid:hover {
            color: lightgray;
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        @include("admin.navbar")

        <form class="create" action="{{url('/uploadtestimonial')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label>Title</label>
                <input type="text" name="title" required="" placeholder="Write Title ">
            </div>

            <div>
                <label>Description</label>
                <input type="text" name="description" required="" placeholder="Write Testimonial Description">
            </div>

            <div>
                <label>Image</label>
                <input type="file" name="image" required="">
            </div>

            <div>
                <input type="submit" value="Save">
            </div>
        </form>

        <div>
            <form class="flex my-3 pr-10" action="{{url('/viewtestimonial')}}" method="get">
                <input type="text" name="search" style="color:blue;">
                <input type="submit" value="search" class="btn btn-success ml-3 w-1/4">
            </form>
            <table>
                <tr>
                    <th style="padding:30px">Title <a href="{{url('/viewtestimonial/name/asc')}}"><i
                                class="fa-solid fa-arrow-up-wide-short"></i></a> <a
                            href="{{url('/viewtestimonial/name/desc')}}"><i
                                class="fa-solid fa-arrow-down-wide-short"></i></a></th>
                    <th style="padding:30px">Description</th>
                    <th style="padding:30px">Image</th>
                    <th style="padding:30px">Action</th>
                    <th style="padding:30px">Action2</th>
                </tr>

                @foreach($data as $data)
                <tr align=center>
                    <td>{{$data->title}}</td>
                    <td>{{$data->description}}</td>
                    <td><img height="100" width="100" src="/testimonialimage/{{$data->image}}"></td>
                    <td><a href="{{url('/updatetestimonial',$data->id)}}">Update</a></td>
                    <td><a href="{{url('/deletetestimonial',$data->id)}}">Delete</a></td>
                </tr>
                @endforeach

            </table>
        </div>
        @include("admin.adminscript")
    </div>
</body>

</html>
