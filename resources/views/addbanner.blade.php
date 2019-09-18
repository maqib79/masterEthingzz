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
<h2>Add New Banner</h2>

<form method="POST" action="/admin/banner" enctype="multipart/form-data">
    @csrf
        <div class="form-row">
          <div class="col-md-6 mb-3">
            <label for="validationTooltip01"></label>
          <input type="text" class="form-control" placeholder="Add Banner name:" name="BannerName" value="{{old('BannerName')}}">
          </div>
          <div class="col-md-6 mb-3">
            <label for="validationTooltip02"></label>
            <div class="custom-file">
                    <input type="file" class="custom-file-input" name="BannerImage">
                    <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-10">
            <input type="text" class="form-control" id="validationTooltip03" placeholder="Banner Action Link"  name="BannerLink" value="{{old('BannerLink')}}">
          </div>
          <div class="col-md-2">
                <input type="submit"  class="btn btn-primary" style="width: 100%;" value="Banner Upload">
          </div>
        </div>
        
      </form>




@endsection