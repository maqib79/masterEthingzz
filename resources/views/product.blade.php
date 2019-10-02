@extends('layouts.ething')
@section('content')

<!-- Main Container  -->
<div class="main-container container">
    <ul class="breadcrumb">
    <li><a href="/"><i class="fa fa-home"></i></a></li>
    @if ($data['Products']->category->getParentCategory)
        @if ($data['Products']->category->getParentCategory->getParentCategory)
            <li><a href="/category/{{Str::slug($data['Products']->category->getParentCategory->getParentCategory->CategoryName)}}">{{$data['Products']->category->getParentCategory->getParentCategory->CategoryName}}</a></li>
            <li><a href="/category/{{Str::slug($data['Products']->category->getParentCategory->CategoryName)}}">{{$data['Products']->category->getParentCategory->CategoryName}}</a></li>
            <li><a href="/category/{{Str::slug($data['Products']->category->CategoryName)}}">{{$data['Products']->category->CategoryName}}</a></li>
            <li><a href="/product/{{Str::slug($data['Products']->ProductName)}}">{{$data['Products']->ProductName}}</a></li>

        @else
        <li><a href="/category/{{Str::slug($data['Products']->category->getParentCategory->CategoryName)}}">{{$data['Products']->category->getParentCategory->CategoryName}}</a></li>
        <li><a href="/category/{{Str::slug($data['Products']->category->CategoryName)}}">{{$data['Products']->category->CategoryName}}</a></li>
       <li><a href="/product/{{Str::slug($data['Products']->ProductName)}}">{{$data['Products']->ProductName}}</a></li>

        @endif
    @else
        <li><a href="/category/{{Str::slug($data['Products']->category->CategoryName)}}">{{$data['Products']->category->CategoryName}}</a></li>
        <li><a href="/product/{{Str::slug($data['Products']->ProductName)}}">{{$data['Products']->ProductName}}</a></li>

    @endif
    
    </ul>
    <div class="row">
    <!--Middle Part Start-->
    <div id="content" class="col-md-12 col-sm-12">
    <div class="product-view row">
    <div class="left-content-product col-lg-10 col-xs-12">
    <div class="row">
    <div class="content-product-left class-honizol col-sm-6 col-xs-12 ">
    <div class="large-image">
    <img itemprop="image" class="product-image-zoom" src="{{asset('storage/'.$data['Products']->productimages->first()->name)}}" data-zoom-image="{{asset('storage/'.$data['Products']->productimages->first()->name)}}" title="" alt="">
    </div>
    <div id="thumb-slider1" class="">  

        </div> 
        {{-- @foreach ($data['Products']->productimages as $item)
                
            <a data-index="0" class="img thumbnail " data-image="{{asset('storage/'.$item->name)}}" title="{{asset('storage/'.$item->alttag)}}">
                <img src="{{asset('storage/'.$item->name)}}" title="" alt="{{asset('storage/'.$item->alttag)}}">
            </a>
           @endforeach --}}
        
        {{-- <a data-index="0" class="img thumbnail " data-image="{{asset('storage/'.$data['Products']->productimages->first()->name)}}" title="{{asset('storage/'.$data['Products']->productimages->first()->name)}}">
            <img src="{{asset('storage/'.$data['Products']->productimages->first()->name)}}" title="" alt="{{asset('storage/'.$data['Products']->productimages->first()->name)}}">
        </a> --}}    
        
        <div class="p-small-image">
            
            @foreach ($data['Products']->productimages as $item)
            
            <img class="img thumbnail" src="{{asset('storage/'.$item->name)}}" title="" alt="{{asset('storage/'.$item->alttag)}}">
           @endforeach


</div><!----p-small-image-  CLOSE---->


    </div>
    
    <div class="content-product-right col-sm-6 col-xs-12">
    <div class="title-product">
    <h1>{{$data['Products']->ProductName}}</h1>
    </div>
    <!-- Review ---->
    <div class="box-review form-group">
    <div class="ratings">
    <div class="rating-box">
    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
    </div>
    </div>
    
    <a class="reviews_button" href="#" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">0 reviews</a> |
    <a class="write_review_button" href="#" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">Write a review</a>
    </div>

    <div class="product-label form-group">
    <div class="product_page_price price" itemprop="offerDetails" itemscope="" itemtype="http://data-vocabulary.org/Offer">
        @if (strtotime($data['Products']->sales->startdate)<=strtotime(date('Y-m-d')) && strtotime($data['Products']->sales->enddate)>=strtotime(date('Y-m-d')))
                    
        <span class=price-new>Rs: {{$data['Products']->sales->sale}} /- PKR</span>
        <span class=price-old>Rs: {{$data['Products']->ProductPrice}} /- PKR</span>
            
        @else
        <span class=price-new>Rs: {{$data['Products']->ProductPrice}} /- PKR</span>
        @endif
    
</div>
    <div class="stock"><span>Availability:</span> <span class="status-stock">{{$data['Products']->ProductInstock}}</span></div>
    </div>
    
    <div class="product-box-desc">
    <div class="inner-box-desc">
    <div class="price-tax"><span>Inclusive GST:</span> 17%/-</div>
    <div class="brand"><span>Brand: </span><a href="#">{{$data['Products']->ProductBrand}}</a> </div>
    <div class="model"><span>Product SKU: </span>{{$data['Products']->ProductSKU}}</div>
    </div>
    </div>
    
    
    <div id="product">
    <h4 style="font-weight: bold; margin-top: 0;">Sepcifications</h4>
    {{$data['Products']->ProductDesc}}
    
    <form>
    <div class="form-group box-info-product">
    <div class="option quantity">
    <div class="input-group quantity-control" unselectable="on" style="-webkit-user-select: none;">
    <label>Qty</label>
    <input class="form-control" type="text" name="quantity"
    value="1">
    <input type="hidden" name="product_id" value="50">
    <span class="input-group-addon product_quantity_down">−</span>
    <span class="input-group-addon product_quantity_up">+</span>
    </div>
    </div>
    <div class="cart">
            <input type="hidden" name="id" value="{{$data['Products']->id}}">
            {{-- <input type="button" title="" value="Add to Cart" id="button-cart" class="btn btn-mega btn-lg" data-original-title="Add to Cart"> --}}
            {{-- <button class="addToCart"  data-toggle="tooltip" title="Add to Cart" onclick="cart.add('50');"><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button> --}}
            <p class="xyz addToCart">Add to Cart</p>
        </form></div>
    <div class="add-to-links wish_comp">
    <ul class="blank list-inline">
    <li class="wishlist">
    <a class="icon" data-toggle="tooltip" title=""
    onclick="wishlist.add('50');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i>
    </a>
    </li>
    </ul>
    </div>
    
    </div>
    
    </div>
    <!-- end box info product -->
    
    </div>
    </div>
    </div>
    
    <section class="col-lg-2 hidden-sm hidden-md hidden-xs slider-products">
    <div class="module col-sm-12 four-block">
    <div class="modcontent clearfix">
    <div class="policy-detail">
    <div class="banner-policy">
    <div class="policy policy1">
    <a href="#"> <span class="ico-policy">&nbsp;</span> 90 day
    <br> money back </a>
    </div>
    <div class="policy policy2">
    <a href="#"> <span class="ico-policy">&nbsp;</span> In-store exchange </a>
    </div>
    <div class="policy policy3">
    <a href="#"> <span class="ico-policy">&nbsp;</span> lowest price guarantee </a>
    </div>
    <div class="policy policy4">
    <a href="#"> <span class="ico-policy">&nbsp;</span> shopping guarantee </a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    </div>
    
    <!-- Product Tabs -->
    <div class="producttab ">
    <div class="tabsslider  vertical-tabs col-xs-12">
    <ul class="nav nav-tabs col-lg-2 col-sm-3">
    <li class="active"><a data-toggle="tab" href="#tab-1">Description</a></li>
    <li class="item_nonactive"><a data-toggle="tab" href="#tab-review">Reviews (1)</a></li>
    </ul>
    <div class="tab-content col-lg-10 col-sm-9 col-xs-12">
    <div id="tab-1" class="tab-pane fade active in">
            {{$data['Products']->ProductLongDesc}}
    </div>
    <div id="tab-review" class="tab-pane fade">
    <form>
    <div id="review">
    <table class="table table-striped table-bordered">
    <tbody>
    <tr>
    <td style="width: 50%;"><strong>Super Administrator</strong></td>
    <td class="text-right">29/07/2015</td>
    </tr>
    <tr>
    <td colspan="2">
    <p>Best this product opencart</p>
    <div class="ratings">
    <div class="rating-box">
    <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
    <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
    <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
    <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
    </div>
    </div>
    </td>
    </tr>
    </tbody>
    </table>
    <div class="text-right"></div>
    </div>
    <h2 id="review-title">Write a review</h2>
    <div class="contacts-form">
    <div class="form-group"> <span class="icon icon-user"></span>
    <input type="text" name="name" class="form-control" value="Your Name" onblur="if (this.value == '') {this.value = 'Your Name';}" onfocus="if(this.value == 'Your Name') {this.value = '';}">
    </div>
    <div class="form-group"> <span class="icon icon-bubbles-2"></span>
    <textarea class="form-control" name="text" onblur="if (this.value == '') {this.value = 'Your Review';}" onfocus="if(this.value == 'Your Review') {this.value = '';}">Your Review</textarea>
    </div>
    <span style="font-size: 11px;"><span class="text-danger">Note:</span> HTML is not translated!</span>
    
    <div class="form-group">
    <b>Rating</b> <span>Bad</span>&nbsp;
    <input type="radio" name="rating" value="1"> &nbsp;
    <input type="radio" name="rating"
    value="2"> &nbsp;
    <input type="radio" name="rating"
    value="3"> &nbsp;
    <input type="radio" name="rating"
    value="4"> &nbsp;
    <input type="radio" name="rating"
    value="5"> &nbsp;<span>Good</span>
    
    </div>
    <div class="buttons clearfix"><a id="button-review" class="btn buttonGray">Continue</a></div>
    </div>
    </form>
    </div>
    </div>
    </div>
    </div>
    <!-- //Product Tabs -->
    
    <!-- Related Products -->
    <div class="related titleLine products-list grid module ">
    <h3 class="modtitle">Related Products  </h3>
    <div class="releate-products ">
    <div class="product-layout">
    <div class="product-item-container">
    <div class="left-block">
    <div class="product-image-container second_img ">
    <img  src="image/demo/shop/product/e11.jpg"  title="Apple Cinema 30&quot;" class="img-responsive" />
    <img  src="image/demo/shop/product/e12.jpg"  title="Apple Cinema 30&quot;" class="img_0 img-responsive" />
    </div>
    <!--Sale Label-->
    <span class="label label-sale">Sale</span>
    <!--full quick view block-->
    <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
    <!--end full quick view block-->
    </div>
    <div class="right-block">
    <div class="caption">
    <h4><a href="product.html">Apple Cinema 30&quot;</a></h4>
    <div class="ratings">
    <div class="rating-box">
    <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
    <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
    <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
    <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
    </div>
    </div>
    <div class="price">
    <span class="price-new">$74.00</span>
    <span class="price-old">$122.00</span>
    <span class="label label-percent">-40%</span>    
    </div>
    <div class="description item-desc hidden">
    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut l..</p>
    </div>
    </div>
     <div class="button-group">
    <button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs">Add to Cart</span></button>
    <button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
    <button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
     </div>
    </div><!-- right block -->
    </div>
    </div>
    </div>
    </div>
    <!-- end Related  Products-->
    </div>
    </div>
    <!--Middle Part End-->
    </div>
    

@endsection