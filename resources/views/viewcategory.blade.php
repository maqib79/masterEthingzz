@extends('layouts.dashboard')
@section('content')

@if (session()->has('message'))
                <div class="alert alert-success" role="alert" pt="5">
                <strong>{{session()->get('message')}}</strong>
                  </div>   
                @endif
<br>

<input type="text" class="live-search-box" placeholder="Search Category" />

<br>
      <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col-2">Category #</th>
                <th scope="col-4">Category Name</th>
                <th scope="col-2">Category Image</th>
                <th scope="col-2">Product In</th>
                <th scope="col-2">Edit / Delete</th>
              </tr>
            </thead>
            <tbody class="live-search-list">
           
              
              @foreach ($categories as $item)
                  
              <tr>
                  <th scope="row" style="width: 14%;">1</th>
                  <td>{{$item->CategoryName}}</td>
              <td style="width: 14%;"><img style="width: 80px;" src="{{asset('storage/'.$item->CategoryImage )}}" alt=""></td>
                  <td style="width: 10%;">{{$item->product->count()}}</td>
                  <td style="width: 12%; padding: 6px 0 0 15px;"><a href="/admin/category/{{$item->id}}/edit"><button type="button" class="btn btn-primary">Edit</button></a>
                    <form action="/admin/category/{{$item->id}}" method="POST">
                        @method('DELETE')
                            <input type="hidden" value="{{$item->id}}" name="idd">
                        <input type="submit" class="btn btn-danger" value="Delete">
                        @csrf
                    </form>
                </td>
                </tr>
            @endforeach
            </tbody>
     </table>






@endsection