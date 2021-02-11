@extends('layout')
  
@section('content')
@section('title','Add employee')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 align="center">Add Medicine</h2>
        </div>
        
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
                <strong>Medicine Name:</strong>
                <input type="text" name="firstname" class="form-control shadow" placeholder="Medicine name" >
            </div>
        </div>

        <div class="col-xs-6 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Genaric Name:</strong>
                <input type="text" name="lastname" class="form-control shadow" placeholder="Genaric name" >
            </div>
        </div>
        
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Expire Date:</strong>
                <input type="text" name="age" class="form-control shadow" placeholder="Expire date" >
            </div>
        </div>

        

        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Medicine Location:</strong>
                <input type="text" name="address" class="form-control shadow" placeholder="Medicine Location" >
            </div>
        </div>

        

        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Details:</strong>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Details"></textarea>
            </div>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>category:</strong>
                <input type="text" name="email" class="form-control shadow" placeholder="email" >
            </div>
        </div>

        {{-- <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Pofile picture:</strong>  
            </div>
     
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="input-group">          
            <input type="text" class="form-control shadow" placeholder="upload image" aria-label="Recipient's username with two button addons">  
            <button class="btn btn-outline-secondary shadow" type="button">Browse</button>
            <button class="btn btn-outline-secondary shadow" type="button">Upload</button>  
            </div>
        </div> --}}

        {{-- <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Role:</strong>
                <input type="text" name="email" class="form-control shadow" placeholder="select role" >
            </div>
        </div>

        
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Image:</strong>
                <input type="text" name="email" class="form-control shadow" placeholder="select role" >
            </div>
        </div> --}}
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                
            <label for="exampleInputFile">Image:</label>
                
            <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="input-group shadow">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="exampleInputFile">
                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
              </div>
              <div class="input-group-append">
                <span class="input-group-text" id="">Upload</span>
              </div>
            </div>
            </div>
            </div>
        </div>

        

        <div class="col-xs-3 col-sm-3 col-md-3">
            <div class="form-group">
                <strong>Batch No:</strong>
                <input type="text" name="email" class="form-control shadow" placeholder="Batch Number" >
            </div>
        </div>
        
      
        <div class="col-xs-3 col-sm-3 col-md-3">
            <div class="form-group">
                <strong>Selling price:</strong>
                <input type="text" name="email" class="form-control shadow" placeholder="selling price" >
            </div>
        </div>

        <div class="col-xs-3 col-sm-3 col-md-3">
            <div class="form-group">
                <strong>Buying price:</strong>
                <input type="text" name="email" class="form-control shadow" placeholder="Buying price" >
            </div>
        </div>

        <div class="col-xs-3 col-sm-3 col-md-3">
            <div class="form-group">
                <strong>Supplier:</strong>
                <input type="text" name="email" class="form-control shadow" placeholder="select supplier" >
            </div>
        </div>


            

                
                
        
          <div class="col-xs-12 col-sm-12 col-md-12">  
        <div align="center">
            <br>
                <button type="submit" class="btn btn-danger">Cancel</button>
                <button type="submit" class="btn btn-primary">Save</button>
        </div>
        </div>

        

        
    </div>
   
</form>
@endsection