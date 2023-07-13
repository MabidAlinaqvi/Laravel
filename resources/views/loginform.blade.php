<h1>Login</h1>
@if($errors->any())
@foreach($errors->all() as $err)
<li>{{$err}}</li>
@endforeach
@endif
{{$errors}}
<form action="submitformdata" method="POST">
    @csrf
    <input type="text" name="username" placeholder="please enter user name"/><br>
    <span style="color:red">@error('username'){{$message}}@enderror</span><br><br>
    <input type="password" name="userpass" placeholder="please enter user password"/><br>
    <span style="color:red">@error('userpass'){{$message}}@enderror</span><br><br>
    <button>Login</button>
</form>