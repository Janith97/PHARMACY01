@extends('layout')
  
@section('content')
@section('title','Add employee')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 align="center">Add Purchase </h2>
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
                <strong>Supplier Name:</strong>
                <input type="text" name="firstname" class="form-control shadow" placeholder="Select supplier" value="{{ old('firstname') }}">
            </div>
        </div>

        <div class="col-xs-6 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Invoice No:</strong>
                <input type="text" name="lastname" class="form-control shadow" placeholder="Invoice No" value="{{ old('lastname') }}">
            </div>
        </div>
        
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Purchase Date:</strong>
                <input type="text" name="age" class="form-control shadow" placeholder="Date" value="{{ old('age') }}">
            </div>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Discription:</strong>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            
            </div>
        </div>



        

        <div class="col-xs-6 col-sm-6 col-md-3">
            <div class="form-group">
                <strong>Item Information:</strong>
                <input type="text" name="nic" class="form-control shadow" placeholder="NIC">
            </div>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-3">
            <div class="form-group">
                <strong>Quantity:</strong>
                <input type="text" name="email" class="form-control shadow" placeholder="email" value="{{ old('email') }}">
            </div>
        </div>

     

        <div class="col-xs-6 col-sm-6 col-md-3">
            <div class="form-group">
                <strong>Rate:</strong>
                <input type="text" name="email" class="form-control shadow" placeholder="rate" >
            </div>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-3">
            <div class="form-group">
                <strong>Total:</strong>
                <input type="text" name="email" class="form-control shadow" placeholder="Total" >
            </div>
        </div>

        


      
          
        <div align="center">
                <button type="submit" class="btn btn-danger">Cancel</button>
                <button type="submit" class="btn btn-primary">Save</button>
        </div>

        

        
    </div>
   
</form>
@endsection