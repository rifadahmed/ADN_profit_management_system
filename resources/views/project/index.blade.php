@extends('layouts.master')

@section('content')

@push('css')
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href=" {{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href=" {{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">

@endpush

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
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">{{$title}}</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <div class="row">
                  <form class="" method="Post" action="{{route('project.index')}}">
                    <div class="row mr-5">
                      <div class="col-md-4"><input type="date" name="from_date" class="mr-5 mb-5" /></div>
                      <div class="col-md-4"><input type="date" name="to_date"class="mr-5 mb-5" /></div>
                      <div class="col-md-4"><button type="submit" id="filter" name="filter" class="btn btn-sm btn-success" >Search</button>
                      {{-- <div class="col-md-4"><button type="submit" id="refresh" name="refresh" class="btn btn-sm btn-success" >Refresh</button> --}}
                    </div>
                  </form>
                </div>

                <table id="" class="table table-bordered ">
                  <thead>
                  <tr>
                    <th>Serial</th>
                    <th>LC/TT Date</th>
                    <th>Style Number & Order Session</th>
                    <th>Profit Share With Shareholder</th>
                    <th>Total profit margin</th>
                    <th>Created By</th>
                    <th>Updated By</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @if(count($projects) > 0)
                        @foreach($projects AS $eachProject)
                          <tr>
                            <td>{{$serial++}}</td>
                            <td>{{$eachProject['lc_or_tt_date']}}</td>
                            <td>{{$eachProject['style_number_and_order_session']}}</td>
                            <td>{{number_format(($eachProject['profits_shared_with_shareholders']), 2)}}</td>
                            <td>{{number_format(($eachProject['total_profit_margin']), 2)}}</td>
                            <td>{{$eachProject['created_by'] ?$eachProject['created_by'] : "-----"}}</td>
                            <td>{{$eachProject['updated_by'] ? $eachProject['updated_by']: "-----"}}</td>
                            <td>
                                <a  href=" {{route('project.edit', $eachProject['id'])}} " class="btn btn-warning btn-xs">Edit</a>
                                <a data-target="{{$eachProject['id']}}" class="btn btn-xs btn-default" href=" {{route('project.show', $eachProject['id'])}}">Details</a>

                            </td>
                          </tr>
                        @endforeach
                    @endif
                  </tbody>
                </table>
                {{ $projects->links() }}
              </div>
            </div>
            
        </div>
        
      </div>


    </section>



  @push('script')
      <!-- BEGIN PAGE VENDOR JS-->
      <!-- DataTables -->
        <script src=" {{asset('plugins/datatables/jquery.dataTables.min.js ')}}"></script>
        <script src=" {{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js ')}}"></script>
        <script src=" {{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js ')}}"></script>
        <script src=" {{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js ')}}"></script>
      <!-- END PAGE VENDOR JS-->
        <script>
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


      <!-- Script for Modal Delete -->
      <script>
        $('.delete-client').click(function(){
            let id = $(this).attr('data-id');
            let value = $('#id').val(id);
        });
      <!-- Script for Modal Delete -->


      </script>


  @endpush

@endsection
