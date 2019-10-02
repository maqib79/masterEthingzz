@extends('layouts.dashboard')

@section('content')
<div class="container" pt='5'>
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

                    <form action="/admin/category/{{$category->id}}" method="POST" enctype="multipart/form-data">
                        @method('PATCH')
                        <div class="form-group mt-4">
                            <h3 for="exampleInputEmail1">Edit Category</h3>
                        <input type="text" class="form-control" name="CategoryName" placeholder="Add Category" value="{{$category->CategoryName}}">
                            <div style="color:red">{{$errors->first('CategoryName')}}</div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Select Perent Category</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="CategoryParent">
                                    <option value="0" > None</option>
                                
                                @foreach ($categories as $item)
                                
                                {{-- <option value="1" {{$customer->active == 'Active' ? "Selected" : ''}}> Active</option>
                                <option value="0" {{$customer->active == 'Inactive' ? "Selected" : ''}} > Inactive</option> --}}
                                   <option value="{{$item->id}}" > {{$item->CategoryName}}</option>
                                @endforeach
                            </select>
                            <div style="color:red">{{$errors->first('CategoryParent')}}</div>

                        </div>

                            <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="CategoryImage" >
                                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                            <div style="color:red">{{$errors->first('CategoryImage')}}</div>

                            </div>
<<<<<<< HEAD
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="CategoryBanner" >
                                <label class="custom-file-label" for="validatedCustomFile">Category Banner</label>
                        <div style="color:red">{{$errors->first('CategoryBanner')}}</div>
=======
                
>>>>>>> 18ec2bb4c3db57ad2fbc27761997d8892ecdcda6
                            <div class="form-group mt-4">
                                <label for="exampleInputPassword1">Category Description:</label>
                                <textarea  class="form-control description" name="CategoryDescription"  rows="3">{{$category->CategoryMDescription}}</textarea>
                                <div style="color:red">{{$errors->first('CategoryDescription')}}</div>
                           
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Category Meta Title:</label>
                                <textarea class="form-control description" name="CategoryMTitle"  rows="3">{{$category->CategoryMTitle}}</textarea>
                                <div style="color:red">{{$errors->first('CategoryMTitle')}}</div>
                            
                            </div>
                
                            <div class="form-group">
                                <label for="exampleInputPassword1">Category Meta Description:</label>
                                <textarea  class="form-control description" name="CategoryMDescription"  rows="3">{{$category->CategoryDescription}}</textarea>
                                <div style="color:red">{{$errors->first('CategoryMDescription')}}</div>
                                
                            </div>
                            
                        <input type="submit" name="btn" class="btn btn-primary mb-4" style="float: right;" value="Update Category">
                        @csrf

                    </form>
             
</div>
@endsection







