@extends('layouts.master')

@section('content')

@push('css')


@endpush


    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Create New Project</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard.dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Create New Project</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- Main content -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                <!-- jquery validation -->
                    <div class="card card-primary">
                      <div class="card-header">
                          <h3 class="card-title">{{ isset($title) ? $title : "Title Not Found" }}</h3>
                      </div>
                      <!-- /.card-header -->
                      <!-- form start -->
                      <form method="post" role="form" id="quickForm" action="{{route('project.store')}}">
                          @csrf
                        @include('project._form')
                        <!-- /.card-body -->
                        <div class="card-footer">
                          <button type="submit" class="btn btn-sm btn-success">Submit</button>
                          <a href="{{route('project.index')}}" class="btn btn-sm btn-danger">Cancle</a>
                        </div>
                      </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>

@endsection
