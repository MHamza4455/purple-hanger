@extends('layouts.dash')
@section('content')
<div class="container">
    <div class="card">
      <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th style="font-weight: bolder;">ID</th>
                    <th style="font-weight: bolder;">TITLE</th>
                    <th style="font-weight: bolder;">DESCRIPTION</th>
                    <th style="font-weight: bolder;">PICTURE</th>
                    <th style="font-weight: bolder;">ACTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($blogs as $data)
                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->title}}</td>
                    <td>{{$data->description}}</td>
                    <td>
                        <img src="{{$data->thumbnail}}" height="50" width="50" alt="">
                    </td>
                    <td>
                        <a href="{{ route('blogDelete',$data->id) }}" onclick="return confirm('Are you Sure')"><button class="btn btn-danger">Delete</button></a>
                        <a href="{{ route('blogEdit',$data->id) }}"><button class="btn btn-secondary">Edit</button></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
      </div>
    </div>
</div>
@endsection