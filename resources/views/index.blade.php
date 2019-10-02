@extends('layouts.ething')
@section('content')
<div class=ip-header>
<h1 class=ip-logo>
<a href=index.php>
<img src="{{asset('storage/logo/theme_logo_e.png')}}">
</a>
</h1>
<div class=ip-loader>
<svg class=ip-inner width=60px height=60px viewbox="0 0 80 80">
<path id=ip-loader-circle class=ip-loader-circle d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"></path>
</svg>
</div>
</div>

<section class="so-spotlight1 ">
<div class=container>
<div class=row>
<div id=yt_header_right class="col-lg-offset-3 col-lg-9 col-md-12">
<div class="slider-container ">
<div class="module first-block">
<div class="modcontent clearfix">
</div>
</div>
{{-- @foreach ($data['Categories'] as $item)
	
	
@endforeach
{{dd($item->getParentCategory->id)}}	 --}}

<div id=so-slideshow class="col-lg-8 col-md-8 col-sm-12 col-xs-12 two-block">
<div class="module no-margin">
<div class="yt-content-slider yt-content-slider--arrow1" data-autoplay=yes data-autoheight=no data-delay=4 data-speed=0.6 data-margin=0 data-items_column0=1 data-items_column1=1 data-items_column2=1 data-items_column3=1 data-items_column4=1 data-arrows=yes data-pagination=no data-lazyload=yes data-loop=no data-hoverpause=yes>


    @foreach ($data['Banners'] as $item)
        
    <div class=yt-content-slide>
        <a href="#"><img src="{{asset('storage/'.$item->BannerImage)}}" alt=slider3 class=img-responsive></a>
    </div>
    
    @endforeach

</div>
<div class=loadeding></div>
</div>
</div>




<div class="module col-md-4  hidden-sm hidden-xs three-block ">
<div class="modcontent clearfix">
<div class=htmlcontent-block>
<ul class=htmlcontent-home>
<li>
<div class=banners>
<div>
<a href="#"><img src="{{asset('storage/images/banner1.jpg')}}" alt=banner1></a>
</div>
</div>
</li>
<li>
<div class=banners>
<div>
<a href="#"><img src="{{asset('storage/images/banner2.jpg')}}" alt=banner1></a>
</div>
</div>
</li>
<li>
<div class=banners>
<div>
<a href="#"><img src="{{asset('storage/images/banner3.jpg')}}" alt=banner1></a>
</div>
</div>
</li>
</ul>
</div>
</div>
</div>
{{-- <div class="module hidden-xs col-sm-12 four-block">
<div class="modcontent clearfix">
<div class=policy-detail>
<div class=banner-policy>
<div class="policy policy1"><a href="#"> <span class=ico-policy>&nbsp;</span> 90 day <br> money back </a></div>
<div class="policy policy2"><a href="#"> <span class=ico-policy>&nbsp;</span> In-store exchange </a></div>
<div class="policy policy3"><a href="#"> <span class=ico-policy>&nbsp;</span> lowest price guarantee </a></div>
<div class="policy policy4"><a href="#"> <span class=ico-policy>&nbsp;</span> shopping guarantee </a></div>
</div>
</div>
</div>
</div> --}}
</div>
</div>
</div>
</div>
</section>

<div class="main-container container">
<div class=row>
<div id=content class=col-sm-12>
<div class="module tab-slider titleLine">
<h3 class=modtitle>FEATURED PRODUCTS</h3>
<div id=so_listing_tabs_1 class="so-listing-tabs first-load module">
<div class=loadeding></div>
<div class=ltabs-wrap>
<div class=ltabs-tabs-container data-delay=300 data-duration=600 data-effect=starwars data-ajaxurl="" data-type_source=0 data-lg=4 data-md=3 data-sm=2 data-xs=1 data-margin=30>
<div class=ltabs-tabs-wrap>

<div class=item-sub-cat>
<ul class="ltabs-tabs cf">
<li class="ltabs-tab tab-sel" data-category-id=20 data-active-content=.items-category-20> </li>
</ul>
</div>
</div>
</div>

<div class=ltabs-items-container>


<div class="ltabs-items ltabs-items-selected items-category-20 grid" data-total=10>
<div class="ltabs-items-inner ltabs-slider ">

        @foreach ($data['FeaturedProducts'] as $item)
    
<div class="ltabs-item product-layout">
        <div class=product-item-container>
        <div class=left-block>
        <div class="product-image-container second_img ">
           
        <img src="{{asset('storage/'.$item->productimages->first()->name)}}" alt="Apple Cinema 30&quot;" class=img-responsive />
        </div>
        <span class="label label-sale">SKU: {{$item->ProductSKU}}</span>
        <a class="quickview iframe-link visible-lg" data-fancybox-type=iframe href="/quickview/{{Str::slug($item->ProductName)}}"> Quickview</a>
        </div>
        <div class=right-block>
        <div class=caption>
        <h4><a href="/product/{{Str::slug($item->ProductName)}}">{{$item->ProductName}}</a></h4>
        <div class=ratings>
        <div class=rating-box>
        <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
        <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
        <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
        <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
        </div>
        </div>
        <div class=price>
            

            
@if (strtotime($item->sales->first()->startdate)<=strtotime(date('Y-m-d')) && strtotime($item->sales->first()->enddate)>=strtotime(date('Y-m-d')))
            
            <span class=price-new>Rs: {{$item->ProductPrice}} /- PKR</span>
            <span class=price-old>Rs: {{$item->sales->first()->sale}} /- PKR</span>
                
            @else
            <span class=price-new>Rs: {{$item->ProductPrice}} /- PKR</span>
            @endif
                
            
        </div>
        </div>
        <div class=button-group>
                <form>
                        
                        <input type="hidden" name="id" value="{{$item->id}}">
                       
                        <a class="quickview iframe-link visible-lg" data-fancybox-type=iframe href="/quickview/{{Str::slug($item->ProductName)}}">
                            <button class="addToCart"  data-toggle="tooltip" title="Add to Cart" onclick=""><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button>
                        </a>
                        <button class="wishlist" type=button data-toggle=tooltip title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                       {{-- <button class=compare type=button data-toggle=tooltip title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button> --}}
                        
                </form>
        </div>
        </div>
        </div>
        
        
        </div><!-----ltabs-item product-layout----->

        @endforeach


















</div>
</div>
<div class="ltabs-items items-category-18 grid" data-total=11>
<div class=ltabs-loading></div>
</div>
<div class="ltabs-items  items-category-25 grid" data-total=11>
<div class=ltabs-loading></div>
</div>
</div>

</div>
</div>
</div><!------module tab-slider titleLine   CLOSE------>

















<div class="module tab-slider titleLine">
<h3 class=modtitle>NEW PRODUCTS</h3>
<div id=so_listing_tabs_2 class="so-listing-tabs first-load module">
<div class=loadeding></div>
<div class=ltabs-wrap>
<div class=ltabs-tabs-container data-delay=300 data-duration=600 data-effect=starwars data-ajaxurl="" data-type_source=0 data-lg=4 data-md=3 data-sm=2 data-xs=1 data-margin=30>
<div class=ltabs-tabs-wrap>
<div class=item-sub-cat>
<ul class="ltabs-tabs cf">
<li class="ltabs-tab tab-sel" data-category-id=20 data-active-content=.items-category-20></li>
<li class="ltabs-tab " data-category-id=18 data-active-content=.items-category-18></li>
<li class="ltabs-tab " data-category-id=25 data-active-content=.items-category-25></li>
</ul>
</div>
</div>
</div>
<div class=ltabs-items-container>
<div class="ltabs-items ltabs-items-selected items-category-20 grid" data-total=10>
<div class="ltabs-items-inner ltabs-slider ">
        @foreach ($data['NewReleaseProducts'] as $item)
    
        <div class="ltabs-item product-layout">
                <div class=product-item-container>
                <div class=left-block>
                <div class="product-image-container second_img ">
                <img src="{{asset('storage/'.$item->productimages->first()->name)}}" alt="Apple Cinema 30&quot;" class=img-responsive />
                </div>
                <span class="label label-sale">SKU: {{$item->ProductSKU}}</span>
                <a class="quickview iframe-link visible-lg" data-fancybox-type=iframe href="/quickview/{{Str::slug($item->ProductName)}}"> Quickview</a>
                </div>
                <div class=right-block>
                <div class=caption>
                <h4><a href="/product/{{Str::slug($item->ProductName)}}">{{$item->ProductName}}</a></h4>
                <div class=ratings>
                <div class=rating-box>
                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                </div>
                </div>
                <div class=price>
                    @if (strtotime($item->sales->first()->startdate)<=strtotime(date('Y-m-d')) && strtotime($item->sales->first()->enddate)>=strtotime(date('Y-m-d')))
                    
                    <span class=price-new>Rs: {{$item->ProductPrice}} /- PKR</span>
                    <span class=price-old>Rs: {{$item->sales->first()->sale}} /- PKR</span>
                        
                    @else
                    <span class=price-new>Rs: {{$item->ProductPrice}} /- PKR</span>
                    @endif
                        
                    
                </div>
                </div>
                <div class=button-group>
                       
                        <a class="quickview iframe-link visible-lg" data-fancybox-type=iframe href="/quickview/{{Str::slug($item->ProductName)}}">
                            <button class="addToCart"  data-toggle="tooltip" title="Add to Cart" onclick=""><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button>
                        </a>
                       {{-- <button class="wishlist" type=button data-toggle=tooltip title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                       <button class=compare type=button data-toggle=tooltip title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button> --}}
                {{-- <button class=compare type=button data-toggle=tooltip title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button> --}}
                </div>
                </div>
                </div>
                
                
                </div><!-----ltabs-item product-layout----->
        
                @endforeach
        
</div>
</div>
<div class="ltabs-items items-category-18 grid" data-total=11>
<div class=ltabs-loading></div>
</div>
<div class="ltabs-items  items-category-25 grid" data-total=11>
<div class=ltabs-loading></div>
</div>
</div>
</div>
</div>
</div>











<div class="module tab-slider titleLine">
<h3 class=modtitle>ON SALE</h3>
<div id=so_listing_tabs_3 class="so-listing-tabs first-load module">
<div class=loadeding></div>
<div class=ltabs-wrap>
<div class=ltabs-tabs-container data-delay=300 data-duration=600 data-effect=starwars data-ajaxurl="" data-type_source=0 data-lg=4 data-md=3 data-sm=2 data-xs=1 data-margin=30>
<div class=ltabs-tabs-wrap>
<div class=item-sub-cat>
<ul class="ltabs-tabs cf">
<li class="ltabs-tab tab-sel" data-category-id=20 data-active-content=.items-category-20></li>
<li class="ltabs-tab " data-category-id=18 data-active-content=.items-category-18></li>
<li class="ltabs-tab " data-category-id=25 data-active-content=.items-category-25></li>
</ul>
</div>
</div>
</div>
<div class=ltabs-items-container>
<div class="ltabs-items ltabs-items-selected items-category-20 grid" data-total=10>
<div class="ltabs-items-inner ltabs-slider ">
        @foreach ($data['OnSaleProducts'] as $item)
    
        <div class="ltabs-item product-layout">
                <div class=product-item-container>
                <div class=left-block>
                <div class="product-image-container second_img ">
                <img src="{{asset('storage/'.$item->productimages->first()->name)}}" alt="Apple Cinema 30&quot;" class=img-responsive />
                </div>
                <span class="label label-sale">SKU: {{$item->ProductSKU}}</span>
                <a class="quickview iframe-link visible-lg" data-fancybox-type=iframe href="/quickview/{{Str::slug($item->ProductName)}}"> Quickview</a>
                </div>
                <div class=right-block>
                <div class=caption>
                <h4><a href="/product/{{Str::slug($item->ProductName)}}">{{$item->ProductName}}</a></h4>
                <div class=ratings>
                <div class=rating-box>
                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                </div>
                </div>
                <div class=price>
                    @if (strtotime($item->sales->first()->startdate)<=strtotime(date('Y-m-d')) && strtotime($item->sales->first()->enddate)>=strtotime(date('Y-m-d')))
                    
                    <span class=price-new>Rs: {{$item->ProductPrice}} /- PKR</span>
                    <span class=price-old>Rs: {{$item->sales->first()->sale}} /- PKR</span>
                        
                    @else
                    <span class=price-new>Rs: {{$item->ProductPrice}} /- PKR</span>
                    @endif
                        
                    
                </div>
                </div>
                <div class=button-group>
                       
                        <a class="quickview iframe-link visible-lg" data-fancybox-type=iframe href="/quickview/{{Str::slug($item->ProductName)}}">
                            <button class="addToCart"  data-toggle="tooltip" title="Add to Cart" onclick=""><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button>
                        </a>
                       {{-- <button class="wishlist" type=button data-toggle=tooltip title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                       <button class=compare type=button data-toggle=tooltip title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button> --}}
                </div>
                </div>
                </div>
                
                
                </div><!-----ltabs-item product-layout----->
        
                @endforeach
</div>
</div>
<div class="ltabs-items items-category-18 grid" data-total=11>
<div class=ltabs-loading></div>
</div>
<div class="ltabs-items  items-category-25 grid" data-total=11>
<div class=ltabs-loading></div>
</div>
</div>
</div>
</div>
</div>









<div class="module tab-slider titleLine">
<h3 class=modtitle>BEST SELLING</h3>
<div id=so_listing_tabs_4 class="so-listing-tabs first-load module">
<div class=loadeding></div>
<div class=ltabs-wrap>
<div class=ltabs-tabs-container data-delay=300 data-duration=600 data-effect=starwars data-ajaxurl="" data-type_source=0 data-lg=4 data-md=3 data-sm=2 data-xs=1 data-margin=30>
<div class=ltabs-tabs-wrap>
<div class=item-sub-cat>
<ul class="ltabs-tabs cf">
<li class="ltabs-tab tab-sel" data-category-id=20 data-active-content=.items-category-20></li>
<li class="ltabs-tab " data-category-id=18 data-active-content=.items-category-18></li>
<li class="ltabs-tab " data-category-id=25 data-active-content=.items-category-25></li>
</ul>
</div>
</div>
</div>
<div class=ltabs-items-container>
<div class="ltabs-items ltabs-items-selected items-category-20 grid" data-total=10>
<div class="ltabs-items-inner ltabs-slider ">
        @foreach ($data['BestSellingProducts'] as $item)
    
        <div class="ltabs-item product-layout">
                <div class=product-item-container>
                <div class=left-block>
                <div class="product-image-container second_img ">
                <img src="{{asset('storage/'.$item->productimages->first()->name)}}" alt="Apple Cinema 30&quot;" class=img-responsive />
                </div>
                <span class="label label-sale">SKU: {{$item->ProductSKU}}</span>
                <a class="quickview iframe-link visible-lg" data-fancybox-type=iframe href="/quickview/{{Str::slug($item->ProductName)}}"> Quickview</a>
                </div>
                <div class=right-block>
                <div class=caption>
                <h4><a href="/product/{{Str::slug($item->ProductName)}}">{{$item->ProductName}}</a></h4>
                <div class=ratings>
                <div class=rating-box>
                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                </div>
                </div>
                <div class=price>
                    @if (strtotime($item->sales->first()->startdate)<=strtotime(date('Y-m-d')) && strtotime($item->sales->first()->enddate)>=strtotime(date('Y-m-d')))
                    
                    <span class=price-new>Rs: {{$item->ProductPrice}} /- PKR</span>
                    <span class=price-old>Rs: {{$item->sales->first()->sale}} /- PKR</span>
                        
                    @else
                    <span class=price-new>Rs: {{$item->ProductPrice}} /- PKR</span>
                    @endif
                        
                    
                </div>
                </div>
                <div class=button-group>
                
                        
                        
                                <a class="quickview iframe-link visible-lg" data-fancybox-type=iframe href="/quickview/{{Str::slug($item->ProductName)}}">
                                    <button class="addToCart"  data-toggle="tooltip" title="Add to Cart" onclick=""><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button>
                                </a>
                               {{-- <button class="wishlist" type=button data-toggle=tooltip title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                               <button class=compare type=button data-toggle=tooltip title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button> --}}
               
                       
                </div>
                
                </div>
                </div>
                
                
                </div><!-----ltabs-item product-layout----->
        
                @endforeach
</div>
</div>
<div class="ltabs-items items-category-18 grid" data-total=11>
<div class=ltabs-loading></div>
</div>
<div class="ltabs-items  items-category-25 grid" data-total=11>
<div class=ltabs-loading></div>
</div>
</div>
</div>
</div>
</div>









<div class="module no-margin titleLine ">
<h3 class=modtitle>COLLECTIONS</h3>
<div class="modcontent clearfix">
<div id=collections_block class="clearfix  block">
<ul class=width6>
<li class="collect collection_0">
<div class=color_co><a href="#">Furniture</a> </div>
</li>
<li class="collect collection_1">
<div class=color_co><a href="#">Gift idea</a> </div>
</li>
<li class="collect collection_2">
<div class=color_co><a href="#">Cool gadgets</a> </div>
</li>
<li class="collect collection_3">
<div class=color_co><a href="#">Outdoor activities</a> </div>
</li>
<li class="collect collection_4">
<div class=color_co><a href="#">Accessories for</a> </div>
</li>
<li class="collect collection_5">
<div class=color_co><a href="#">Women world</a> </div>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<section class=so-spotlight3>
<div class=container>
<div class=row>
<div id=so_categories_173761471880018 class="so-categories module titleLine preset01-4 preset02-3 preset03-3 preset04-1 preset05-1">
<h3 class=modtitle>Hot Categories</h3>
<div class=wrap-categories>
<div class="cat-wrap theme3">
<div class=content-box>
<div class=image-cat>
<a href="#" title=Automotive target=_blank>
<img src="{{asset('storage/image/demo/shop/category/automotive-motocrycle.jpg')}}" title=Automotive alt=Automotive>
</a>
<a class="btn-viewmore hidden-xs" href="#" title="View more">View more</a>
</div>
<div class=inner>
<div class=title-cat> <a href="#" title="Automotive " target=_blank>Automotive</a> </div>
<div class=child-cat>
<div class=child-cat-title> <a title="More Car Accessories" href="#" target=_blank>More Car Accessories	</a> </div>
<div class=child-cat-title> <a title="Car Alarms and Security" href="#" target=_blank>Car Alarms and Security	</a> </div>
<div class=child-cat-title> <a title="Car Audio &amp; Speakers" href="#" target=_blank>Car Audio &amp; Speakers	</a> </div>
<div class=child-cat-title> <a title="Gadgets &amp; Auto Parts" href="#" target=_blank>Gadgets &amp; Auto Parts	</a> </div>
</div>
</div>
</div>
<div class=clr1></div>
<div class=content-box>
<div class=image-cat>
<a href="#" title=Automotive target=_blank>
<img src="{{asset('storage/image/demo/shop/category/health-beauty.jpg')}}" title=Automotive alt=Automotive>
</a>
<a class="btn-viewmore hidden-xs" href="#" title="View more">View more</a>
</div>
<div class=inner>
<div class=title-cat> <a href="#" title="Health & Beauty" target=_blank>Health & Beauty</a> </div>
<div class=child-cat>
<div class=child-cat-title> <a title="More Car Accessories" href="#" target=_blank>Salon & Spa Equipment	</a> </div>
<div class=child-cat-title> <a title="Car Alarms and Security" href="#" target=_blank>Fragrances	</a> </div>
<div class=child-cat-title> <a title="Car Audio &amp; Speakers" href="#" target=_blank>Shaving & Hair Removal..	</a> </div>
<div class=child-cat-title> <a title="Gadgets &amp; Auto Parts" href="#" target=_blank>Bath & Body	</a> </div>
</div>
</div>
</div>
<div class="clr1 clr2"></div>
<div class=content-box>
<div class=image-cat>
<a href="#" title=Automotive target=_blank>
<img src="{{asset('storage/image/demo/shop/category/bags-holiday-supplies-gifts.jpg')}}" title=Automotive alt=Automotive>
</a>
<a class="btn-viewmore hidden-xs" href="#" title="View more">View more</a>
</div>
<div class=inner>
<div class=title-cat> <a href="#" title="Health & Beauty" target=_blank>Bags, Holiday Supplies</a> </div>
<div class=child-cat>
<div class=child-cat-title> <a title="More Car Accessories" href="#" target=_blank>Gift & Lifestyle Gadgets..	</a> </div>
<div class=child-cat-title> <a title="Car Alarms and Security" href="#" target=_blank>Lighter & Cigar Supplies..	</a> </div>
<div class=child-cat-title> <a title="Car Audio &amp; Speakers" href="#" target=_blank>Gift for Woman	</a> </div>
<div class=child-cat-title> <a title="Gadgets &amp; Auto Parts" href="#" target=_blank>Gift for Man	</a> </div>
</div>
</div>
</div>
<div class="clr1 clr3"></div>
<div class=content-box>
<div class=image-cat>
<a href="#" title=Automotive target=_blank>
<img src="{{asset('storage/image/demo/shop/category/toys-hobbies.jpg')}}" title=Automotive alt=Automotive>
</a>
<a class="btn-viewmore hidden-xs" href="#" title="View more">View more</a>
</div>
<div class=inner>
<div class=title-cat> <a href="#" title="Health & Beauty" target=_blank>Toys & Hobbies</a> </div>
<div class=child-cat>
<div class=child-cat-title> <a title="More Car Accessories" href="#" target=_blank>Helicopters & Parts	</a> </div>
<div class=child-cat-title> <a title="Car Alarms and Security" href="#" target=_blank>RC Cars & Parts	</a> </div>
<div class=child-cat-title> <a title="Car Audio &amp; Speakers" href="#" target=_blank>FPV System & Parts	</a> </div>
<div class=child-cat-title> <a title="Gadgets &amp; Auto Parts" href="#" target=_blank>Walkera	</a> </div>
</div>
</div>
</div>
<div class="clr1 clr2 clr4"></div>
<div class=content-box>
<div class=image-cat>
<a href="#" title=Automotive target=_blank>
<img src="{{asset('storage/image/demo/shop/category/electronics.jpg')}}" title=Automotive alt=Automotive>
</a>
<a class="btn-viewmore hidden-xs" href="#" title="View more">View more</a>
</div>
<div class=inner>
<div class=title-cat> <a href="#" title="Health & Beauty" target=_blank>Electronics</a> </div>
<div class=child-cat>
<div class=child-cat-title> <a title="More Car Accessories" href="#" target=_blank>Home Audio</a> </div>
<div class=child-cat-title> <a title="Car Alarms and Security" href="#" target=_blank>Mp3 Players & Accessories..	</a> </div>
<div class=child-cat-title> <a title="Car Audio &amp; Speakers" href="#" target=_blank>Headphones, Headsets</a> </div>
<div class=child-cat-title> <a title="Gadgets &amp; Auto Parts" href="#" target=_blank>Battereries & Chargers..	</a> </div>
</div>
</div>
</div>
<div class="clr1 clr5"></div>
<div class=content-box>
<div class=image-cat>
<a href="#" title=Automotive target=_blank>
<img src="{{asset('storage/image/demo/shop/category/jewelry-watches.jpg')}}" title=Automotive alt=Automotive>
</a>
<a class="btn-viewmore hidden-xs" href="#" title="View more">View more</a>
</div>
<div class=inner>
<div class=title-cat> <a href="#" title="Health & Beauty" target=_blank>Jewelry & Watches</a> </div>
<div class=child-cat>
<div class=child-cat-title> <a title="More Car Accessories" href="#" target=_blank>Men Watches	</a> </div>
<div class=child-cat-title> <a title="Car Alarms and Security" href="#" target=_blank>Wedding Rings	</a> </div>
<div class=child-cat-title> <a title="Car Audio &amp; Speakers" href="#" target=_blank>Earings	</a> </div>
</div>
</div>
</div>
<div class="clr1 clr2 clr3 clr6"></div>
<div class=content-box>
<div class=image-cat>
<a href="#" title=Automotive target=_blank>
<img src="{{asset('storage/image/demo/shop/category/sports-outdoors.jpg')}}" title=Automotive alt=Automotive>
</a>
<a class="btn-viewmore hidden-xs" href="#" title="View more">View more</a>
</div>
<div class=inner>
<div class=title-cat> <a href="#" title="Health & Beauty" target=_blank>Sports & Outdoors</a> </div>
<div class=child-cat>
<div class=child-cat-title> <a title="More Car Accessories" href="#" target=_blank>Outdoor & Traveling	</a> </div>
<div class=child-cat-title> <a title="Car Alarms and Security" href="#" target=_blank>Camping & Hiking	</a> </div>
<div class=child-cat-title> <a title="Car Audio &amp; Speakers" href="#" target=_blank>Golf Supplies	</a> </div>
<div class=child-cat-title> <a title="Gadgets &amp; Auto Parts" href="#" target=_blank>Fishing	</a> </div>
</div>
</div>
</div>
<div class=clr1></div>
<div class=content-box>
<div class=image-cat>
<a href="#" title=Automotive target=_blank>
<img src="{{asset('storage/image/demo/shop/category/smartphone-tablets.jpg')}}" title=Automotive alt=Automotive>
</a>
<a class="btn-viewmore hidden-xs" href="#" title="View more">View more</a>
</div>
<div class=inner>
<div class=title-cat> <a href="#" title="Health & Beauty" target=_blank>Smartphone & Tablets</a> </div>
<div class=child-cat>
<div class=child-cat-title> <a title="More Car Accessories" href="#" target=_blank>Accessories for iPhone	</a> </div>
<div class=child-cat-title> <a title="Car Audio &amp; Speakers" href="#" target=_blank>Accessories for i Pad	</a> </div>
<div class=child-cat-title> <a title="Gadgets &amp; Auto Parts" href="#" target=_blank>Accessories for Tablet PC	</a> </div>
</div>
</div>
</div>
<div class="clr1 clr2 clr4"></div>
</div>
</div>
</div>

</div>
</div>
</section>
<script>var $typeheader='header-home1';</script>



<!---Social Media Section Start--->
<style>
li.items.item-02.pinterest a {
    background: #e70020 !important;
    color: #fff;
}	
</style>


<section class="social-widgets">
<ul class="items social-media">
    
<li class="items item-01 facebook"> <a href="https://www.facebook.com/" target="_blank" class="tab-icon"><span class="fa fa-facebook"></span></a>
</li>

<li class="items item-02 pinterest"> <a href="https://www.pinterest.com/ethingzzshop/" target="_blank" class="tab-icon"><span class="fa fa-pinterest"></span></a>
</li>

<li class="items item-03 twitter"> <a href="https://twitter.com/ethingzz" target="_blank" class="tab-icon"><span class="fa fa-twitter"></span></a>
</li>

<li class="items item-04 youtube"> <a href="https://www.instagram.com/ethingzz/" target="_blank" class="tab-icon"><span class="fa fa-instagram"></span></a>
</li>

<!----<li class="item item-05 reddit"> <a href="https://www.reddit.com/user/ethingzzshop" target="_blank" class=tab-icon><span class="fa fa-reddit"></span></a>
</li>----->

</ul>
</section><!---Social Media Section End--->

@endsection