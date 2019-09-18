@extends('layouts.dashboard')
@section('content')

@if (session()->has('message'))
                <div class="alert alert-success" role="alert" pt="5">
                <strong>{{session()->get('message')}}</strong>
                  </div>   
                @endif
<br>

<input type="text" class="live-search-box" placeholder="Search Blog" />

<br>
      <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col-2">Blog #</th>
                <th scope="col-4">Blog Name</th>
                <th scope="col-2">Blog Image</th>
                <th scope="col-2">Upload Date</th>
                <th scope="col-2">Edit / Delete</th>
              </tr>
            </thead>
            <tbody class="live-search-list">
                <?php $a=1; ?>
                @foreach ($blogs as $item)
                    
                <tr>
                <th scope="row" style="width: 14%;">{{$a++}}</th>
                    <td>{{$item->BlogName}}</td>
                <td style="width: 14%;"><img style="width: 80px" src="{{ asset('storage/'.$item->BlogImage)}}" alt=""></td>
                    <td style="width: 10%;">{{$item->updated_at}}</td>
                    <td style="width: 12%; padding: 6px 0 0 15px;">
                    <a href="/admin/blog/{{$item->id}}/edit"><button type="button" class="btn btn-primary">Edit</button></a>
                    <form action="/admin/blog/{{$item->id}}" method="POST">
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