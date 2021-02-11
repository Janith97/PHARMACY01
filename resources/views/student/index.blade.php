@extends('layout')
 
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div align="center">
            <h2>Supplier</h2>
        </div>           
    </div>
</div>  

<div align="right">
    <a class="btn btn-primary" href="{{ route('student.create') }}"> + suppliers </a>
    <a class="btn btn-primary" href="{{ route('employee.index') }}"> Employee table </a>
</div>

    <table class="table table-bordered table-hover dataTable" id="t1" role="grid">
        <thead>
            <tr role="row">
                <th>ID</th>
                <th>Supplier</th>
                <th>Contact</th>
                <th>Address</th>
                <th >Actions</th>

            </tr>
        </thead>
        <tbody></tbody>           
    </table>

   
    <script>
        $(document).ready(function() {

            var BASE = "{{url('/')}}/";

            var testtable = $('#t1').DataTable( {
                "ajax": "{!! route('xyz.pagetable') !!}",
                    columns: [
                
                        {data: 'id', name: 'id'},
                        {data: 'std_name', name: 'std_name'},
                        {data: 'std_color', name: 'std_color'},
                        {data: 'address', name: 'address'},
                        {data: 'action', name: 'action'},                
                    ]   
        });

        $('#t1').on('click','#delete',function(){
        // alert('clicked');
            var value = $(this).closest('tr').find('#hiddenID').val();
            alert('Now you are about to see something new 🕴');
                var params = {
                    id:$(this).closest('tr').find('#hiddenID').val(),
                    _token:$(this).data("token"),
  
        };
        
        $.ajax({
            url: BASE+'student/'+value,
            type: 'Delete',
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