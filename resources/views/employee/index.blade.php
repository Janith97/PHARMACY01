@extends('layout')

 
@section('content')
@section('title','Table')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div align="center">
                <h1>Employees</h1>
            </div>           
        </div>
    </div>     
    <div align="right">
        <a class="btn btn-primary" href="{{ route('employee.create') }}"> + Employee </a>
        {{-- <a class="btn btn-primary" href="{{ route('student.index') }}"> student table </a> --}}
    </div> 
    @if ($message = Session::get('Success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    
   
    {{-- <table class="table table-striped">
        <tr>
            <th></th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Age</th>
            <th>Address</th>
            <th>Email</th>
            <th width="250px">Action</th>
        </tr>
        @foreach ($employees as $employee)
        <tr>
            <td>{{ $employee->id }}</td>
            <td>{{ $employee->firstname }}</td>
            <td>{{ $employee->lastname }}</td>
            <td>{{ $employee->age }}</td>
            <td>{{ $employee->address }}</td>
            <td>{{ $employee->email }}</td>
            <td>
                <form action="{{ route('employee.destroy',$employee->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('employee.show',$employee->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('employee.edit',$employee->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table> --}}
  
    <table class="table table table-striped table-bordered" id="table1" role="grid">
        <thead>
            <tr role="row">
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
                <th>Address</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Actions</th>
            </tr>
        

        </thead>
        <tbody></tbody>    
    </table> 

    <script>
        $(document).ready(function(){

            var BASE        = "{{url('/')}}/";

            var testtable   = $('#table1').DataTable({
                "ajax":"{!! route('datatable.indexpagetable') !!}",
                columns: [

                    {data: 'id' , name: 'id'},
                    {data: 'firstname' , name: 'firstname'},
                    {data: 'lastname' , name: 'lastname'},
                    {data: 'age' , name: 'age'},
                    {data: 'address' , name: 'address'},
                    {data: 'email' , name: 'email'},
                    {data: 'gender' , name: 'gender'},
                    {data: 'action' , name: 'action'},

                    //{data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });

        $('#table1').on('click','#delete',function(){
        // alert('clicked');
        var value = $(this).closest('tr').find('#hiddenID').val();
        alert('Now you are about to see something new 🕴');

        var params = {
            id:$(this).closest('tr').find('#hiddenID').val(),
            _token:$(this).data("token"),
  
        };
        $.ajax({
            url: BASE+'remove/'+value,
            type: 'delete',
            dataType: 'Json',
            data: $.param(params),
            success:function(response){
                alert(response.message);

                  
            }
   
        });

        testtable
            .row( $(this).parents('tr') )
            .remove()
            .draw();

        });
        });
    

    </script>
@endsection

{{-- @extends('layout')
 
@section('content')

            <table class="table table-bordered table-hover dataTable" id="table1" role="grid">
                <thead>
                    <tr role="row">
                        <th>ID</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Age</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th >Actions</th>

                    </tr>
                </thead>
                <tbody>

                </tbody>
           </table>

    

    
    <script>
        $(document).ready(function() {

            var BASE = "{{url('/')}}/";

            var testtable = $('#table1').DataTable( {
                "ajax": "{!! route('datatable.indexpagetable') !!}",
                    columns: [
                
                    {data: 'id', name: 'id'},
                    {data: 'firstname', name: 'firstname'},
                    {data: 'lastname', name: 'lastname'},
                    {data: 'age', name: 'age'},
                    {data: 'address', name: 'address'},
                    {data: 'email', name: 'email'},
                    {data: 'action', name: 'action'},               
                    ]
    
        } );
    
        $('#table1').on('click','#delete',function(){
        // alert('clicked');
            var value = $(this).closest('tr').find('#hiddenID').val();
            alert('Now you are about to see something new 🕴');

            var params = {
                id:$(this).closest('tr').find('#hiddenID').val(),
                _token:$(this).data("token"),
  
        };
        
        $.ajax({
            url: BASE+'remove/'+value,
            type: 'delete',
            dataType: 'Json',
            data: $.param(params),
            success:function(response){
                alert(response.message);                
        }  
        });

        testtable
            .row( $(this).parents('tr') )
            .remove()
            .draw();

        });
        });


    </script>

         
@endsection --}}