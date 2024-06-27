
<!DOCTYPE html>
<html lang="en">

  <head>
  <ul>
  <x-app-layout>
  </x-app-layout>
  </ul>
        
        
    @include("admin.admincss")
  </head>
 
  <body>
    
  <div class="container-scroller">
  @include("admin.navbar")
  <h2 style="position: relative; top:330px; left: 250px; font-size:30px;">HELLO, ADMIN Here's your navigation bar on your left. <br>
     Choose what ever you want to see</h2>

  </div>
 
    @include("admin.adminscript")
  </body>

</html>
