<h1>Add Member</h1><br>
@php
session()->reflash();
@endphp
@if(session()->has('user'))
    <h3 style="color:green">{{session('user')}} successfully added</h3><br><br>
@endif
<form action="memberadded" method="POST">
    @csrf
    <input type="text" name="username" placeholder="please enter user name"/><br><br>
    <input type="password" name="userpassword" placeholder="please enter user password"/><br><br>
    <input type="text" name="useremail" placeholder="please enter user email"/><br><br>
    <button type="submit">Add Member</button>
</form>