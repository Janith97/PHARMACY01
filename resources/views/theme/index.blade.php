<!DOCTYPE html>
<html>
<head>
  
  @include('partials.header')
  
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar --> 
    @include('partials.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
    @include('partials.sidebar')
  <!-- /Main Sidebar -->

 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      
      {{-- small box --}}
      
      <div class="container-fluid">
        <div class="col-sm-3">
          <div class="small-box bg-info">
            <div class="inner">
              <h3>Employees</h3>
            </div>
            <div class="icon">
              {{-- <i class="ion ion-bag"></i> --}}
              <i class="far fa-user"></i>          
            </div>
              <a href="{{ route('employee.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>        
      </div>
    </section>
    
  </div>
  <!--/content wrapper-->       
  
  <!--footer-->  
    @include('partials.footer')
  <!--/footer-->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- Script -->
  @inlude('partials.script')
<!-- /Script -->
</body>
</html>
