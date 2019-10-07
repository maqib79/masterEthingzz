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
<h2>Seo Panel</h2>

<div class="shadow p-3 mb-5 bg-white rounded">

        <form method="POST" action="/admin/seopanel/">
            @csrf
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Select Page</label>
                  <select class="form-control" id="exampleFormControlSelect1" name="WebPage">
                    @foreach ($pages as $item)
                     <option value="{{$item->id}}">{{$item->WebPage}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                        <label for="exampleFormControlInput1">SEO Page Title</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Meta Title" name="WebPageMTitle">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">SEO Page Description</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="SEO Page Description" rows="3"  name="WebPageMDesc"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea2">Page Content</label>
                    <textarea class="form-control description" id="exampleFormControlTextarea2" placeholder="Page Content Text Text Text..." rows="3" name="WebPageContent"></textarea>
                </div>
                <input type="submit" class="btn btn-primary" value="Insert Data">
        </form>
</div>



<br>
<br>
<div class="shadow p-2 mb-5 bg-white rounded">
        <table class="table">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col">Page</th>
                    <th scope="col">Meta Title</th>
                    <th scope="col">Meta Description</th>
                    <th scope="col">Page Content</th>
                  </tr>
                </thead>
                <tbody>
                 @foreach ($pages as $item)
                    <tr>
                    <th scope="row">
                        <form action="/admin/seopanel/{{$item->id}}" method="POST" >
                            {{ method_field('DELETE') }}
                            <input type="hidden" value="{{$item->id}}" name="idd">
                             <button type="submit" class="btn btn-danger">Delete</button> 
                             @csrf
                         </form>
                    </th>
                    <td>{{$item->WebPage}}</td>
                    <td>{{$item->WebPageMTitle}}</td>
                    <td>{{$item->WebPageMDesc}}</td>
                    <td>{{$item->WebPageContent}}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
</div>






@yield('modal')
</div>






@endsection


