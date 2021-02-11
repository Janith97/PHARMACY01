@extends('layout')
  
@section('content')
@section('title','Add employee')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 align="center">Add Employee</h2>
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

        

        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>First Name:</strong>
                <input type="text" name="firstname" class="form-control shadow" placeholder="firstname" value="{{ old('firstname') }}">
            </div>
        </div>

        <div class="col-xs-6 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Last Name:</strong>
                <input type="text" name="lastname" class="form-control shadow" placeholder="lasstname" value="{{ old('lastname') }}">
            </div>
        </div>
        
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Age:</strong>
                <input type="text" name="age" class="form-control shadow" placeholder="age" value="{{ old('age') }}">
            </div>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group"><br>
                <strong>Gender:</strong>
                <label><input type="radio" name="gender" value="male" id="">Male &nbsp;</label>
                <label><input type="radio" name="gender" value="female" id="">Female &nbsp;</label>
                <label><input type="radio" name="gender" value="other" id="">Other &nbsp;</label>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Address:</strong>
                <input type="text" name="address" class="form-control shadow" placeholder="address" value="{{ old('lastname') }}">
            </div>
        </div>

        

        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>NIC:</strong>
                <input type="text" name="nic" class="form-control shadow" placeholder="NIC">
            </div>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>email:</strong>
                <input type="text" name="email" class="form-control shadow" placeholder="email" value="{{ old('email') }}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pofile picture:</strong>  
            </div>
     
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="input-group">          
            <input type="text" class="form-control shadow" placeholder="upload image" aria-label="Recipient's username with two button addons">  
            <button class="btn btn-outline-secondary shadow" type="button">Browse</button>
            <button class="btn btn-outline-secondary shadow" type="button">Upload</button>  
            </div>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Role:</strong>
                <input type="text" name="email" class="form-control shadow" placeholder="select role" >
            </div>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Discription:</strong>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    
                  </blockquote>
            </div>
        </div>


      
          
        <div align="center">
                <button type="submit" class="btn btn-danger">Cancel</button>
                <button type="submit" class="btn btn-primary">Save</button>
        </div>

        

        
    </div>
   
</form>
@endsection