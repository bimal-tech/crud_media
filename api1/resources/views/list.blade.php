<h1> List</h1>

<table border="1">
    <tr>
        <td>ID</td>
        <td>Name</td>
        
    </tr>
    
    @foreach($details as $data)
    <tr>
      
        <td>{{$data->id}}</td>
        <td>{{$data->name}}</td>
    </tr>    
    @endforeach
</table>