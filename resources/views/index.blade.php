@extends('layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div align="center">
                <h2>Employees</h2>
            </div>           
        </div>
    </div>  
    
    <div align="right">
        <a class="btn btn-primary" href="{{ route('employee.create') }}"> + </a>
        <a class="btn btn-primary" href="welcome"> Home </a>
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
   
    {{--
    <table class="table table-striped">
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
    </table>
  
    {{-- {!! $blogs->links() !!} --}}



<table class="table table-border table-hover dataTable" id="table2" role="grid">
    <thead>
        <tr role="row">
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Age</th>
            <th>Address</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        

    </thead>
    <tbody>
        
    </tbody>    
</table>

<script>
    $(document).ready(function(){
        $('#table2').DataTable({
            "ajax":"{!! route('datatable.indexpagetable') !!}",
            columns: [

                {data: 'id' , name: 'id'},
                {data: 'firstname' , name: 'firstname'},
                {data: 'lastname' , name: 'lastname'},
                {data: 'age' , name: 'age'},
                {data: 'address' , name: 'address'},
                {data: 'email' , name: 'email'},
                {data: 'action' , name: 'action'},

                //{data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });
    });


    
</script>
      



@endsection