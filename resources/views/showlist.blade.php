<h1>Show Member List</h1>
@if(Session()->has('deleteduser'))
    <span style="color:red">{{Session('deleteduser')}} has been deleted</span>
@endif
<table border="1">
    <tr>
        <td>Select</td>
        <td>ID</td>
        <td>FirstName</td>
        <td>LastName</td>
        <td>PhoneNo</td>
        <td>Company</td>
        <td>Action</td>
    </tr>
    <form action="deletemulti" method="POST">
        @csrf
    @foreach($memebers as $member)
    <tr>
        <td><input type="checkbox" name="Ids[]" value="{{$member['id']}}"></input></td>
        <td>{{$member['id']}}</td>
        <td>{{$member['firstname']}}</td>
        <td>{{$member['lastname']}}</td>
        <td>{{$member['phoneno']}}</td>
        <td>{{$member['company']}}</td>
        <td><a href={{'deletemem/'.$member['id']}}>delete</a>
            <a href={{'editmem/'.$member['id']}}>edit</a>
        </td>
    </tr>
    @endforeach
    <button type="submit">Delete</button>
    </form>
</table>