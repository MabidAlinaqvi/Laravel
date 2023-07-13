<h1>Login</h1>
<form action="userdata" method="POST">
    @csrf
    <input type="text" name="username" placeholder="please enter username"></input><br><br>
    <input type="password" name="password" placeholder="please enter password"></input><br><br>
    <button type="submit">Login</button>
</form>