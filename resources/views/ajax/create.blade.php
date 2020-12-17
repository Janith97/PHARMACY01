@extends('layout')
  
@section('content')
{{-- <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script> --}}
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 id="h22">Ajax Lession</h2><br>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('ajax.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        {{-- <strong>Warning!</strong> Please check your inputs<br><br> --}}
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('ajax.store') }}" method="POST">
    @csrf
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>First Name:</strong>
                <input type="text" name="fname" class="form-control" placeholder="First name" id="fname" value="{{ old('fname') }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Last Name:</strong>
                <input type="text" name="lname" class="form-control" placeholder="Lirst name" value="{{ old('lname') }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary" id="submit">Submit</button>
        </div>
    </div>
   
</form>

<script>
    var BASE = "{{url('/')}}/";
    $('form').on('submit', function(e){
    e.preventDefault();
    alert('default prevented');
    alert(BASE);
 
    var params ={
        fname:$('#fname').val(),
        _token:$('[name="_token"]').val(),
       
    };
    $.ajax({
        url: BASE + 'ajax',
        type: 'POST',
        dataType: 'JSON',
        data: $.param(params),
        success: function (response) {
            console.log(response);
          
        }
    });
    
    });
   
</script>

@endsection