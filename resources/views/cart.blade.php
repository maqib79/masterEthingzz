@extends('layouts.ething')
@section('content')
<!-- Main Container  -->
<div class="main-container container">
<ul class="breadcrumb">
<li><a href="#"><i class="fa fa-home"></i></a></li>
<li><a href="#">Shopping Cart</a></li>
</ul>

<div class="row">
<!--Middle Part Start-->
        <div id="content" class="col-sm-12">
          <h2 class="title">Shopping Cart</h2>
            <div class="table-responsive form-group">
                <table class="table table-bordered showcart"  id="ordertable">
                    
                     </table>
</div>
</div>

<div class="buttons">
            <div class="pull-left"><a href="index.html" class="btn btn-primary">Continue Shopping</a></div>
            <div class="pull-right"><a href="checkout.html" class="btn btn-primary">Checkout</a></div>
          </div>
        </div>
        <!--Middle Part End -->

</div>
</div>
<!-- //Main Container -->
@endsection