<center>
<div class="form-container">
    <h2>Add New User</h2>

    <!-- massage keep hold on page for this page  -->
    <!-- {{session()->reflash()}} --> 
    <form action="adduser" method="post">
        @csrf
       
      
        <input type="text" id="name" name="name" placeholder='Enter User Name'>
        <br>
        <br>
        <input type="text" id="email" name="email" placeholder='Enter User Email'>
        <br>
        <br>
        <input type="text" id="phone" name="phone" placeholder='Enter User Phone'>
        <br>
        <br>
        <input type="submit" value="Add User">
    </form>
</div>

<br><br><br>
@if(session('massage'))
<span class='success-message'>{{session('massage')}}</span>
@endif
@if(session('lovepreet'))
<span class='success-message'>{{session('lovepreet')}}</span>
@endif



<!-- {{session()->keep('name')}} -->


    <br>
 <style>
    .success-message {
    background-color: limegreen;
    border-radius: 3px;
    color: antiquewhite;
    margin: 20px;
    padding: 5px;
    display: inline-block;
}


 </style>

</center>