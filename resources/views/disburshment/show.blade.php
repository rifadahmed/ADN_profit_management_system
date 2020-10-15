@extends('layouts.master')


@section('content')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> Disburshment details </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard.dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Disburshment details  </li>
            </ol>
          </div>
        </div>
      </div>
    </section>


    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
            </div>
          <div class="col-md-6 align-center">
            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <!-- <img class="profile-user-img img-fluid img-circle"
                       src="../../dist/img/user4-128x128.jpg"
                       alt="User profile picture"> -->
                </div>

                <h3 class="profile-username text-center"><strong>{{$disburshment->shareholder->name}}</strong></h3>

                <p class="text-muted text-center">Shareholder</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Amount:</b> <a class="float-right"> {{$disburshment->amount}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Date:</b> <a class="float-right">{{$disburshment->date}}</a>
                  </li>
                </ul>

                <a href="{{route('disburshment.index')}}" class="btn btn-primary btn-block align-center">Go back</a>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
            <div class="col-md-3">
              <div>
        </div>
    </div>
</section>



@endsection
