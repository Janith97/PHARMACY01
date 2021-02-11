@extends('layout')

 
@section('content')

<h1 class="mb-2 mt-4" align="center">DASHBOARD</h5><br>
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>Employee</h3>

                <p>Employee details</p>
              </div>
              <div class="icon">
                <i class="fas fa fa-user"></i>
              </div>
              <a href="#" class="small-box-footer">
                 <i class="fas fa-plus-circle "></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>Medicine<sup style="font-size: 20px"></sup></h3>

                <p>Medicine details</p>
              </div>
              <div class="icon">
                <i class="fas fa fa-ambulance"></i>
              </div>
              <a href="#" class="small-box-footer">
                 <i class="fas fa-plus-circle "></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>Supplier</h3>

                <p>Supplier info</p>
              </div>
              <div class="icon">
                <i class="fas fa fa-users"></i>
              </div>
              <a href="#" class="small-box-footer">
                <i class="fas fa-plus-circle "></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>Purchase</h3>

                <p>Purchase info</p>
              </div>
              <div class="icon">
                <i class="fas fa fa-shopping-cart"></i>
              </div>
              <a href="#" class="small-box-footer">
                 <i class="fas fa-plus-circle "></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
        </div>

        <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small card -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>.</h3>
  
                  <p>.</p>
                </div>
                <div class="icon">
                  <i class="fas fa fa-tags"></i>
                </div>
                <a href="#" class="small-box-footer">
                  Purchase Report 
                </a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small card -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>.<sup style="font-size: 20px"></sup></h3>
  
                  <p>.</p>
                </div>
                <div class="icon">
                  <i class="fas fa fa-file"></i>
                </div>
                <a href="#" class="small-box-footer">
                  Sales Report </i>
                </a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small card -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>.</h3>
  
                  <p>.</p>
                </div>
                <div class="icon">
                  <i class="fas fa-layer-group"></i>
                </div>
                <a href="#" class="small-box-footer">
                  Stock Report </i>
                </a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small card -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>.</h3>
  
                  <p>.</p>
                </div>
                <div class="icon">
                  <i class="fas fa-funnel-dollar"></i>
                </div>
                <a href="#" class="small-box-footer">
                  Monthly Summary <i class="fas fa-arrow-circle-right"></i>
                </a>
              </div>
            </div>
            <!-- ./col -->
          </div>









@endsection