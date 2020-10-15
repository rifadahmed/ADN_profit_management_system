<div class="card-body">
    <div class="row">
  <div class="form-group col-md-6">
    <label for="">Shareholer Full Name * @if ($errors->has('name')) <small class="text-danger"> [ {{ $errors->first('name') }} ] </small> @endif</label>
    <input type="text" name="name" class="form-control" id="" placeholder="Shareholer Full Name" value="{{ old('name',isset($data) ? $data->name : null ) }}">
  </div>
  <div class="form-group col-md-6">
    <label for="">Email * @if ($errors->has('email')) <small class="text-danger"> [ {{ $errors->first('email') }} ] </small>@endif</label>
    <input type="email" name="email" class="form-control" id="" placeholder="Enter Email" value="{{ old('email',isset($data) ? $data->email : null ) }}">
  </div>
  </div>
<div class="row">
  <div class="form-group col-md-6">
    <label for="">Password * @if ($errors->has('password')) <small class="text-danger"> [ {{ $errors->first('password') }} ] </small>@endif</label>
    <input type="password" name="password" class="form-control" id="" placeholder="Password" value="">
  </div>
  <div class="form-group col-md-6">
    <label for="">Confirm * Password @if ($errors->has('confirm_password')) <small class="text-danger"> [ {{ $errors->first('confirm_password') }} ] </small>@endif</label>
    <input type="password" name="confirm_password" class="form-control" id="" placeholder="confirm_password" value="">
  </div>
</div>
    <div class="row">
        <div class="form-group col-md-6">
            <label for="">Share By Own * @if ($errors->has('share')) <small class="text-danger"> [ {{ $errors->first('share') }} ] </small>@endif</label>
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
