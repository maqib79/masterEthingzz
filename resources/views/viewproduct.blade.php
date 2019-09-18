@extends('layouts.dashboard')
@section('content')

@if (session()->has('message'))
                <div class="alert alert-success" role="alert" pt="5">
                <strong>{{session()->get('message')}}</strong>
                  </div>   
                @endif
<br>

<input type="text" class="live-search-box" placeholder="Search Product" />

<br>
      <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col-2">Product #</th>
                <th scope="col-4">Product Name</th>
                <th scope="col-2">Product Image</th>
                <th scope="col-2">Uploaded By</th>
                <th scope="col-2">Edit / Delete</th>
                <th scope="col-2">Edit Image Alt</th>
              </tr>
            </thead>
            <tbody class="live-search-list">
             
                <?php $a=1; ?>
                @foreach ($products as $item)
                <tr>
                    <th scope="row" style="width: 14%;">{{$a++}}</th>
                    <td>{{$item->ProductName}}</td>
                    <td style="width: 14%;"><img style="width:80px" src="{{asset('storage/'.$item->productimages->first()->name)}}" alt=""></td>
                    {{dump($item->productimages->first()->name)}}
                    <td style="width: 10%;">{{$item->updated_at}}</td>
                    <td style="width: 12%; padding: 6px 0 0 15px;">
                        
                    <a href="product/{{$item->id}}/edit"><button type="button" class="btn btn-primary" style="position: relative; left: -6px;">Edit</button></a>
                        
                        <form action="/admin/product/{{$item->id}}" method="POST">
                        @method('DELETE')
                        @csrf
                            <input type="submit" class="btn btn-danger" value="Delete">
                        </form>
                        </td>
                        <td>
                        <a href="/admin/productimg/{{$item->productimages->first()->product_id}}/edit" class="btn btn-info">Edit Image</a>
                        </td>
                </tr>
                @endforeach
            </tbody>
     </table>



@endsection