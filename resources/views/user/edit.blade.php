@extends('layouts.master')

@section('content')

@push('css')


@endpush

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Edit Shareholder</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{route('dashboard.dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active">Edit Shareholder</li>
        </ol>
      </div>
    </div>
  </div>
</section>


    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                <!-- jquery validation -->
                    <div class="card card-primary">
                      <div class="card-header">
                        <h3 class="card-title">Edit Shareholder</h3>
                      </div>
                      <!-- /.card-header -->
                      <!-- form start -->
                      <form role="form" method="POST" action="{{ route('user.update',$data->id) }}" id="quickForm">
                        @csrf
                        @include('user._form')
                        <!-- /.card-body -->
                        <div class="card-footer">
                          <button type="submit" class="btn btn-sm btn-primary">Update</button>
                          <a href="{{route('user.index')}}" class="btn btn-sm btn-danger">Cancel</a>
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
