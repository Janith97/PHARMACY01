{{-- @extends('layout')
 
    @section('content')



    <form action="{{route('student.store')}}" method="post">
    @csrf
    
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="std_name">Supplier</label>
                <input type="text" name="std_name" class="form-control shadow">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="std_color">contact</label>
                <input type="tel" name="std_color"  class="form-control shadow">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" class="form-control shadow">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">save</button>
        </div>
    
    </form>



@endsection --}}

@extends('layout')
  
@section('content')
@section('title','Add employee')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 align="center">Add Supplier</h2>
        </div>
        {{-- <div class="pull-left">
            <a class="btn btn-primary" href="{{ route('employee.index') }}"> Back</a>
        </div> --}}
    </div>
</div>
<br>
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Warning!</strong> Please check your input code<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

   
<form action="{{ route('employee.store')}}" method="POST">
    @csrf
    
    <div class="row">

        

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Supplier Name:</strong>
                <input type="text" name="firstname" class="form-control shadow" placeholder="firstname" >
            </div>
        </div>


        <div class="col-xs-12 col-sm-6 col-md-12">
            
            <div class="form-group">
                
                <strong>Address:</strong>
                <input type="text" name="address" class="form-control shadow" placeholder="address" >
            </div>
        </div>

        

        <div class="col-xs-12 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Telephone No:</strong>
                <input type="text" name="nic" class="form-control shadow" placeholder="NIC">
            </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Email Address:</strong>
                <input type="text" name="email" class="form-control shadow" placeholder="email" >
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>  
            </div>
     
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="input-group">          
            <input type="text" class="form-control shadow" placeholder="upload image" aria-label="Recipient's username with two button addons">  
            <button class="btn btn-outline-secondary shadow" type="button">Browse</button>
            <button class="btn btn-outline-secondary shadow" type="button">Upload</button>  
            </div>
        </div>

        

      
          <br>
        <div align="center">
                <button type="submit" class="btn btn-danger">Cancel</button>
                <button type="submit" class="btn btn-primary">Save</button>
        </div>

        

        
    </div>
   
</form>
@endsection