<!----Top Section Start----->
<!DOCTYPE html>
<html lang=en>
<head>
<title>Ethingzz - One Stop Solution</title>
<meta charset=utf-8>
<meta name=keywords content="boostrap, responsive, html5, css3, jquery, theme, multicolor, parallax, retina, business"/>
<meta name=author content=Magentech>
<meta name=robots content="index, follow"/>
<meta name=viewport content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="shortcut icon" href="ico/favicon.png">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel=stylesheet type='text/css'>
<link rel=stylesheet href="{{ asset('css/bootstrap/css/bootstrap.min.css')}}">
<link href="{{ asset('css/font-awesome/css/font-awesome.min.css')}}" rel=stylesheet>
<link href="{{ asset('js/datetimepicker/bootstrap-datetimepicker.min.css')}}" rel=stylesheet>
<link href="{{ asset('js/owl-carousel/owl.carousel.css')}}" rel=stylesheet>
<link href="{{ asset('css/themecss/lib.css')}}" rel=stylesheet>
<link href="{{ asset('js/jquery-ui/jquery-ui.min.css')}}" rel=stylesheet>
<link href="{{ asset('css/themecss/so_megamenu.css')}}" rel=stylesheet>
<link href="{{ asset('css/themecss/so-categories.css')}}" rel=stylesheet>
<link href="{{ asset('css/themecss/so-listing-tabs.css')}}" rel=stylesheet>
<link href="{{ asset('css/themecss/so-newletter-popup.css')}}" rel=stylesheet>
<link href="{{ asset('css/footer1.css')}}" rel=stylesheet>
<link href="{{ asset('css/header1.css')}}" rel=stylesheet>
<link id=color_scheme href="{{ asset('css/theme.css')}}" rel=stylesheet>
<link href="{{ asset('css/responsive.css')}}" rel=stylesheet>
<link href="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
<meta name="csrf-token" content="{{ csrf_token() }}" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head><!----Top Section END----->
<body class="common-home res layout-home1">
<div id=wrapper class="wrapper-full banners-effect-7">
<!-- Main Container  -->
<div class="main-container container">
    {{-- <ul class="breadcrumb">
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
        <li><a href="category/{{Str::slug($data['Products']->category->CategoryName)}}">{{$data['Products']->category->CategoryName}}</a></li>
        <li><a href="/product/{{Str::slug($data['Products']->ProductName)}}">{{$data['Products']->ProductName}}</a></li>

    @endif
    
    </ul> --}}
    <div class="row">
    <!--Middle Part Start-->
    <div id="content" class="col-md-12 col-sm-12" style="margin-top: 50px;">
    <div class="product-view row">
    <div class="left-content-product col-lg-10 col-xs-12">
    <div class="row">
    <div class="content-product-left class-honizol col-sm-6 col-xs-12 ">
    <div class="large-image">
    <img itemprop="image" class="product-image-zoom" src="{{asset('storage/'.$data['Products']->productimages->first()->name)}}" data-zoom-image="{{asset('storage/'.$data['Products']->productimages->first()->name)}}" title="Bint Beef" alt="Bint Beef">
    </div>
    <div id="thumb-slider1" class="">  

        </div> 
        {{-- @foreach ($data['Products']->productimages as $item)
                
            <a data-index="0" class="img thumbnail " data-image="{{asset('storage/'.$item->name)}}" title="{{asset('storage/'.$item->alttag)}}">
                <img src="{{asset('storage/'.$item->name)}}" title="Bint Beef" alt="{{asset('storage/'.$item->alttag)}}">
            </a>
           @endforeach --}}
        
        {{-- <a data-index="0" class="img thumbnail " data-image="{{asset('storage/'.$data['Products']->productimages->first()->name)}}" title="{{asset('storage/'.$data['Products']->productimages->first()->name)}}">
            <img src="{{asset('storage/'.$data['Products']->productimages->first()->name)}}" title="" alt="{{asset('storage/'.$data['Products']->productimages->first()->name)}}">
        </a> --}}    
        
        <div class="p-small-image">
            
            @foreach ($data['Products']->productimages as $item)
            
            <img class="img thumbnail" src="{{asset('storage/'.$item->name)}}" title="Bint Beef" alt="{{asset('storage/'.$item->alttag)}}">
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
                    
        <span class=price-new>Rs: {{$data['Products']->sales->first()->sale}} /- PKR</span>
        <span class=price-old>Rs: {{$data['Products']->ProductPrice}} /- PKR</span>
            
        @else
        <span class=price-new>Rs: {{$data['Products']->ProductPrice}} /- PKR</span>
        @endif
    
</div>
    <div class="stock"><span>Availability:</span> <span class="status-stock">{{$data['Products']->ProductInstock}}</span></div>
    </div>
    
    <div class="product-box-desc">
    <div class="inner-box-desc">
    <div class="price-tax"><span>Ex Tax:</span> $60.00</div>
    <div class="brand"><span>Brand:</span><a href="#">{{$data['Products']->ProductBrand}}</a> </div>
    <div class="model"><span>Product SKU:</span>{{$data['Products']->ProductSKU}}</div>
    </div>
    </div>
    
    
    <div id="product">
    <h4>Sepcifications</h4>
    {{$data['Products']->ProductDesc}}
    <div class="image_option_type form-group required">
    <label class="control-label">Colors</label>
    <ul class="product-options clearfix"id="input-option231">
    <li class="radio">
    <label>
    <input class="image_radio" type="radio" name="option[231]" value="33">
    <img src="image/demo/colors/blue.jpg" data-original-title="blue +$12.00" class="img-thumbnail icon icon-color"> <i class="fa fa-check"></i>
    <label> </label>
    </label>
    </li>
    <li class="radio">
    <label>
    <input class="image_radio" type="radio" name="option[231]" value="34">
    <img src="image/demo/colors/brown.jpg" data-original-title="brown -$12.00" class="img-thumbnail icon icon-color"> <i class="fa fa-check"></i>
    <label> </label>
    </label>
    </li>
    <li class="radio">
    <label>
    <input class="image_radio" type="radio" name="option[231]" value="35"> <img src="image/demo/colors/green.jpg"
    data-original-title="green +$12.00" class="img-thumbnail icon icon-color"> <i class="fa fa-check"></i>
    <label> </label>
    </label>
    </li>
    <li class="selected-option">
    </li>
    </ul>
    </div>
    
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
                               {{-- <button class="addToCart"  data-toggle="tooltip" title="Add to Cart" onclick=""><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button> --}}
            <input type="hidden" name="id" value="{{$data['Products']->id}}">
            {{-- <input type="button" title="" value="Add to Cart" id="button-cart" class="btn btn-mega btn-lg" data-original-title="Add to Cart"> --}}
            {{-- <button class="addToCart"  data-toggle="tooltip" title="Add to Cart" onclick="cart.add('50');"><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button> --}}
            <p class="xyz addToCart"><i class="fa fa-shopping-cart"></i>Add to Cart</p>
        </form>
    </div>
    <div class="add-to-links wish_comp">
    <ul class="blank list-inline">
    <li class="wishlist">
    <a class="icon" data-toggle="tooltip" title=""
    onclick="wishlist.add('50');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i>
    </a>
    </li>
    <li class="compare">
    <a class="icon" data-toggle="tooltip" title=""
    onclick="compare.add('50');" data-original-title="Compare this Product"><i class="fa fa-exchange"></i>
    </a>
    </li>

<li class="addToCart">
        <a class="icon" data-toggle="tooltip" title=""
        onclick="cart.add('50');" data-original-title="Add to cart"><i class="fa fa-shopping-cart"></i>
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
    
 
    <!-- //Product Tabs -->
    
    </div>
    </div>



    <script>
            $(document).ready(function(){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
              $(".xyz").click(function(){
                var qty = $("input[name=quantity]").val();
            var id = $("input[name=id]").val();
            $.ajax({
               type:'POST',
               url:'/addtocart',
               data:{id:id,qty:qty},
               success:function(data){
                cart.add(data.success, '1')
                  
               }
            });
                
              });
            });
    </script>


      
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $("cart").click(function(e){
            alert('yes');
            // e.preventDefault();
            // var id = $("input[name=id]").val();
            // $.ajax({
            //    type:'POST',
            //    url:'/addtocart',
            //    data:{id':id},
            //    success:function(data){
            //     cart.add(data.success, '1')
                  
            //    }
            // });
        });
    </script>
    <!--Middle Part End-->
    <!---allscript Section Start--->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Include Libs & Plugins
        ============================================ -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/owl-carousel/owl.carousel.js"></script>
        <script type="text/javascript" src="js/themejs/libs.js"></script>
        <script type="text/javascript" src="js/unveil/jquery.unveil.js"></script>
        <script type="text/javascript" src="js/countdown/jquery.countdown.min.js"></script>
        <script type="text/javascript" src="js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
        <script type="text/javascript" src="js/datetimepicker/moment.js"></script>
        <script type="text/javascript" src="js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui/jquery-ui.min.js"></script>
        
        
        <!-- Theme files
        ============================================ -->
        
    
        <script src="{{ asset('js/themejs/addtocart.js')}}"></script>
        <script src="{{ asset('js/themejs/cpanel.js')}}"></script>	
        <script src="{{ asset('js/owl-carousel/owl.carousel.min.js')}}"></script>
        <script src="{{ asset('js/themejs/libs.js')}}"></script>
        <script src="{{ asset('js/modernizr/modernizr-2.6.2.min.js')}}"></script>
        <script src="{{ asset('js/themejs/application.js')}}"></script>
        <script src="{{ asset('js/themejs/homepage.js')}}"></script>
        <script src="{{ asset('js/themejs/toppanel.js')}}"></script>
        <script src="{{ asset('js/themejs/so_megamenu.js')}}"></script>
        <script src="{{ asset('js/themejs/pathLoader.js')}}"></script>
    <!---    <script src="https://ethingzz.com/js/themejs/fadeimgscroll.js"></script>---><!---allscript Section End--->
    
    
    
    </body>
    </html>
    </div>
    
