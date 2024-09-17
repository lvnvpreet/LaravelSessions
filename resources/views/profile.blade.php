<center>
    <h1>My Profile</h1>
    <!-- {{session('user')}} -->
    @if(session('user'))
    <h3>Wellcom {{session('user')}}</h3>
    <pre>
        {{print_r(session('allData'))}}
    </pre>
    <br><br>
    {{session('allData')['username']}}
    <br>
    <a href="logout">Log Out</a>
    @else 
    <h3>No user found in this session !</h3>
    <br><br>
    <a href="login">Log In</a>
    @endif

    
</center>