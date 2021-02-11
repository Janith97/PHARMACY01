
<h1>TABLE</h1>
<table>
    <tr><th>First Name</th><th>Last Name</th><th>Age</th><th>Address</th><th>Email</th><th>Gender</th></tr>
    @foreach ($data as $item)
    <tr><td>{{ $item->firstname}}</td>
        <td>{{ $item->lastname}}</td>
        <td>{{ $item->age}}</td>
        <td>{{ $item->address}}</td>
        <td>{{ $item->email}}</td>
        <td>{{ $item->gender}}</td>
    </tr>
</table>
        
    @endforeach



