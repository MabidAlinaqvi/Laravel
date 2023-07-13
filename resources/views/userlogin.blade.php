<h1>User Login</h1>
<form action="submitform" method="POST">
    {{method_field('PATCH')}}
    @csrf
    <input type="text" name="username" placeholder="enter username"></input><br>
    <input type="password" name="password" placeholder="enter password"></input><br>
    <button>Login</button>
</form>