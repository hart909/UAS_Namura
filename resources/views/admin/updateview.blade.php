<x-app-layout>
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
    @include("admin.admincss")
    <style>
        /* Add your custom styles here */
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f5f5f5;
        }
        .form-container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
            padding: 40px;
            max-width: 800px;
            margin: 0 auto;
        }
        .form-container label {
            font-weight: 600;
            color: #343a40;
            font-size: 16px;
        }
        .form-container input {
            border: 1px solid #ced4da;
            border-radius: 5px;
            padding: 12px 16px;
            font-size: 16px;
            color: white;
            transition: border-color 0.3s ease;
        }
        .form-container input:focus {
            outline: none;
            border-color: #007bff;
        }
        .form-container button {
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            color: #fff;
            padding: 12px 24px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .form-container button:hover {
            background-color: #0056b3;
        }
        .img-container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
            padding: 40px;
            text-align: center;
            margin-top: 20px;
        }
        .img-container img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container-scroller">
        @include("admin.navbar")
        <div class="form-container">
            <form action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{($data->title)}}" required>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" id="price" name="price" value="{{($data->price)}}" required>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" id="description" name="description" value="{{($data->description)}}" required>
                </div>
                <div class="img-container">
                    <label>Old Image</label>
                    <img class="img-fluid" src="/foodimage/{{($data->image)}}" alt="">
                </div>
                <div class="form-group">
                    <label for="image">New Image</label>
                    <input type="file" class="form-control-file" id="image" name="image" required>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
    @include("admin.adminscript")
</body>
</html>