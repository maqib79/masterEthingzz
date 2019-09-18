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
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <td class="text-center">Image</td>
                    <td class="text-left">Product Name</td>
                    <td class="text-left">Quantity</td>
                    <td class="text-right">Unit Price</td>
                    <td class="text-right">Total</td>
                  </tr>
                </thead>
                <tbody>
                @foreach ($data['cart'] as $item)
                  <tr>
                    <td class="text-center"><a href="product.html"><img width="70px" src="{{asset('storage/'.$item->options->image)}}" alt="{{$item->name}}" title="{{$item->name}}" class="img-thumbnail" /></a></td>
                    <td class="text-left"><a href="product.html">{{$item->name}}</a><br />
                     </td>
                    <td class="text-left" width="200px"><div class="input-group btn-block quantity">
                        <input type="text" name="quantity" value="{{$item->qty}}" size="1" class="form-control" />
                        <span class="input-group-btn">
                        <button type="submit" data-toggle="tooltip" title="Update" class="btn btn-primary"><i class="fa fa-clone"></i></button>
                        <button type="button" data-toggle="tooltip" title="Remove" class="btn btn-danger" onClick=""><i class="fa fa-times-circle"></i></button>
                        </span></div></td>
                    <td class="text-right">{{$item->price}}</td>
                    <td class="text-right">{{$item->subtotal}}</td>
                  </tr>
                @endforeach
                </tbody>
              </table>
            </div>
         

<div class="row">
<div class="col-sm-4 col-sm-offset-8">
<table class="table table-bordered">
<tbody>
<tr>
<td class="text-right">
<strong>Sub-Total:</strong>
</td>
<td class="text-right">{{$total=str_replace(",","",$data['TotalAmountCart'])}} PKR</td>
</tr>
<tr>
<td class="text-right">
<strong>Flat Shipping Rate:</strong>
</td>
<td class="text-right">200</td>
</tr>
<tr>
<td class="text-right">
<strong>Tax (17%):</strong>
</td>
<td class="text-right">{{$total*0.17}}</td>
</tr>
<tr>
<td class="text-right">
<strong>Total:</strong>
</td>
<td class="text-right">{{$total+($total*0.17)+200}}</td>
</tr>
</tbody>
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