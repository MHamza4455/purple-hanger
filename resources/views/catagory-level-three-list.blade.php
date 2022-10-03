@extends('layouts.dash')
@section('content')
<div class="container">
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
  @endif
  <div class="card">
      <div class="card-body" >
        <a href="{{route('CatThreeAdd')}}" style="float: right;" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">ADD</a>
          <table class="table">
              <thead>
                  <tr>
                      <th style="font-weight: bold;">Name</th>
                      <th style="font-weight: bold;">Description</th>
                      <th style="font-weight: bold;">First Catagory</th>
                      <th style="font-weight: bold;">Second Catagory</th>
                      <th style="font-weight: bold;">Status</th>
                      <th style="font-weight: bold;">Action</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($thirdCatogery as $data)
                  <tr>
                      <td>{{$data->name}}</td>
                      <td>{{$data->description}}</td>
                      <td>{{$data->firstcat->name}}</td>
                      <td>{{$data->secondcat->name}}</td>
                      <td>
                        <span class="badge bg-danger">
                          @if ($data->status == 1)
                          Active
                          @elseif ($data->status==0)
                          InActive
                          @else
                          Other 
                          @endif
                        </span>
                        </td>
                      <td>
                          <a href="{{ route('catThreedelete',$data->id) }}" onclick="return confirm('Are you Sure')"><button class="btn btn-danger">Delete</button></a>
                          <a href="{{ route('catThreeEdit',$data->id) }}"><button class="btn btn-secondary">Edit</button></a>
                      </td>
                  </tr> 
                  @endforeach
              </tbody>
          </table>
      </div>
  </div>
</div>
@endsection