{{-- <!DOCTYPE html>
<html>
 <head>
  <title>Ajax Autocomplete Textbox in Laravel using JQuery</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
   }
  </style>
 </head>
 <body>
  <br />
  <div class="container box">
   <h3 align="center">Ajax Autocomplete Textbox in Laravel using JQuery</h3><br />
   
   <div class="form-group">
    <input type="text" name="country_name" id="country_name" class="form-control input-lg" placeholder="Enter Country Name" />
    <div id="countryList">
    </div>
   </div>
   {{ csrf_field() }}
  </div>
 </body>
</html>

<script>
$(document).ready(function(){

 $('#country_name').keyup(function(){ 
        var query = $(this).val();
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{ route('autocomplete.fetch') }}",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
           $('#countryList').fadeIn();  
                    $('#countryList').html(data);
          }
         });
        }
    });

    $(document).on('click', 'li', function(){  
        $('#country_name').val($(this).text());  
        $('#countryList').fadeOut();  
    });  

});
</script> --}}


{{-- <!DOCTYPE html>
<html>
 <head>
  <title>Ajax Autocomplete Textbox in Laravel using JQuery</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
   }
  </style>
 </head>
 <body>
        <div class="aa-input-container" id="aa-input-container">
                <input type="search" id="aa-search-input" class="aa-input-search" placeholder="Search with algolia..." name="search"
                    autocomplete="off" />
                
        </div>
           
  <br />

 </body>
</html>

<!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
<script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
<script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
<script>
(function() {
var client = algoliasearch('H4G01GRPPV', 'fea95190a06f77a491ffc0f896418e62');
var index = client.initIndex('name');
var enterPressed = false;
//initialize autocomplete on search input (ID selector must match)
autocomplete('#aa-search-input',
   { hint: false }, {
       source: autocomplete.sources.hits(index, { hitsPerPage: 10 }),
       //value to be displayed in input control after user's suggestion selection
       displayKey: 'name',
       //hash of templates used when rendering dataset
       templates: {
           //'suggestion' templating function used to render a single suggestion
           suggestion: function (suggestion) {
               const markup = `
                   <div class="algolia-result">
                      
                       <span>$${(suggestion.price / 100).toFixed(2)}</span>
                   </div>
                   <div class="algolia-details">
                       <span>${suggestion._highlightResult.email.value}</span>
                   </div>
               `;

               return markup;
           },
           empty: function (result) {
               return 'Sorry, we did not find any results for "' + result.query + '"';
           }
       }
   }).on('autocomplete:selected', function (event, suggestion, dataset) {
      // var aa= window.location.origin + '/shop/' + suggestion.slug;
       
      var a = str.split(_highlightResult.name.value).join('-'); 
       window.location.href = window.location.origin + '/search/' + a;
       enterPressed = true;
   }).on('keyup', function(event) {
       if (event.keyCode == 13 && !enterPressed) {
           window.location.href = window.location.origin + '/search/' + document.getElementById('aa-search-input').value;
       }
   });
})();

</script>
 --}}


 <!DOCTYPE html>

 <html>
 
 <head>
 
     <title>Laravel 5.7 Ajax Request example</title>
 
     <meta charset="utf-8">
 
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
 
     <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
 
     <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 
     <meta name="csrf-token" content="{{ csrf_token() }}" />
 
 </head>
 
 <body>
 
   
 
     <div class="container">
 
         <h1>Laravel 5.7 Ajax Request example</h1>
 
   
 
         <form >
 
   
 
             <div class="form-group">
 
                 <label>Name:</label>
 
                 <input type="text" name="name" class="form-control" placeholder="Name" required="">
 
             </div>
 
   
 
             <div class="form-group">
 
                 <label>Password:</label>
 
                 <input type="password" name="password" class="form-control" placeholder="Password" required="">
 
             </div>
 
    
 
             <div class="form-group">
 
                 <strong>Email:</strong>
 
                 <input type="email" name="email" class="form-control" placeholder="Email" required="">
 
             </div>
 
    
 
             <div class="form-group">
 
                 <button class="btn btn-success btn-submit">Submit</button>
 
             </div>
 
   
 
         </form>
 
     </div>
 
   
 
 </body>
 
 <script type="text/javascript">
 
    
 
     $.ajaxSetup({
 
         headers: {
 
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
 
         }
 
     });
 
    
 
     $(".btn-submit").click(function(e){
 
   
 
         e.preventDefault();
 
    
 
         var name = $("input[name=name]").val();
 
         var password = $("input[name=password]").val();
 
         var email = $("input[name=email]").val();
 
    
 
         $.ajax({
 
            type:'POST',
 
            url:'/ajaxRequest',
 
            data:{name:name, password:password, email:email},
 
            success:function(data){
 
               alert(data.success);
 
            }
 
         });
 
   
 
     });
 
 </script>
 
    
 
 </html>