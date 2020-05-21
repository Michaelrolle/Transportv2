@extends('layout.index')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Starter Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/"></a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="small-box bg-info">
                    <div class="inner">
                    <h3>Orders</h3>
                    </div>
                    <div class="icon">
                        <i class="fas fa-truck-moving"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            {{-- col-md-12   --}}
            </div>

            <div class="col-md-6">
                <div class="small-box bg-secondary">
                    <div class="inner">
                      <h3>Products</h3>
                    </div>
                    <div class="icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <a href="products" class="small-box-footer">
                      More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                  </div>
            {{-- col-md-6   --}}
            </div>

            <div class="col-md-6"> 
              <div class="small-box bg-secondary">
                <div class="inner">
                  <h3>Locations</h3>
                </div>
                <div class="icon">
                    <i class="fas fa-warehouse"></i>
                </div>
                <a href="locations" class="small-box-footer">
                  More info <i class="fas fa-arrow-circle-right"></i>
                </a>
              </div>
            {{-- col-md-6   --}}  
            </div>

            <div class="col-md-6">
                <div class="small-box bg-secondary">
                    <div class="inner">
                      <h3>Clients</h3>
                    </div>
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <a href="clients" class="small-box-footer">
                      More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                  </div>
            {{-- col-md-6   --}}      
            </div>

            <div class="col-md-6"> 
              <div class="small-box bg-secondary">
                <div class="inner">
                  <h3>Drivers</h3>
                </div>
                <div class="icon">
                    <i class="fas fa-id-card"></i>
                </div>
                <a href="drivers" class="small-box-footer">
                  More info <i class="fas fa-arrow-circle-right"></i>
                </a>
              </div>
            {{-- col-md-6   --}}
            </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    @endsection
  