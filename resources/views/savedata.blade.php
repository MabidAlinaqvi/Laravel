<h1>Add New Member</h1></br>
<form action="savemember" method="POST">
    @csrf
    <input type="int" name="Id" placeholder="enter your id"/><br><br>
    <input type="text" name="Firstname" placeholder="enter your first name"/><br><br>
    <input type="text" name="Lastname" placeholder="enter your last name"/><br><br>
    <input type="text" name="Phoneno" placeholder="enter your phone No."/><br><br>
    <input type="text" name="company" placeholder="enter your company name"/><br><br>
    <button type="submit">Add Member</button>
</form>