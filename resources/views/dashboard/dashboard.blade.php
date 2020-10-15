
@extends('layouts.master')

@section('content')


@push('css')
      <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
      <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}}">
      <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
      <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
      <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.css')}}">
      <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endpush
    <!-- /.content-header -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div>
        </div>
      </div>
    </div>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$totalAmount}}</h3>
                <p>Total Reciveable</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-money-check-alt"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$totalGet}}<sup style="font-size: 20px"></sup></h3>
                <p>Total Paid</p>
              </div>
              <div class="icon">
                <i class="fas fa-hand-holding-usd"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>


          <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$total_shareholder}}<sup style="font-size: 20px"></sup></h3>
                <p>Total Shareholder</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-friends"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$total_project}}<sup style="font-size: 20px"></sup></h3>
                <p>Total Project</p>
              </div>
              <div class="icon">
                <i class="fas fa-tasks"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
          <!-- <div class="col-lg-3 col-6">

            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">

            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div> -->

        </div>
      </div>
    </section>
  </div>


@endsection

@push('script')
    {{-- Custom Scripts--}}
    <script src={{asset("app-assets/js/scripts/dashboard-modern.js")}}></script>
    <script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('plugins/sparklines/sparkline.js')}}"></script>
    <script src="{{asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
    <script src="{{asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
    <script src="{{asset('plugins/moment/moment.min.js')}}"></script>
    <script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
    <script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
@endpush
