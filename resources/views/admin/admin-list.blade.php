@extends('layouts.dash')
@section('content')
<div class="container">
  <div class="card">
    <div class="card-body" >
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $data )
                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    <td>
                        <img src="{{$data->path}}" height="50" width="50">
                    </td>
                    <td>
                        <a href="{{url('/userListing/delete')}}/{{$data->id}}" onclick="return confirm('Are you Sure')"><button class="btn btn-danger">Delete</button></a>
                        <a href="{{url('/userListing/edit')}}/{{$data->id}}"><button class="btn btn-secondary">Edit</button></a>
                    </td>
                </tr> 
                @endforeach
            </tbody>
        </table>
    </div>
  </div>
</div>

@endsection