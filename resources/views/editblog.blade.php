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
<h2>Edit Blog</h2>

    <form action="/admin/blog/{{$blog->id}}" method="POST" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
            <div class="form-group">
                    <label for="exampleInputEmail1">Enter Blog Name</label>
            <input type="text" class="form-control" placeholder="Blog Title" name="BlogName" value="{{$blog->BlogName}}">
            </div>
            
            <div class="form-group">
                    <label for="exampleFormControlTextarea1">Blog Content</label>
                    <textarea class="form-control description" id="exampleFormControlTextarea1" rows="3" name="BlogDesc">{{$blog->BlogDesc}}</textarea>
            </div>
            
            <div class="form-row">
                    <div class="col-md-10">
                            <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="BlogImage">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                    </div>
                    <div class="col-md-2">
                        <input class="btn btn-primary" type="submit" style="width: 100%;" value="Banner Upload">
                    </div>
            </div>
    </form>


@endsection