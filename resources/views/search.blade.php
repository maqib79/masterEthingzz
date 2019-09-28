@extends('layouts.ething')
@section('content')
<div class="main-container container">
		{{-- <ul class="breadcrumb">
			<li><a href="/"><i class="fa fa-home"></i></a></li>
			@if ($data['Products']->getParentCategory)
				
		<li><a href="/category/{{Str::slug($data['Products']->getParentCategory->CategoryName)}}">{{$data['Products']->getParentCategory->CategoryName}}</a></li>
			@endif
			<li>{{$data['Products']->CategoryName}}</li>
		</ul> --}}
		
		<div class="row">
			<!--Left Part Start -->
			<aside class="col-sm-4 col-md-3" id="column-left">
				
				<div class="module latest-product titleLine">
   <h3 class="modtitle">Latest Product</h3>
   <div class="modcontent ">
		<div class="product-latest-item">
			<div class="media">
			   <div class="media-left">
				  <a href="#"><img src="image/demo/shop/product/m1.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 100px; height: 82px;"></a>
			   </div>
			   <div class="media-body">
				  <div class="caption">
					 <h4><a href="#">Sunt Molup</a></h4>
					
					 <div class="price">
						<span class="price-new">$100.00</span>
					 </div>
					 <div class="ratings">
						<div class="rating-box">
						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
						</div>
					 </div>
				  </div>
				  
			   </div>
			</div>
		</div>
		<div class="product-latest-item">
			<div class="media">
			   <div class="media-left">
				  <a href="#"><img src="image/demo/shop/product/m2.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 100px; height: 82px;"></a>
			   </div>
			   <div class="media-body">
				  <div class="caption">
					 <h4><a href="#">Et Spare</a></h4>
					
					 <div class="price">
						<span class="price-new">$99.00</span>
					 </div>
					 <div class="ratings">
						<div class="rating-box">
						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
						   <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
						</div>
					 </div>
				  </div>
				  
			   </div>
			</div>
		</div>
		<div class="product-latest-item">
			<div class="media">
			   <div class="media-left">
				  <a href="#"><img src="image/demo/shop/product/18.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 100px; height: 82px;"></a>
			   </div>
			   <div class="media-body">
				  <div class="caption">
					 <h4><a href="#">Cisi Chicken</a></h4>
					
					 <div class="price">
						<span class="price-new">$59.00</span>
					 </div>
					 <div class="ratings">
						<div class="rating-box">
						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
						   <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
						</div>
					 </div>
				  </div>
				  
			   </div>
			</div>
		</div>
		<div class="product-latest-item transition">
			<div class="media">
			   <div class="media-left">
				  <a href="#"><img src="image/demo/shop/product/9.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 100px; height:82px;"></a>
			   </div>
			   <div class="media-body">
				  <div class="caption">
					 <h4><a href="#">Kevin Labor</a></h4>
					 <div class="price">
						<span class="price-new">$245.00</span>
					 </div>
					 <div class="ratings">
						<div class="rating-box">
						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
						   <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
						   <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
						</div>
					 </div>
				  </div>
				 
			   </div>
			</div>
		 </div>
		
		
   </div>
   
</div>

			</aside>
			<!--Left Part End -->
			
			<!--Middle Part Start-->
			<div id="content" class="col-md-9 col-sm-8">
				<div class="products-category">
					

					<!-- Filters -->
              {{-- <div class="product-filter product-filter-bottom filters-panel">
                  <div class="row">
                     <div class="short-by-show text-center col-xs-12">
                         <div class="box-pagination text-right">
								{{ $data['pro']->links() }}

                        </div>
                      </div><!----short-by-show text-center col-xs-12--->
                  </div>
               </div> --}}
					<!-- //end Filters -->
					<!--changed listings-->

					<div class="products-list row grid">
            @if (empty($data['Products']->first()))
            
                <h2>No Record Found.</h2>
            @else
                
            			
				@foreach ($data['Products'] as $products)
				<div class="col-md-4 col-sm-6 col-xs-12">
					{{-- index page product card start --}}
					<div class="ltabs-item product-layout ">
						<div class="product-item-container">
						<div class=left-block>
						<div class="product-image-container second_img ">
						<img src="{{asset('storage/'.$products->productimages->first()->name)}}" alt="Apple Cinema 30&quot;" class=img-responsive />
						</div>
						<span class="label label-sale">SKU: {{$products->ProductSKU}}</span>
						<a class="quickview iframe-link visible-lg" data-fancybox-type=iframe href="/quickview/{{Str::slug($products->ProductName)}}"> Quickview</a>
						</div>
						<div class=right-block>
						<div class=caption>
						<h4><a href="/product/{{Str::slug($products->ProductName)}}">{{$products->ProductName}}</a></h4>
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
							@if (strtotime($products->sales->first()->startdate)<=strtotime(date('Y-m-d')) && strtotime($products->sales->first()->enddate)>=strtotime(date('Y-m-d')))
							
							<span class=price-new>Rs: {{$products->ProductPrice}} /- PKR</span>
							<span class=price-old>Rs: {{$products->sales->first()->sale}} /- PKR</span>
								
							@else
							<span class=price-new>Rs: {{$products->ProductPrice}} /- PKR</span>
							@endif
								
							
						</div>
						</div>
						<div class=button-group>
						
								
								
										<a class="quickview iframe-link visible-lg" data-fancybox-type=iframe href="/quickview/{{Str::slug($products->ProductName)}}">
											<button class="addToCart"  data-toggle="tooltip" title="Add to Cart" onclick=""><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button>
										</a>
									   {{-- <button class="wishlist" type=button data-toggle=tooltip title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
									   <button class=compare type=button data-toggle=tooltip title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button> --}}
					   
							   
						</div>
						
						</div>
						</div>
						
						
						</div><!-----ltabs-item product-layout----->
										
					{{-- index page product card end --}}
					</div>
						
                @endforeach
            @endif    
                        
</div><!-----products-list row grid------>
</div>

</div>
</div>
<!--Middle Part End-->


{{-- 
<div class="product-filter product-filter-bottom filters-panel">
<p>{{$data['Products']->CategoryDescription}}</p>
</div><!-----product-filter product-filter-bottom filters-panel------> --}}

	</div>
@endsection