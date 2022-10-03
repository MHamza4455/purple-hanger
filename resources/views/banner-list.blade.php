@extends('layouts.dash')
@section('content')
<div class="container">
    <div class="card">
      <div class="card-body">
       <table class="table">
        <thead>
            <tr>
                <th style="font-weight: bolder;">Name</th>
                <th style="font-weight: bolder;">Description</th>
                <th style="font-weight: bolder;">Product ID</th>
                <th style="font-weight: bolder;">Type</th>
                <th style="font-weight: bolder;">Status</th>
                <th style="font-weight: bolder;">Picture</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($banners as $data)
            <tr>
                <td>{{$data->name}}</td>
                <td>{{$data->description}}</td>
                <td>{{$data->product_id}}</td>
                <td>{{$data->type}}</td>
                <td>{{$data->status}}</td>
                <td>
                    <img src="{{$data->external_url}}" alt="" height="50" width="50">
                </td>
            </tr>
            @endforeach
        </tbody>
       </table>
      </div>
    </div>
</div>
@endsection