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
    <div style="position: relative; top: 70px; left: 150px">
    <style> table { width: 100%; border-collapse: collapse; } th, td {
     padding: 15px; text-align: left; border-bottom: 1px solid #ddd; } th { background-color: #f2f2f2; color:black } </style> 
    <table> 
        <thead> 
            <tr> 
                <th style="padding: 30px;">Name</th> 
                <th style="padding: 30px;">Email</th> 
                <th style="padding: 30px;">Phone</th> 
                <th style="padding: 30px;">Packet</th> 
                <th style="padding: 30px;">Date</th> 
                <th style="padding: 30px;">Time</th> 
                <th style="padding: 30px;">Message</th> 
            </tr> 
        </thead> 
        <tbody> 
            @foreach($data as $data)
            <tr> 
                <td>{{$data->name}}</td> 
                <td>{{$data->email}}</td> 
                <td>{{$data->phone}}</td> 
                <td>{{$data->packet}}</td> 
                <td>{{$data->date}}</td> 
                <td>{{$data->time}}</td> 
                <td>{{$data->message}}</td> 
            </tr> 
            @endforeach
         </tbody> 
        </table>


    
   
    @include("admin.adminscript")
  </body>
  
  
</html>