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

    <div style="position: relative; top: 60px; right: -150px;">
    <style>
    .table {
        width: 100%;
        border-collapse: collapse;
        background-color: #f5f5f5;
        position: relative;
        left:150px
    }

    .table th,
    .table td {
        padding: 12px 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    .table th {
        background-color: #4CAF50;
        color: white;
    }

    .table tr:hover {
        background-color: #f1f1f1;
    }

    .btn-danger {
        background-color: #dc3545;
        color: #fff;
        border: none;
        padding: 6px 12px;
        border-radius: 4px;
        cursor: pointer;
    }

    .badge-secondary {
        background-color: #6c757d;
        color: #fff;
        padding: 4px 8px;
        border-radius: 4px;
    }
</style>

<table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $data)
        <tr>
            <td>{{ $data->name }}</td>
            <td>{{ $data->email }}</td>
            @if($data->usertype == "0")
            <td><a href="{{url('/deleteuser',$data->id)}}"><button class="btn-danger"><Delete</button>Delete User</td></a>
            @else
            <td><span class="badge-secondary">Not allowed</span></td>
            @endif
        </tr>
        @endforeach
    </tbody>
</table>

    </div>
</div>
    @include("admin.adminscript")
  </body>
</html>