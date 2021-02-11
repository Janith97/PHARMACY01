{{-- <!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    @include('partials.header')
    <title></title>  

  </head>
  <body >
  <div class="wrapper">
    <!-- Navbar --> 
      @include('partials.navbar')   
    <!-- Main Sidebar Container -->
      @include('partials.sidebar')    
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper style="min-height: 560px;">
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <!-- <h1 class="m-0 text-dark">Dashboard</h1> -->
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
      <!-- Main content -->  
      <section class="content">    
        <div class="container">
          @yield('content')
        </div>  
      </section>     
    </div>   
    <!--footer-->  
      @include('partials.footer') 
  </div>
  <!-- Script -->
    @include('partials.script')
  </body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
      <!-- Header -->
        @include('partials.header')
      <title>Pharmacy/@yield('title')</title>  

  </head>

  <body>
    <div class="wrapper">
      
      <!-- Navbar -->
      @include('partials.navbar')

          
      <!-- Main Sidebar Container -->
      @include('partials.sidebar')

      <div class="content-wrapper" style="min-height: 560px;">
          <!-- Content Header (Page header) -->
          <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  {{-- <h1 class="m-0 text-dark">Dashboard</h1> --}}
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- /.content-header -->

          <!-- Main content -->
          <section class="content">
            <div class="container">
              @yield('content')
            </div>
          </section>
          <!-- /.content -->
      </div>
    
        
        
                        
      <!-- Main Footer -->
      @include('partials.footer')  
    </div>  
      
    @include('partials.script') 

  </body>

</html>
