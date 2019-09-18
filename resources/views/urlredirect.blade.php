@extends('layouts.dashboard')
@section('content')


<br>
<h2>URL Redirect Option</h2>
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
<form action="/admin/urlredirect" method="POST">
    @csrf
        <div class="form-group">
                <label for="exampleInputEmail1">Put Old Url</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Old Url" name="OldUrl">
        </div>
        
        <div class="form-group">
                <label for="exampleInputEmail2">Put New Url</label>
                <input type="text" class="form-control" id="exampleInputEmail2" placeholder="New Url" name="NewUrl">
        </div>
        
        <input type="submit" class="btn btn-primary" value="Add URL">
</form>

@endsection