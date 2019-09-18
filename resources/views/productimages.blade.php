

@extends('layouts.dashboard')
@section('content')

@if (session()->has('message'))
                <div class="alert alert-success" role="alert" pt="5">
                <strong>{{session()->get('message')}}</strong>
                  </div>   
                @endif
<br>

<input type="text" class="live-search-box" placeholder="Search Image By Alt" />

<br>
      <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col-2">Image </th>
                <th scope="col-4">Alt Tag</th>
                <th scope="col-2" style="text-align: center;">Save / Delete</th>
              </tr>
            </thead>
            <tbody class="live-search-list">
            @foreach ($productimgs as $item)
                
            
            <tr>
                
                
                <td><img style="width:80px" src="{{asset('storage/'.$item->name)}}" alt=""></td>
                <td> 
                    <form action="/productimg/{{$item->id}}" method="POST" enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf 
                        <input type="hidden" value="{{$item->id}}" name="idd">
                        <input type="hidden" value="{{$item->name}}" name="name">
                        <input type="text" class="form-control" name="alttag" id="exampleInputEmail1" placeholder="Enter Image Alt Tag" value="{{$item->alttag}}" >
                        <input type="submit" class="btn btn-primary" value="Save" name="button">
                    </form>
                    </td>
                    <td style="padding: 13px 0px 0px 8px; text-align: center;">
                            
                        </td>
                    </tr>
            @endforeach
            </tbody>
        </table>
@endsection