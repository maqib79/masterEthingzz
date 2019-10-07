@extends('layouts.dashboard')

@section('content')

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
<br>
<h2>Add New Blog</h2>

<form action="/admin/blog" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="form-group">
                <label for="exampleInputEmail1">Enter Blog Name</label>
                <input type="text" class="form-control" placeholder="Blog Title" name="BlogName">
        </div>
        
        <div class="form-group">
                <label for="exampleFormControlTextarea1">Blog Content</label>
                <textarea class="form-control description" id="exampleFormControlTextarea1" rows="3" name="BlogDesc"></textarea>
        </div>
        
        <div class="form-row">
                <div class="col-md-10">
                        <div class="custom-file">
                                <input type="file" class="custom-file-input" name="BlogImage">
<<<<<<< HEAD
                                <label class="custom-file-label" for="customFile">Choose file (Featured Image)</label>
=======
                                <label class="custom-file-label" for="customFile">Choose file (Featured Image)</label> 
>>>>>>> f33e245fb3763e505f622fee084de232eda18bd7
                        </div>
                </div>
                <div class="col-md-2">
                      <input class="btn btn-primary" type="submit" style="width: 100%;" value="Add Blog">
                </div>
        </div>
</form>


@endsection