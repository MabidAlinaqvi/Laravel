<h1>Member List</h1>
<table border=1>
    <tr>
        <td>Id</td>
        <td>FirstName</td>
        <td>LastName</td>
        <td>Email</td>
        <td>Company</td>
    </tr>
    @foreach($members as $member)
        <tr>
            <td>{{$member['ID']}}</td>
            <td>{{$member['FirstName']}}</td>
            <td>{{$member['LastName']}}</td>
            <td>{{$member['PhoneNo']}}</td>
            <td>{{$member['Company']}}</td>
        </tr>
    @endforeach
</table>

<span>
    {{$members->links()}}
</span>

<style>
    .w-5{
        display:none;
    }
</style>