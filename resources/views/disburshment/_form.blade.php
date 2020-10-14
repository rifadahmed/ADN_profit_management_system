<div class="card-body">
    <div class="row">
      <div class="form-group col-md-6">
         <label for="">Shareholder Name</label>
         <select class="form-control" name="shareholder_id" id="buyer_type_id" >
            <option value="" disabled selected> - Select Shareholder - </option>
            @foreach ($shareholders as $shareholder)
            <option value={{$shareholder->id}} @if(old('shareholder_id', (isset($data ) && $data->shareholder_id == $shareholder->id))) selected @endif>{{$shareholder->name}}</option>
            @endforeach
        </select>
      </div>
      <div class="form-group col-md-6">
        <label for="">Amount @if ($errors->has('amount')) <small class="red-text"> [ {{ $errors->first('amount') }} ] </small>@endif</label>
        <input type="text" name="amount" class="form-control" id="amount" placeholder="Enter Amount" required value="{{ old('amount',isset($data) ? $data->amount : null ) }}">
      </div>
      <div class="form-group col-md-6">
        <label for="">Date</label>
        <input type="date" name="date" class="form-control" id="date" placeholder="Enter date" required value="{{ old('date',isset($data) ? $data->date :null) }}">
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
