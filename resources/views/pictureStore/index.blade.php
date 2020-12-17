@extends('layout')

@section('content')


<table class='table table-bordered'>
    <tr>
        <th>ID</th>
        <th>Image</th>
        <th width="250px">Action</th>
    </tr>
    @foreach ($images as $image)
    <tr>

        <td>{{ $image->id }}</td>

    <td><img src="{{ asset("storage/images/$image->image")}}" height="60px" width="60px"/></td>

    <td>
        <form action="{{ route('picturestore.destroy',$image->id)}}" method="POST">
            
        
        
        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-danger">Delete</button>
        
        </form>
    </td>


    </tr>
    @endforeach

</table>
@endsection