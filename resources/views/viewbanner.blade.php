@extends('layouts.dashboard')
@section('content')

@if (session()->has('message'))
                <div class="alert alert-success" role="alert" pt="5">
                <strong>{{session()->get('message')}}</strong>
                  </div>   
                @endif
<br>

<input type="text" class="live-search-box" placeholder="Search Banner By Name" />

<br>
      <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col-2">Banner Sr</th>
                <th scope="col-4">Banner Name</th>
                <th scope="col-2">Banner Image</th>
                <th scope="col-2">Upload Date</th>
                <th scope="col-2">Delete</th>
              </tr>
            </thead>
            <tbody class="live-search-list">
                <?php $a=1; ?>
            @foreach ($banners as $item)
                <tr>
                <th scope="row" style="width: 14%;">{{$a++}}</th>
                    <td>{{$item->BannerName}} </td>
                <td style="width: 14%;"><img style="width:80px" src="{{asset('storage/'.$item->BannerImage)}}" alt=""></td>
                    <td style="width: 10%;">{{$item->updated_at}}</td>
                    <td style="width: 12%; padding: 6px 0 0 15px;">
                    <form action="/admin/banner/{{$item->id}}" method="POST">
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger" value="Delete">
                        @csrf
                    </form>
                    </td>
                </tr>
            @endforeach  
            
        </tbody>
     </table>






@endsection