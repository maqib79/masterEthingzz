@extends('layouts.ething')
@section('content')
<!-- Main Container  -->
 <!-- Main Container  -->
 <div class="main-container container">
  <ul class="breadcrumb">
  <li><a href="index.php"><i class="fa fa-home"></i></a></li>
  <li><a href="#">Checkout</a></li>
  
  </ul>
  
  <div class="row">
  <!--Middle Part Start-->
  <div id="content" class="col-sm-12">
   <div class="so-onepagecheckout ">
     <form method="POST" action="/checkoutproceed">
      @csrf

  <div class="col-left col-sm-3">
  
   <div class="panel panel-default">
  <div class="panel-heading">
   <h4 class="panel-title"><i class="fa fa-user"></i> Your Personal Details</h4>
  </div>
   <div class="panel-body">
  <fieldset id="account">
   <div class="form-group required">
  <label for="input-payment-firstname" class="control-label">Full Name</label>
  <input type="text" class="form-control" id="input-payment-firstname" placeholder="First Name" value="" name="firstname" required>
   </div>
   <div class="form-group required">
  <label for="input-payment-email" class="control-label">E-Mail</label>
  <input type="email" class="form-control" id="input-payment-email" placeholder="E-Mail" value="" name="email" required>
   </div>
   <div class="form-group required">
  <label for="input-payment-telephone" class="control-label">Mobile / Phone</label>
  <input type="text" class="form-control" id="input-payment-telephone" placeholder="Mobile / Phone" value="" name="telephone" required>
   </div>
  </fieldset>
   </div>
   </div>
   <div class="panel panel-default">
  <div class="panel-heading">
   <h4 class="panel-title"><i class="fa fa-book"></i> Your Address</h4>
  </div>
   <div class="panel-body">
  <fieldset id="address" class="required">
   <div class="form-group required">
  <label for="input-payment-address-1" class="control-label">Address 1</label>
  <input type="text" class="form-control" id="input-payment-address-1" placeholder="Address 1" value="" name="address_1" required>
   </div>
   <div class="form-group">
  <label for="input-payment-address-2" class="control-label">Address 2</label>
  <input type="text" class="form-control" id="input-payment-address-2" placeholder="Address 2" value="" name="address_2">
   </div>
   <div class="form-group required">
  <label for="input-payment-city" class="control-label">City</label>
  <input type="text" class="form-control" id="input-payment-city" placeholder="City" value="" name="city" required>
   </div>
  
  
   <div class="checkbox">
  <label>
   <input type="checkbox" checked="checked" value="1" name="shipping_address">
   My delivery and billing addresses are the same.</label>
   </div>
  </fieldset>
   </div>
   </div>
  </div>
  <div class="col-right col-sm-9">
   <div class="row">
  <div class="col-sm-12">
  <div class="panel panel-default no-padding">
  <div class="col-sm-6 checkout-shipping-methods">
  <div class="panel-heading">
   <h4 class="panel-title"><i class="fa fa-truck"></i> Delivery Method</h4>
  </div>
  <div class="panel-body ">
  <p>Please select the preferred shipping method to use on this order.</p>
  <div class="radio">
   <label>
  <input type="radio" name="Flat_Shipping_Rate" value="0">
  Self Pickup (Free) - Rs 00/- </label>
  </div>
  <div class="radio">
   <label>
  <input type="radio" name="Flat_Shipping_Rate" value="150">
  Flat Shipping (Within City) - Rs 150/- </label>
  </div>
  <div class="radio">
   <label>
  <input type="radio" name="Flat_Shipping_Rate" value="250">
  Flat Shipping (Out of City) - Rs 250/- </label>
  </div>
  
  </div>
  </div>
  <div class="col-sm-6  checkout-payment-methods">
  <div class="panel-heading">
   <h4 class="panel-title"><i class="fa fa-credit-card"></i> Payment Method</h4>
  </div>
  <div class="panel-body">
  <p>Please select the preferred payment method to use on this order.</p>
  <div class="radio">
   <label>
  <input type="radio" checked="checked" name="Payment_method" value="Cash On Delivery">Cash On Delivery</label>
  </div>
  
  <div class="radio">
   <label>
  <input type="radio" name="Payment_method" value="Credit Card">Credit Card</label>
  </div>
      <div class="radio">
   <label>
  <input type="radio" name="Payment_method" value="Direct Bank Transfer">Direct Bank Transfer</label>
  </div>
  </div>
  </div>
  </div>
  
  
  
  </div>
  
  
  
  <div class="col-sm-12">
   <div class="panel panel-default">
  <div class="panel-heading">
   <h4 class="panel-title"><i class="fa fa-shopping-cart"></i> Shopping cart</h4>
  </div>
   <div class="panel-body">
  <div class="table-responsive">
   <table class="table table-bordered showcart"  id="ordertable">
  
  
   </table>
  </div>
   </div>
   </div>
  </div>
  <div class="col-sm-12">
   <div class="panel panel-default">
  <div class="panel-heading">
   <h4 class="panel-title"><i class="fa fa-pencil"></i> Add Comments About Your Order</h4>
  </div>
   <div class="panel-body">
  <textarea rows="4" class="form-control" id="confirm_comment" name="comments"></textarea>
  <br>
  <label class="control-label" for="confirm_agree">
   <input type="checkbox" checked="checked" value="1" required="" class="validate required" id="confirm_agree" name="confirm agree">
   <span>I have read and agree to the <a class="agree" href="#"><b>Terms &amp; Conditions</b></a></span> </label>
  <div class="buttons">
   <div class="pull-right">
  <input type="submit" class="btn btn-primary" id="button-confirm" value="Confirm Order">
   </div>
  </div>
   </div>
   </div>
  </div>
   </div>
  </div>
</form>
   </div>
  </div>
  <!--Middle Part End -->
  
  </div>
  </div>
  <!-- //Main Container -->
@endsection
