<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/12.3.1/classic/ckeditor.js"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
.row {
    margin: 0px;
}
        .live-search-list {
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
padding: 1em;
background-color: rgb(244, 161, 55) !important;
-webkit-border-radius: 5px;
-moz-border-radius: 5px;
border-radius: 5px;
font-family: 'Lato', sans-serif;
color: #fff;
}
.live-search-box {
width: 100%;
display: block;
padding: 1em;
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
border: 1px solid #3498db;
-webkit-border-radius: 5px;
-moz-border-radius: 5px;
border-radius: 5px;
}
.live-search-list li {
color: fff;
list-style: none;
padding: 0;
margin: 5px 0;
}
ion-icon.md.hydrated {
    padding: 0px 15px 0 0;
    position: relative;
    top: 2px;
}
<<<<<<< HEAD
.tox.tox-tinymce {
    width: 100% !important;
}
=======

.tox.tox-tinymce {
    width: 100% !important;
}

>>>>>>> 18ec2bb4c3db57ad2fbc27761997d8892ecdcda6
    </style>
</head>




<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" style="background-color: #F4A137 !important">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{-- {{ config('app.name', 'Laravel') }}  --}}
                    <b>Ethingzz.com _ v 0.0.2</b>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>




{{-- 
        class="d-flex" --}}
<div  id="wrapper">
<div class="row">
        <!-- Sidebar -->
        <div class="col-md-2 col-sm-12 bg-light border-right border-bottom">
          <div class="list-group list-group-flush">
            <a href="#" class="list-group-item list-group-item-action bg-light"><ion-icon name="reorder"></ion-icon>Dashboard</a>
            <a href="/admin/seopanel" class="list-group-item list-group-item-action bg-light"><ion-icon name="search"></ion-icon>SEO Pannel</a>
            <a href="/admin/banner/create" class="list-group-item list-group-item-action bg-light"><ion-icon name="add"></ion-icon>Add Banners</a>
            <a href="/admin/banner" class="list-group-item list-group-item-action bg-light"><ion-icon name="expand"></ion-icon>View Banners</a>
            <a href="/admin/category/create" class="list-group-item list-group-item-action bg-light"><ion-icon name="add"></ion-icon>Add Category</a>
            <a href="/admin/category" class="list-group-item list-group-item-action bg-light"><ion-icon name="menu"></ion-icon>View Category</a>
            <a href="/admin/product/create" class="list-group-item list-group-item-action bg-light"><ion-icon name="add"></ion-icon>Add Product</a>
            <a href="/admin/product" class="list-group-item list-group-item-action bg-light"><ion-icon name="apps"></ion-icon>All Stock List</a>
            <a href="/admin/urlredirect/create" class="list-group-item list-group-item-action bg-light"><ion-icon name="refresh"></ion-icon>URL Redirect</a>
            <a href="#" class="list-group-item list-group-item-action bg-light"><ion-icon name="star-outline"></ion-icon>Aprove Review</a>
            <a href="/admin/blog/create" class="list-group-item list-group-item-action bg-light"><ion-icon name="chatbubbles"></ion-icon>Blog / Post</a>
            <a href="#" class="list-group-item list-group-item-action bg-light"><ion-icon name="radio-button-on"></ion-icon>Web Orders</a>
          </div>
        </div>
        <!-- col-4 bg-light border-right -->
    
        <!-- Page Content -->
        <div class="col-md-10 col-sm-12">
    
          <div class="container-fluid">
                {{-- <textarea class="description" name="description"></textarea> --}}
                @yield('content')
          </div>
        </div>
        <!-- col-10 -->
    
      </div>
    </div>
      <!-- /#wrapper -->

      {{-- <main class="py-4">
           
      </main> --}}

    </div>


    <script>
            $( document ).ready(function() {
            
            $('.live-search-list tr').each(function(){
            $(this).attr('data-search-term', $(this).text().toLowerCase());
            });
            
            $('.live-search-box').on('keyup', function(){
            
            var searchTerm = $(this).val().toLowerCase();
            
                $('.live-search-list tr').each(function(){
            
                    if ($(this).filter('[data-search-term *= ' + searchTerm + ']').length > 0 || searchTerm.length < 1) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
            
                });
            
            });
            
            });      
    </script>

<script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
<script>
    tinymce.init({
        selector:'textarea.description',
        width: 900,
        height: 300
    });
</script>
</body>
</html>