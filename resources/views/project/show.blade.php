@extends('layouts.master')


@section('content')

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Project Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard.dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Project Details</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


      <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row" >
              <div class="col-md-6 " >

                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                  <div class="card-body box-profile">
                    <div class="text-center">
                      <!-- <img class="profile-user-img img-fluid img-circle"
                          src="../../dist/img/user4-128x128.jpg"
                          alt="User profile picture"> -->
                    </div>


                    <p class="text-muted text-center">Shareholder Project Details. <br> ID: {{$project['id']}} </p>

                    <ul class="list-group list-group-unbordered mb-3">


                      <li class="list-group-item">
                        <b> LC or TT Date:</b> <a class="float-right"> {{$project['lc_or_tt_date']}}</a>
                      </li>
                      <li class="list-group-item">
                        <b> Style Number Order Session:</b> <a class="float-right"> {{$project['style_number_and_order_session']}}</a>
                      </li>
                      <li class="list-group-item">
                        <b> LC Number:</b> <a class="float-right"> {{$project['lc_number']}}</a>
                      </li>
                      <li class="list-group-item">
                        <b> Lc value:</b> <a class="float-right"> {{$project['lc_value']}}</a>
                      </li>
                      <li class="list-group-item">
                        <b> Lc value:</b> <a class="float-right"> {{$project['forward_lc_value']}}</a>
                      </li>
                      <li class="list-group-item">
                        <b> Total Profit Margin:</b> <a class="float-right"> {{$project['total_profit_margin']}}</a>
                      </li>
                      <li class="list-group-item">
                        <b> Advanced Payment:</b> <a class="float-right"> {{$project['advanced_payment']}}</a>
                      </li>
                      <li class="list-group-item">
                        <b> Outstanding Payment:</b> <a class="float-right"> {{$project['outstanding_payment']}}</a>
                      </li>
                      <li class="list-group-item">
                        <b> Freight Cost:</b> <a class="float-right"> {{$project['freight_cost']}}</a>
                      </li>
                      <li class="list-group-item">
                        <b> Shipment Mode:</b> <a class="float-right"> {{$project['shipment_mode']}}</a>
                      </li>
                      <li class="list-group-item">
                        <b> Shipment Date:</b> <a class="float-right"> {{$project['shipment_date']}}</a>
                      </li>
                      <li class="list-group-item">
                        <b> Final Invoice Of Manufacturer:</b> <a class="float-right"> {{$project['final_invoice_of_manufacturer']}}</a>
                      </li>
                      <li class="list-group-item">
                        <b> Final Invoice Of Buyer:</b> <a class="float-right"> {{$project['final_invoice_amount_of_buyer']}}</a>
                      </li>
                      <li class="list-group-item">
                        <b> Amount Recieved:</b> <a class="float-right"> {{$project['amount_recieved']}}</a>
                      </li>
                      <li class="list-group-item">
                        <b> Profit Share With Shareholder:</b> <a class="float-right"> {{$project['profits_shared_with_shareholders']}}</a>
                      </li>
                      <li class="list-group-item">
                        <b> Main Acoount Balanced:</b> <a class="float-right"> {{$project['main_account_balaced_after_profit']}}</a>
                      </li>
                      <li class="list-group-item">
                        <b> Payment Method:</b> <a class="float-right"> {{$project['payment_method']}}</a>
                      </li>
                      <li class="list-group-item">
                        <b> Payment Record:</b> <a class="float-right"> {{$project['payment_record']}}</a>
                      </li>
                      <li class="list-group-item">
                        <b> Profit Share Outstanding:</b> <a class="float-right"> {{$project['profit_share_outstanding']}}</a>
                      </li>


                      
                      <li class="list-group-item">
                        <b> Created By:</b> <a class="float-right"> {{$project['created_by'] }}</a>
                      </li>
                      <li class="list-group-item">
                        <b> Updated By:</b> <a class="float-right"> {{$project['updated_by'] ?$project['updated_by'] :"-----" }}</a>
                      </li>
                      <li class="list-group-item">
                        <b> Created At:</b> <a class="float-right"> {{$project['created_at']}}</a>
                      </li>
                      <li class="list-group-item">
                        <b> Updated At:</b> <a class="float-right"> {{$project['updated_at']}}</a>
                      </li>




                    </ul>
                    <a href="{{route('project.index')}}" class="btn btn-primary btn-block align-center">Go back</a>
                  </div>
                  <!-- /.card-body -->
                </div>
              </div>
              <div class="col-md-6 center" >
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Name</th>
                    <th>Amount</th>
                    <th>Total Share</th>

                  </tr>
                  </thead>
                  <tbody>
                    @if(count($shareholders) > 0)
                        @foreach($shareholders AS $shareholder)
                          <tr>
                            <td>{{$shareholder->shareholder_name->name}}</td>
                            <td>{{$shareholder->amount}}</td>
                            <td>{{$shareholder->share_percentage}} %</td>
            
                          </tr>
                        @endforeach
                    @endif
                  </tbody>
                </table>

              </div>
        </div>


    </div>


</section>


@endsection
