@extends('layouts.master')

@section('content')

{{$errors}}



        <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
          <!-- Search for small screen-->
          <div class="container">
            <div class="row">
              <div class="col s10 m6 l6">
                <h5 class="breadcrumbs-title mt-0 mb-0"><span>Users View</span></h5>
                <ol class="breadcrumbs mb-0">
                  <li class="breadcrumb-item"><a href="index-2.html">Home</a>
                  </li>
                  <li class="breadcrumb-item"><a href="#">User</a>
                  </li>
                  <li class="breadcrumb-item active">Users View
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        
<!-- Icon Prefixes -->
<div class="row">
  <div class="col s12">
    <div id="icon-prefixes" class="card card-tabs">
      <div class="card-content">
        <div class="card-title">
          <div class="row">
            <div class="col s12 m6 l10">
              <h4 class="card-title">Create New Client</h4>
            </div>
          </div>
        </div>
        <div id="view-icon-prefixes">
          <div class="row">
            <form class="col s12" method="post" action="{{route('clients.store')}}">
             @csrf
            
                @include('clients._form')
              
                <div class="col s12 display-flex justify-content-end mt-3">
                    <button type="submit" class="btn indigo">Save</button> &nbsp;
                    <a href="{{route('clients.index')}}" type="button" class="btn btn-light">Cancel</a>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection
