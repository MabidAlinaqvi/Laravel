<h1>Api Data</h1>
<table border="1">
    <th>Id</th>
    <th>Email</th>
    <th>FirstName</th>
    <th>Image</th>
    @foreach($data as $item)
    <tr>
        <td>{{$item['id']}}</td>
        <td>{{$item['email']}}</td>
        <td>{{$item['first_name']}}</td>
        <td><img src={{$item["avatar"]}}/></td>
    </tr>
    @endforeach
</table>