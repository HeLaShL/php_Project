@extends('app')
@section('content')
<div class="container">
	

	<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" name="frmTransaction" id="frmTransaction">
    <input type="hidden" name="business" value="golliwissem@hotmail.com"> 
    <input type="hidden" name="cmd" value="_xclick"> 
    <input type="hidden" name="item_name" value="{{$product->name}}"> 
    <input type="hidden" name="item_number" value="{{$product->id}}">
    <input type="hidden" name="amount" value="{{$product->price}}">   
    <input type="hidden" name="currency_code" value="USD">   
    <input type="hidden" name="cancel_return" value="http://demo.expertphp.in/payment-cancel"> 
    <input type="hidden" name="return" value="http://demo.expertphp.in/payment-status">
</form>
<SCRIPT>document.frmTransaction.submit();</SCRIPT> 
</div>

@endsection