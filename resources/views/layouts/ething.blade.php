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

              
<script>
    
       </script>
</head><!----Top Section END----->
</head>
<body class="common-home res layout-home1">
<div id=wrapper class="wrapper-full banners-effect-7">



<!----header Section Start----->
<!-- Header Container  -->
<header id="header" class="variantleft type_1" style="display: block;">
<!-- Header Top -->
<div class="header-top ">
<div class="container">
<div class="row">
<div class="header-top-left form-inline col-sm-6 col-xs-12 compact-hidden">
<div class="form-group languages-block ">
<form action="" method=post enctype="multipart/form-data" id=bt-language>
<a class="btn btn-xs dropdown-toggle" data-toggle=dropdown>
<!-- <img src="storage/image/demo/flags/gb.png" alt=Pakistani-Rupees> -->
<span class="">Pakistan</span>
<span class="fa fa-angle-down"></span>
</a>
</form>
</div>
</div>
<div class="header-top-right collapsed-block text-right  col-sm-6 col-xs-12 compact-hidden">
<h5 class="tabBlockTitle visible-xs">More<a class="expander " href="#TabBlock-1"><i class="fa fa-angle-down"></i></a></h5>
<div class=tabBlock id=TabBlock-1>
<ul class="top-link_cus list-inline">
<li class=account_cus id=my_account_cus>
<a href="#" title="My Account" class="btn btn-xs dropdown-toggle" data-toggle=dropdown> <span><i class="fa fa-user" aria-hidden="true"></i> My Account</span> <span class="fa fa-angle-down"></span></a>
<ul class="dropdown-menu ">
<li><a href=register.php><i class="fa fa-user"></i> Register</a></li>
<li><a href=login.php><i class="fa fa-pencil-square-o"></i> Login</a></li>
</ul>
</li>
<li class=wishlist_cus><a href=wishlist.php id=wishlist-total_cus class=top-link-wishlist title="Wish List (2)"><span><i class="fa fa-heart" aria-hidden="true"></i> Favourite (2)</span></a></li>
<li class=login_cus><a href="/cart" title="Shopping Cart"><span><i class="fa fa-shopping-basket" aria-hidden="true"></i> Shopping Cart</span></a></li>
<li class=checkout_cus><a href="/checkout" class=top-link-checkout title=Checkout><span><i class="fa fa-shopping-cart" aria-hidden="true"></i> Checkout</span></a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="header-center left">
<div class=container>
<div class=row>
<div class="navbar-logo col-md-3 col-sm-12 col-xs-12">
<a href="/"><img src="{{asset('storage/logo/theme_logo_l.png')}}" title="Your Store" alt="Your Store"/></a>
</div>

<div id=sosearchpro class="col-sm-7 search-pro">
<form action="">
<div id=search0 class="search input-group">
<div class="select_category filter_type icon-select">
<select class=no-border name=category_id>

<option value=0>All Categories</option>
<option value=78>Apparel</option>
<option value=77>Cables &amp; Connectors</option>
<option value=82>Cameras &amp; Photo</option>
<option value=80>Flashlights &amp; Lamps</option>
<option value=81>Mobile Accessories</option>
<option value=79>Video Games</option>
<option value=20>Jewelry &amp; Watches</option>
<option value=76>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Earings</option>
<option value=26>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wedding Rings</option>
<option value=27>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Men Watches</option>
</select>
</div>
<input type="search" id="aa-search-input" class="aa-input-search form-control" placeholder="Search Product" name="search"
                    autocomplete="off" />

<span class=input-group-btn>
<button type=submit class="button-search btn btn-primary" name=submit_search><i class="fa fa-search"></i></button>

</span>
</div>
<input type=hidden name=route value="product/search"/>
</form>
</div>

<div class="col-md-2 col-sm-5 col-xs-12 shopping_cart pull-right">
<div id="mycart" class=" btn-group btn-shopping-cart">


    
</div>
</div>
</div>
</div>
</div>
<!----Side-Menu Section Start----->
<div class="header-bottom">
       
                
           
<div class="container">
<div class="row">
<div class="sidebar-menu col-md-3 col-sm-6 col-xs-12 ">
<div class="responsive so-megamenu ">
<!---<div class="so-vertical-menu no-gutter compact-hidden">---->
<div class="so-vertical-menu">
<nav class="navbar-default">
<div class="container-megamenu vertical open">
<div id="menuHeading">
<div class="megamenuToogle-wrapper">
<div class="megamenuToogle-pattern">
<div class="container">
<div>
<span></span>
<span></span>
<span></span>
</div>
All Categories
<i class="fa pull-right arrow-circle fa-chevron-circle-up"></i>
</div>
</div>
</div>
</div>
<div class="navbar-header">
<button type="button" id="show-verticalmenu" data-toggle="collapse" class="navbar-toggle fa fa-list-alt">
</button>
All Categories
</div>
<div class="vertical-wrapper" style="display: none;">
<span id="remove-verticalmenu" class="fa fa-times"></span>
<div class="megamenu-pattern">
<div class="container">
<ul class="megamenu">
<!--<li class="item-vertical style1 with-sub-menu hover">-->
<p class="close-menu" style="margin: 0 0 0px;"></p>






			

<ul class="megamenu">
     
    @foreach ($data['Categories'] as $item)
	
	<li class="item-vertical style1 with-sub-menu hover">
		<p class="close-menu"></p>
		<a href="/category/{{Str::slug($item->CategoryName)}}" class="clearfix">
			<img src="{{asset('storage/'.$item->CategoryImage)}}" style="width:40px;" alt="icon">
			<span>{{$item->CategoryName}}</span>
			<b class="caret"></b>
        </a>
        @if ($item->getChildCategories)
            
		<div class="sub-menu" data-subwidth="100" style="width: 1049px; display: none; right: 0px;">
				<div class="content" style="display: none;">
					<div class="row">
						<div class="col-sm-12">
							<div class="row">
								<div class="col-md-12 hover-menu">
									<div class="menu">
										<ul>
                                            <li>
											<p class="close-menu"></p>
                                                @foreach ($item->getChildCategories as $child)
                                                    
                                                <a href="/category/{{Str::slug($child->CategoryName)}}" class="main-menu">{{$child->CategoryName}}</a>
                                                @if (count($child->getChildCategories)>0)
                                                    <ul>
                                                            
                                                            @foreach ($child->getChildCategories as $grandchild)
                                                                
                                                              <li><a href="/category/{{Str::slug($grandchild->CategoryName)}}">{{$grandchild->CategoryName}}</a></li>
                                                            @endforeach
                                                        </ul>
                                                @endif
                                                    <p class="close-menu"></p>
                                                @endforeach
                                            </li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>   
            @endif
	
		
	</li>
	
	@endforeach
					    
		    
    {{-- <li class="item-vertical style1 with-sub-menu hover">
		<p class="close-menu"></p>
		
		<a href="https://ethingzz.com/maincategory/Fashions-Accessory" class="clearfix">
		    
			<img src="https://ethingzz.com/adminpanel.ven/superadmin/Catgeoryimages/1564729742.png" alt="icon">
			<span>Fashions Accessory</span>
			<b class="caret"></b>
		</a>
														
														
		<div class="sub-menu" data-subwidth="100" style="width: 1049px; display: none; right: 0px;">
			<div class="content" style="display: none;">
				<div class="row">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-md-8 static-menu">
								<div class="menu">
									<ul>
									    <p class="close-menu"></p>
											<a href="https://ethingzz.com/category/Hand-Bags" class="main-menu">Hand Bags </a>
											<p class="close-menu"></p>
											<a href="https://ethingzz.com/category/Kids-Fashion" class="main-menu">Kids Fashion </a>
										    <p class="close-menu"></p>
											<a href="https://ethingzz.com/category/Ladies-Shoes" class="main-menu">Ladies Shoes </a>
											<p class="close-menu"></p>
											<a href="https://ethingzz.com/category/Men-Fashion" class="main-menu">Men Fashion </a>
											<p class="close-menu"></p>
											<a href="https://ethingzz.com/category/Sandals" class="main-menu">Sandals </a>
											<p class="close-menu"></p>
											<a href="https://ethingzz.com/category/Summer-Kids-Collection" class="main-menu">Summer Kids Collection </a>
											<p class="close-menu"></p>
											<a href="https://ethingzz.com/category/Summer-Mens-Collection" class="main-menu">Summer Mens Collection </a>
											<p class="close-menu"></p>
											<a href="https://ethingzz.com/category/Summer-Womens-Collection" class="main-menu">Summer Womens Collection </a>
										    <p class="close-menu"></p>
											<a href="https://ethingzz.com/category/Winter-Kids-Collection" class="main-menu">Winter Kids Collection </a>
											<p class="close-menu"></p>
											<a href="https://ethingzz.com/category/Winter-Mens-Collection" class="main-menu">Winter Mens Collection </a>
											<p class="close-menu"></p>
											<a href="https://ethingzz.com/category/Winter-Womens-Collection" class="main-menu">Winter Womens Collection </a>
																		<p class="close-menu"></p>
											<a href="https://ethingzz.com/category/Women-Fashion" class="main-menu">Women Fashion </a>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>   
    </li> --}}
				  
                                                 
    
				
                                                 
    
                                                 
    

    
    
</ul>
</ul></div>
</div>
</div>
</div>
</nav>
</div>
</div>
</div>
<!---<div class="megamenu-hori header-bottom-right  col-md-9 col-sm-6 col-xs-12 ">--->
<div class="col-md-9 col-sm-6 col-xs-12">
<div class="responsive so-megamenu ">
<nav class="navbar-default">
<div class=" container-megamenu  horizontal">
<div class="navbar-header">
<button type="button" id="show-megamenu" data-toggle="collapse" class="navbar-toggle">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
Navigation
</div>
<div class="megamenu-wrapper">
<span id="remove-megamenu" class="fa fa-times"></span>
<div class="megamenu-pattern">
<div class="container">
<ul class="megamenu " data-transition="slide" data-animationtime="250">
<li class="home hover">


</li>
<li class="with-sub-menu hover">
<p class="close-menu"></p>
<a href="/category/fashions-accessory" class="clearfix">
<strong>Fashion</strong>
<img class="label-hot" src="https://ethingzz.com/image/theme/icons/hot-icon.png" alt="icon items">
<b class="caret"></b>
</a>

<div class="sub-menu" style="width: 100%; right: auto; display: none;">
<div class="content" style="display: none; height: 163px;">
<div class="row">
<div class="col-md-3">
<div class="column">
<div class="title-submenu">Fashions Accessory</div>
<div>
<ul class="row-list">
<li><a href="/category/men-fashion">Mens Fashion</a></li>
<li><a href="/category/women-fashion">Womens Fashion</a></li>
<li><a href="/category/kids-fashion">Kids Fashion</a></li>
</ul>
</div>
</div>
</div>
<div class="col-md-3">
<div class="column">
<div class="title-submenu">Summer Collection</div>
<div>
<ul class="row-list">
<li><a href="/category/summer-mens-collection">Mens Collection</a></li>
<li><a href="/category/summer-women-fashion">Womens Collection</a></li>
<li><a href="/category/summer-kids-fashion">Kids Collection</a></li>
</ul>
</div>
</div>
</div>
<div class="col-md-3">
<div class="column">
<div class="title-submenu">Winter Collection</div>
<div>
<ul class="row-list">
<li><a href="/category/winter-mens-collection">Mens Collection</a></li>
<li><a href="/category/winter-women-fashion">Womens Collection</a></li>
<li><a href="/category/winter-kids-fashion">Kids Collection</a></li>
</ul>
</div>
</div>
</div>
<div class="col-md-3">
<div class="column">
<div class="title-submenu">Hand Bag &amp; Sandals</div>
<div>
<ul class="row-list">
<li><a href="/category/hand-Bags">Hand Bags</a></li>
<li><a href="/category/sandals">Sandals</a></li>
<li><a href="/category/ladies-shoes">Ladies Shoes</a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div><!----sub-menu---->

</li>
<li class="with-sub-menu hover">
<p class="close-menu"></p>
<a href="/category/health-beauty" class="clearfix">
<strong>Health &amp; Beauty</strong>
<img class="label-hot" src="https://ethingzz.com/image/theme/icons/hot-icon.png" alt="icon items">
<!---<b class=caret></b>--->
</a>

</li>
<li class="with-sub-menu hover">
<p class="close-menu"></p>
<a href="/category/toys-hobbies-gifts-crafts" class="clearfix">
<strong>Toys, Hobbies, Gifts</strong>
<span class="label"></span>
<!---<b class=caret></b>--->
</a>

</li>
<li class="with-sub-menu hover">
<p class="close-menu"></p>
<a href="/category/home-garden" class="clearfix">
<strong>Home and Garden</strong>
<!---<b class=caret></b>--->
</a>

</li>

<li class="hidden-md">
<p class="close-menu"></p>
<a href="/category/islamic-accessory" class="clearfix">
<strong>Islamic Accessory</strong>
</a>
</li>

<li class="hidden-md">
<p class="close-menu"></p>
<a href="/category/other-categories" class="clearfix">
<strong>Other Categories</strong>
</a>
</li>

</ul>
</div>
</div>
</div>
</div>
</nav>
</div>
</div>
</div>
</div>
</div><!----Side-Menu Section END-----><!----header Section END----->




@yield('content')




<!---Footer Section Start--->
<footer class="footer-container type_footer1">
    <section class=footer-top>
    <div class="container content">
    <div class=row>
    <div class="col-sm-6 col-md-3 box-information">
    <div class="module clearfix">
    <h3 class=modtitle>Information</h3>
    <div class=modcontent>
    <ul class=menu>
    <li><a href=about-us.php>About Us</a></li>
    <li><a href=faq.php>FAQ</a></li>
    <li><a href=order-history.php>Order history</a></li>
    <li><a href=order-information.php>Order information</a></li>
    </ul>
    </div>
    </div>
    </div>
    <div class="col-sm-6 col-md-3 box-service">
    <div class="module clearfix">
    <h3 class=modtitle>Customer Service</h3>
    <div class=modcontent>
    <ul class=menu>
    <li><a href=contact.php>Contact Us</a></li>
    <li><a href=return.php>Returns</a></li>
    <li><a href=sitemap.php>Site Map</a></li>
    <li><a href=my-account.php>My Account</a></li>
    </ul>
    </div>
    </div>
    </div>
    <div class="col-sm-6 col-md-3 box-account">
    <div class="module clearfix">
    <h3 class=modtitle>My Account</h3>
    <div class=modcontent>
    <ul class=menu>
    <li><a href="#">Brands</a></li>
    <li><a href=gift-voucher.php>Gift Vouchers</a></li>
    <li><a href="#">Affiliates</a></li>
    <li><a href="#">Specials</a></li>
    <li><a href="#" target=_blank>Our Blog</a></li>
    </ul>
    </div>
    </div>
    </div>
    <div class="col-sm-6 col-md-3 collapsed-block ">
    <div class="module clearfix">
    <h3 class=modtitle>Contact Us	</h3>
    <div class=modcontent>
    <ul class=contact-address>
    <li><span class="fa fa-map-marker"></span> 2366 Walsh Ave. Santa Clara, CA-95051, USA</li>
    <li><span class="fa fa-envelope-o"></span> Email: <a href="#"> sales@ethingzz.com</a></li>
    <li><span class="fa fa-phone">&nbsp;</span> Phone: (+92) 3152953872 <br>Phone: (+1) 408-916-9849</li>
    </ul>
    </div>
    </div>
    </div>
    
    </div>
    </div>
    </section>
    <div class="footer-bottom-block ">
    <div class=" container">
    <div class=row>
    <div class="col-sm-5 copyright-text"> © 2019 Ethingzz. All Rights Reserved. </div>
    <div class=col-sm-7>
    <div class="block-payment text-right"><img src="{{asset('storage/image/demo/content/payment.png')}}" alt=payment title=payment></div>
    </div>
    <div class=back-to-top><i class="fa fa-angle-up"></i><span> Top </span></div>
    </div>
    </div>
    </div>
    </footer><!---Footer Section End--->
    </div>
    
    
    <div class="group-boxed change-header-type">
    <select id=change_header_type>
    </select>
    </div>
    
    
    
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
    
    <script>
        $(document).ready(function(){
            
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $("#ordertable").on("click",".qtyUpdate",function(){
        //  $(".qtyUpdate").click(function(){
            var rowId= $(this).attr("id");
    var quantity= $(this).closest('tr').find('td').eq(2).find('input').val();
            
        $.ajax({
           type:'POST',
           url:'/updatecart',
           data:{
               rowId:rowId
               ,qty:quantity
           },
           success: function(response){
                
                   cartlist();
                   refreshmycart();
            }
        });
          });
        
          $("#ordertable").on("click",".removeCart",function(){
        //  $(".qtyUpdate").click(function(){
            var rowId= $(this).attr("id");
            $.ajax({
            type:'POST',
            url:'/removecart',
            data:{
                rowId:rowId
            },
            success: function(response){
                refreshmycart();
                    
                    cartlist();
                }
            });
          });
          $("#mycart").on("click",".rmv",function(){
            var rowId= $(this).attr("id");
            $.ajax({
            type:'POST',
            url:'/removecart',
            data:{
                rowId:rowId
            },
            success: function(response){
                refreshmycart();
                    
                    cartlist();
                }
            });
                  });
                  
          function refreshmycart(){
               $.ajax({    
                    type: "GET",
                    url: "/mycart",             
                    dataType: "html",   //expect html to be returned                
                    success: function(response){                    
                        $("#mycart").html(response); 
                        }
                });
        }
        $(".xyz").click(function(){
                var qty = $("input[name=quantity]").val();
            var id = $("input[name=id]").val();
            $.ajax({
               type:'POST',
               url:'/addtocart',
               data:{id:id,qty:qty},
               success:function(data){
                cart.add(data.success, '1')
                refreshmycart();
               }
            });
                
              });
          function cartlist(){
               $.ajax({    //create an ajax request to display.php
       type: "GET",
       url: "/cartlist",             
       dataType: "html",   //expect html to be returned                
       success: function(response){                    
           $(".showcart").html(response); 
}
});
}
$("#carttable").on("click",".removeCart",function(){
        //  $(".qtyUpdate").click(function(){
            var rowId= $(this).attr("id");
            console.log('removed');
        // $.ajax({
        //    type:'POST',
        //    url:'/removecart',
        //    data:{
        //        rowId:rowId
        //    },
        //    success: function(response){
        //            cartlist();
        //            refreshmycart();
        //     }
        //      });
          });
window.onload=function(){
    
    cartlist();
    refreshmycart();
}
        });
</script>
    
    </body>
    </html>


    <!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
<script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
<script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
<script>
(function() {
var client = algoliasearch('H4G01GRPPV', 'fea95190a06f77a491ffc0f896418e62');
var index = client.initIndex('product');
var enterPressed = false;
//initialize autocomplete on search input (ID selector must match)
autocomplete('#aa-search-input',
   { hint: false }, {
       source: autocomplete.sources.hits(index, { hitsPerPage: 10 }),
       //value to be displayed in input control after user's suggestion selection
       displayKey: 'ProductName',
       //hash of templates used when rendering dataset
       templates: {
           //'suggestion' templating function used to render a single suggestion
           suggestion: function (suggestion) {
               const markup = `
                   <div class="algolia-result">
                      
                       <span>$${(suggestion.ProductPrice / 100).toFixed(2)}</span>
                   </div>
                   <div class="algolia-details">
                       <span>${suggestion._highlightResult.ProductName.value}</span>
                   </div>
               `;
               return markup;
           },
           empty: function (result) {
               return 'Sorry, we did not find any results for "' + result.query + '"';
           }
       }
   }).on('autocomplete:selected', function (event, suggestion, dataset) {
       var aa= window.location.origin + '/shop/' + suggestion.slug;
       
      var a = str.split(_highlightResult.ProductName.value).join('-'); 
       window.location.href = window.location.origin + '/search/' + a;
       enterPressed = true;
   }).on('keyup', function(event) {
       if (event.keyCode == 13 && !enterPressed) {
           window.location.href = window.location.origin + '/search/' + document.getElementById('aa-search-input').value;
       }
   });
})();
</script>