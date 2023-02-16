<h3> User login</h3>

<form action="login" method="post">
    @csrf
    <input type="text" name="name" placeholder="Enter yoour name">
    <span>
        @error('name')
        {{$message}}
            
        @enderror
    </span>
    <br>
    <input type="email" name="email" placeholder="Enter yoour email" required>
    <span>
        @error('email')
        {{$message}}
            
        @enderror
    </span>
    <br>
    <input type="text" name="password" placeholder="Enter yoour password">
    <span>
        @error('password')
        {{$message}}
            
        @enderror
    </span>
    <br>
    <button type="submit">Login </button>

    <br>

</form>