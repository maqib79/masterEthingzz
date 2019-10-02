@extends('layouts.dashboard')

@section('content')
<div class="container" pt='5'>
    <br>
<h2>Add New Product:</h2>

<br>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    
                @if (session()->has('message'))
                <div class="alert alert-success" role="alert" pt="5">
                <strong>{{session()->get('message')}}</strong>
                  </div>   
                @endif

                <form action="/admin/product/{{$product->id}}" method="POST" enctype="multipart/form-data">
                        @method('PATCH')
                      @csrf
                      <div class="form-row">
                        <div class="form-group col-md-6">
                            <div class="form-group">
                                <label>Select Category</label>
                                <select class="form-control" id="" name="category_id">
                                @foreach ($categories as $category)
                                    
                                <option value="{{$category->id}}">{{$category->CategoryName}}</option>
                                @endforeach
                                 
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                        
                          <label for="">Product Show in</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <label class="input-group-text" for="inputGroupSelect01">Select Row</label>
                                </div>
                                <select class="custom-select" id="inputGroupSelect01" name="ProductTag">
                                  <option selected>Choose...</option>
                                  <option value="Featured">Featured</option>
                                  <option value="New Release">New Release</option>
                                  <option value="Best Selling">Best Selling</option>
                                  <option value="On Sale">On Sale</option>
                                </select>
                        </div>
                    
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>Product Name:</label>
                    <input type="text" class="form-control" placeholder="Enter Product Name:" name="ProductName" value="{{$product->ProductName}}">
                        <div style="color:red">{{$errors->first('ProductName')}}</div>
                      </div>
                    
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label>Product Price:</label>
                            <input type="text" class="form-control" placeholder="Enter Product Price:" name="ProductPrice" value="{{$product->ProductPrice}}">
                            <div style="color:red">{{$errors->first('ProductPrice')}}</div>
                          </div>

                          <div class="form-group col-md-3">
                              <label>Product Sale Price:</label>
                              <input type="text" class="form-control" placeholder="Enter Product Sale Price:" name="sale" value="@foreach($product->sales as $item){{$item->sale}}@endforeach">
                              <div style="color:red"></div>
                        </div>
                  
                        <div class="form-group col-md-3">
                                      <label>Sale From:</label>
                                      <input type="date" class="form-control" placeholder="Enter Product Sale Price:" name="startdate" value="@foreach($product->sales as $item){{$item->startdate}}@endforeach">
                                      <div style="color:red"></div>
                        </div>
                  
                        <div class="form-group col-md-3">
                              <label>Sale To:</label>
                              <input type="date" class="form-control" placeholder="Enter Product Sale Price:" name="enddate" value="@foreach($product->sales as $item){{$item->enddate}}@endforeach">
                              <div style="color:red"></div>
                        </div>
                        
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                              <label for="">In Stock / Out Stock</label>
                              <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Stock</label>
                                  </div>
                                  <select class="custom-select" id="inputGroupSelect01" name="ProductInstock">
                                    <option selected>Choose...</option>
                                    <option value="1">In Stock</option>
                                    <option value="0">Out of Stock</option>
                                  </select>
                              </div>
                        </div>
                  
                        <div class="form-group col-md-3">
                              <label>Product Quantity:</label>
                              <input type="text" class="form-control" placeholder="Enter Product Qty:" name="ProductQuantity" value="{{$product->ProductQuantity}}">
                              <div style="color:red"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Product Unique SKU:</label>
                            <input type="text" class="form-control" placeholder="Enter Product SKU:" name="ProductSKU" value="{{$product->ProductSKU}}">
                            <div style="color:red">{{$errors->first('ProductSKU')}}</div>
                        </div>

                    </div>
                    <div class="form-group">
                        <label>Product Custom Link:</label>
                        <input type="text" class="form-control" placeholder="Enter Product Link:" name="ProductCustomLink" value="{{$product->ProductCustomLink}}">
                        <div style="color:red">{{$errors->first('ProductCustomLink')}}</div>
                      </div>
                    
                    
                    <div class="form-group">
                        <label>Product Title:</label>
                        <input type="text" class="form-control" placeholder="Enter Product Title:" name="ProductMtitle" value="{{$product->ProductMTitle}}">
                        <div style="color:red">{{$errors->first('ProductMtitle')}}</div>
                    </div>
                    
                    <div class="form-group">
                        <label>Product SEO Description:</label>
                        <input type="text" class="form-control" placeholder="Enter Product Description:" name="ProductMDesc" value="{{$product->ProductMDesc}}"> 
                        <div style="color:red">{{$errors->first('ProductMDesc')}}</div>
                    </div>
                    
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile" multiple name="ProductImages[]">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                        <div style="color:red">{{$errors->first('ProductImages')}}</div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Product Specification:</label>
                        <textarea class="form-control description" id="" rows="3" name="ProductDesc">{{$product->ProductDesc}}</textarea>
                        <div style="color:red">{{$errors->first('ProductDesc')}}</div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Product Long Description:</label>
                        <textarea class="form-control description" id="" rows="3" name="ProductLongDesc">{{$product->ProductLongDesc}}</textarea>
                        <div style="color:red">{{$errors->first('ProductLongDesc')}}</div>
                   </div>
                    <br>
                    <br>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline5" value="Index" class="custom-control-input" name="ProductIndex" >
                        <label class="custom-control-label" for="customRadioInline5">Index</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline6" value="Noindex" class="custom-control-input" name="ProductIndex">
                            <label class="custom-control-label" for="customRadioInline6">No-Index</label>
                          </div>
                          <div style="color:red">{{$errors->first('ProductIndex')}}</div>
                    
                    
                    <input type="submit" class="btn btn-primary mb-2" value="Add Product">
                    
                    
                    </form>
             
</div>
@endsection







