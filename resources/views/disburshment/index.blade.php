@extends('layouts.master')
@section('content')

@push('css')
      <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href=" {{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href=" {{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <!-- Theme style -->
@endpush

<!-- BEGIN: Page Main-->


<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>{{ isset($title) ? $title : "Title Not Found" }}</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard.dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">{{ isset($title) ? $title : "Title Not Found" }}</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


        <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">{{ isset($title) ? $title : "Title Not Found" }}</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Serial</th>
                            <th>Shareholder Name</th>
                            <th>Amount</th>
                            <th>Date</th>
                            <th>Remark</th>
                            <th>Created By</th>
                            <th>Updated By</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>


                            @foreach ($disburshments as $disburshment)
                            <tr>
                              <td> {{$serial++}} </td>
                              <td>{{$disburshment->shareholder->name}}</td>
                              <td>{{number_format(($disburshment->amount),2)}}</td>
                              <td>{{$disburshment->date}}</td>
                              <td>{{$disburshment->remark}}</td>
                              <td>{{$disburshment->created_by ?$disburshment->created_by :"-----"}}</td>
                              <td>{{$disburshment->updated_by? $disburshment->updated_by : "-----"}}</td>
                              <td> {{--<a href="{{route('disburshment.edit',$disburshment->id)}}" class="btn btn-xs btn-warning">Edit</a>--}}
                              <a class="btn btn-xs btn-default" href="{{route('disburshment.show',$disburshment->id)}}"> See more</a></td>
                          </tr>
                            @endforeach
                    </tbody>
                </table>
              </div>
            </div>
            <div class="text-center">{{$disburshments->render()}}</div>
          </div>
        </div>
      </div>
    </section>


    @push('script')
        <!-- DataTables -->
        <script src=" {{asset('plugins/datatables/jquery.dataTables.min.js')}} "></script>
        <script src=" {{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}} "></script>
        <script src=" {{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}} "></script>
        <script src=" {{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}} "></script>
        <!-- AdminLTE App -->
          <!-- Script for Modal Delete -->
          <script>
            $('.delete-client').click(function(){
                let id = $(this).attr('data-id');
                let value = $('#id').val(id);
            });
          <!-- Script for Modal Delete -->
           $(function () {
            $("#example1").DataTable({
              "responsive": true,
              "autoWidth": false,
            });
            $('#example2').DataTable({
              "paging": true,
              "lengthChange": false,
              "searching": false,
              "ordering": true,
              "info": true,
              "autoWidth": false,
              "responsive": true,
            });
          });
        </script>
    @endpush




@endsection
