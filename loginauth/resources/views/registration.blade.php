<h3>Hello everyone</h3>

{{-- <center><a href="/registration">Go to Registration form</a></center> --}}

<form method="POST" action="{{route('user')}}">


    @csrf
  ENTER NAME:  <input type="text" name ="firstname "> 
  <br>
  ENTER SURNAME:  <input type="text" name ="surname ">
  <br>
  ENTER AGE:  <input type="text" name ="age ">
  <br> 
  ENTER PASSWORD:  <input type="password" name ="password ">
  <br>
   <input type="submit" name="submit">
    
</form>