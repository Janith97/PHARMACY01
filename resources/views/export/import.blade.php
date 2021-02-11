@extends('layout')
  
@section('content')
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Import Data Example</h2>
        
    </div>
    
    @if ($message = Session::get('Success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <form action="{{route('employee.import')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="file">upload file</label>
        <input type="file" name="file" id="">
        <button class="btn btn-primary" type="submit">
            Import
        </button>
    </div>
    </form>
    </div>
@endsection