<h1>Update Member</h1>
<form action="/update" method="POST">
    @csrf
    <input type="hidden" name="id" value={{$data['id']}}></input>
    <input type="text" name="firstname" value={{$data['firstname']}}></input><br><br>
    <input type="text" name="lastname" value={{$data['lastname']}}></input><br><br>
    <input type="text" name="phoneno" value={{$data['phoneno']}}></input><br><br>
    <input type="text" name="company" value={{$data['company']}}></input><br><br>
    <button type="submit">Update</button>
</form>