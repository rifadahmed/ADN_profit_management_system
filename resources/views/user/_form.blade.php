<div class="card-body">
    <div class="row">
  <div class="form-group col-md-6">
    <label for="">Name @if ($errors->has('name')) <small class="red-text"> [ {{ $errors->first('name') }} ] </small> @endif</label>
    <input type="text" name="name" class="form-control" id="" placeholder="Enter Name" value="{{ old('name',isset($data) ? $data->name : null ) }}">
  </div>
  <div class="form-group col-md-6">
    <label for="">Email @if ($errors->has('email')) <small class="red-text"> [ {{ $errors->first('email') }} ] </small>@endif</label>
    <input type="email" name="email" class="form-control" id="" placeholder="Enter Email" value="{{ old('email',isset($data) ? $data->email : null ) }}">
  </div>
  </div>
<div class="row">
  <div class="form-group col-md-6">
    <label for="">Password @if ($errors->has('password')) <small class="red-text"> [ {{ $errors->first('password') }} ] </small>@endif</label>
    <input type="password" name="password" class="form-control" id="" placeholder="Password" value="">
  </div>
  <div class="form-group col-md-6">
    <label for="">Confirm Password @if ($errors->has('confirm_password')) <small class="red-text"> [ {{ $errors->first('confirm_password') }} ] </small>@endif</label>
    <input type="password" name="confirm_password" class="form-control" id="" placeholder="confirm_password" value="">
  </div>
</div>
    <div class="row">
        <div class="form-group col-md-6">
            <label for="">Total Share @if ($errors->has('total_share')) <small class="red-text"> [ {{ $errors->first('total_share') }} ] </small>@endif</label>
            <input type="text" name="total_share" class="form-control" id="total_share" placeholder="Total Share" value="{{ old('total_share',isset($data) ? $data->total_share : null ) }}">
        </div>
        <div class="form-group col-md-6">
            <label for="">Share @if ($errors->has('share')) <small class="red-text"> [ {{ $errors->first('share') }} ] </small>@endif</label>
            <input type="text" name="share" class="form-control" id="" placeholder="Share " value="{{ old('share',isset($data) ? $data->share : null ) }}">
        </div>
    </div>
 </div>


</div>


@push('script')
    <script src="{{asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
          bsCustomFileInput.init();
        });
    </script>
@endpush
