<div class="card-body">
    <div class="row">
      <div class="form-group col-md-6">
        <label for="">LC or TT Date * @if ($errors->has('lc_or_tt_date')) <small class="red-text"> [ {{ $errors->first('lc_or_tt_date') }} ] </small> @endif</label>
        <input type="date" name="lc_or_tt_date" class="form-control" id="" placeholder="" value="{{ isset($projects)? $projects['lc_or_tt_date']:null }}">

      </div>
      <div class="form-group col-md-6">
        <label for="">Style Number Order Session * @if ($errors->has('style_number_and_order_session')) <small class="red-text"> [ {{ $errors->first('style_number_and_order_session') }} ] </small> @endif</label>
        <input type="text" name="style_number_and_order_session" class="form-control" id="" placeholder="ST1-S1" value="{{ isset($projects)? $projects['style_number_and_order_session']:null }}">
      </div>
    </div>
    <div class="row">
      <div class="form-group col-md-6">
        <label for="">LC Number * @if ($errors->has('lc_number')) <small class="red-text"> [ {{ $errors->first('lc_number') }} ] </small> @endif</label>
        <input type="number" name="lc_number" class="form-control" id="" placeholder="789" value="{{ isset($projects)? $projects['lc_number']:null }}" >
      </div>

      <div class="form-group col-md-6">
        <label for="">LC Value * @if ($errors->has('lc_value')) <small class="red-text"> [ {{ $errors->first('lc_value') }} ] </small> @endif</label>
        <input type="text" name="lc_value" class="form-control" id="" placeholder=" 200000" value="{{ isset($projects)? $projects['lc_value']:null }}" >
      </div>
    </div>

    <div class="row">
         <div class="form-group col-md-6">
           <label for="">Forwarded Lc value * @if ($errors->has('forward_lc_value')) <small class="red-text"> [ {{ $errors->first('forward_lc_value') }} ] </small> @endif</label>
           <input type="text" name="forward_lc_value" class="form-control" id="" placeholder="140000" value="{{ isset($projects)? $projects['forward_lc_value']:null }}" >
         </div>

         <div class="form-group col-md-6">
           <label for="">Total Profit Margin * @if ($errors->has('total_profit_margin')) <small class="red-text"> [ {{ $errors->first('total_profit_margin') }} ] </small> @endif</label>
           <input type="text" name="total_profit_margin" class="form-control" id="" placeholder="60000" value="{{ isset($projects)? $projects['total_profit_margin']:null }}">
         </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
          <label for="">Advanced Payment * @if ($errors->has('advanced_payment')) <small class="red-text"> [ {{ $errors->first('advanced_payment') }} ] </small> @endif</label>
          <input type="text" name="advanced_payment" class="form-control" id="" placeholder="3000" value="{{ isset($projects)? $projects['advanced_payment']:null }}">
        </div>

        <div class="form-group col-md-6">
          <label for="">Outstanding Payment * @if ($errors->has('outstanding_payment')) <small class="red-text"> [ {{ $errors->first('outstanding_payment') }} ] </small> @endif</label>
          <input type="text" name="outstanding_payment" class="form-control" id="" placeholder=" 140000" value="{{ isset($projects)? $projects['outstanding_payment']:null }}">
        </div>
    </div>
<div class="row">
    <div class="form-group col-md-6">
      <label for="">Freight Cost * @if ($errors->has('freight_cost')) <small class="red-text"> [ {{ $errors->first('freight_cost') }} ] </small> @endif</label>
      <input type="text" name="freight_cost" class="form-control" id="" placeholder="1000" value="{{ isset($projects)? $projects['freight_cost']:null }}">
    </div>

    <div class="form-group col-md-6">
      <label for="">Shipment Mode * @if ($errors->has('shipment_mode')) <small class="red-text"> [ {{ $errors->first('shipment_mode') }} ] </small> @endif</label>
      <input type="text" name="shipment_mode" class="form-control" id="" placeholder="Ship, Air, Road, Waterway " value="{{ isset($projects)? $projects['shipment_mode']:null }}">
    </div>
</div>
<div class="row">
    <div class="form-group col-md-6">
      <label for="">Shipment Date * @if ($errors->has('shipment_date')) <small class="red-text"> [ {{ $errors->first('shipment_date') }} ] </small> @endif</label>
      <input type="date" name="shipment_date" class="form-control" id="" placeholder="" value="{{ isset($projects)? $projects['shipment_date']:null }}">
    </div>

    <div class="form-group col-md-6">
      <label for="">Final Invoice Of Manufacturer * @if ($errors->has('final_invoice_of_manufacturer')) <small class="red-text"> [ {{ $errors->first('final_invoice_of_manufacturer') }} ] </small> @endif</label>
      <input type="text" name="final_invoice_of_manufacturer" class="form-control" id="" placeholder=" LCb-INVOICEb=0" value="{{ isset($projects)? $projects['final_invoice_of_manufacturer']:null }}">
    </div>
</div>
<div class="row">
    <div class="form-group col-md-6">
      <label for="">Final Invoice Of Buyer * @if ($errors->has('final_invoice_amount_of_buyer')) <small class="red-text"> [ {{ $errors->first('final_invoice_amount_of_buyer') }} ] </small> @endif</label>
      <input type="text" name="final_invoice_amount_of_buyer" class="form-control" id="" placeholder="LCm-INVOICEm=0" value="{{ isset($projects)? $projects['final_invoice_amount_of_buyer']:null }}">
    </div>

    <div class="form-group col-md-6">
      <label for="">Amount Recieved * @if ($errors->has('amount_recieved')) <small class="red-text"> [ {{ $errors->first('amount_recieved') }} ] </small> @endif</label>
      <input type="text" name="amount_recieved" class="form-control" id="" placeholder=" 200000" value="{{ isset($projects)? $projects['amount_recieved']:null }}">
    </div>
</div>
<div class="row">
    <div class="form-group col-md-6">
      <label for="">Profit Share With Shareholder * @if ($errors->has('profits_shared_with_shareholders')) <small class="red-text"> [ {{ $errors->first('profits_shared_with_shareholders') }} ] </small> @endif</label>
      <input type="text" name="profits_shared_with_shareholders" class="form-control" id="" placeholder="60000" value="{{ isset($projects)? $projects['profits_shared_with_shareholders']:null }}">
    </div>

    <div class="form-group col-md-6">
      <label for="">Main Acoount Balanced * @if ($errors->has('main_account_balaced_after_profit')) <small class="red-text"> [ {{ $errors->first('main_account_balaced_after_profit') }} ] </small> @endif</label>
      <input type="text" name="main_account_balaced_after_profit" class="form-control" id="" placeholder=" 4000" value="{{ isset($projects)? $projects['main_account_balaced_after_profit']:null }}">
    </div>
</div>
<div class="row">
    <div class="form-group col-md-6">
      <label for="">Payment Method * @if ($errors->has('payment_method')) <small class="red-text"> [ {{ $errors->first('payment_method') }} ] </small> @endif</label>
      <input type="" name="payment_method" class="form-control" id="" placeholder="Cheque, Cash, TT, Cheque" value="{{ isset($projects)? $projects['payment_method']:null }}">
    </div>

    <div class="form-group col-md-6">
      <label for="">Payment Record * @if ($errors->has('payment_record')) <small class="red-text"> [ {{ $errors->first('payment_record') }} ] </small> @endif</label>
      <input type="text" name="payment_record" class="form-control" id="" placeholder="Receipt -01" value="{{ isset($projects)? $projects['payment_record']:null }}">
    </div>
</div>
<div class="row">
    <div class="form-group col-md-6">
      <label for="">Profit Share Outstanding * @if ($errors->has('profit_share_outstanding')) <small class="red-text"> [ {{ $errors->first('profit_share_outstanding') }} ] </small> @endif</label>
      <input type="text" name="profit_share_outstanding" class="form-control" id="" placeholder="200000" value="{{ isset($projects)? $projects['profit_share_outstanding']:null }}">
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
