
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
  
  <style>
  
h1{
    color:white;
}
form {
  background-color: white;
  padding: 2rem;
  border-radius: 0.5rem;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}

.form-group {
  margin-bottom: 1.5rem;
  color: black;
}

label {
  font-weight: bold;
  display: block;
  margin-bottom: 0.5rem;
}

input[type="text"], textarea {
  width: 100%;
  padding: 0.75rem 1rem;
  border: 1px solid #ddd;
  border-radius: 0.25rem;
  font-size: 1rem;
}

textarea {
  height: 150px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 0.75rem 1.5rem;
  border: none;
  border-radius: 0.25rem;
  cursor: pointer;
  font-size: 1rem;
}

.btn:hover {
  background-color: #45a049;
}
  </style>
        <h1>You are going to email Mr/Mrs <span style="color:Red; font-weight:80px">{{$data->name}}</span></h1>
    <br><form style="position:relative; top:-0px; left:90px;"action="{{ url('mail',$data->id) }}" method="Post">
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: '{{ session('success') }}',
                timer: 5000,
                showConfirmButton: false
            });
        </script>
    @endif
        @csrf
        <div class="form-group">
            <label for="title">Greeting</label>
            <input type="text"  name="greeting" placeholder="Write a Greeting" required>
        </div>
        <div class="form-group">
            <label for="price">Mail Body</label>
            <textarea name="body" ></textarea>
           
        </div>
        <div class="form-group">
            <label>Action text</label>
            <input type="text"  name="action_text" placeholder="Write an Action Text" required>
        </div>
        <div class="form-group">
            <label>Action Url</label>
            <input type="text"  name="action_url" placeholder="Write an Action Url">
        </div>
        <div class="form-group">
            <label>End Line</label>
            <input type="text"  name="endline" placeholder="Write a end line " required>
        </div>
        <div class="form-group">
            <button class="btn" type="submit">Send Email</button>
        </div>
    </form>  
       
    


</div>
 
    @include("admin.adminscript")
  </body>

</html>
