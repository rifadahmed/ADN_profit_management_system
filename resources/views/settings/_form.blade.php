<div class="card-body">
    <div class="row">
      <div class="form-group col-md-6">
        <label for="">Total Share * @if ($errors->has('value')) <small class="text-danger"> [ {{ $errors->first('value') }} ] </small>@endif</label>
        <input type="text" name="value" class="form-control" id="value" placeholder=""  value="{{$settings['value']}}">
      </div>
      {{--<div class="form-group col-md-6">
        <label for="">Date *</label>
        <input type="date" name="date" class="form-control" id="date" placeholder="Enter date"  value="{{ old('date',isset($data) ? $data->value :null) }}">
    </div>--}}
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
