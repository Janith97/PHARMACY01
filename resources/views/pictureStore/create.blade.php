@extends('layout')

@section('content')

<form action="{{route('picturestore.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="exampleFormControlFile1">Example Picture input </label>

        <input type="file" class="form-control-file" name="image">
       
        <input type="submit" value="upload">
    </div>
</form>

@endsection
