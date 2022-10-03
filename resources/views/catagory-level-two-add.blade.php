@extends('layouts.dash')

@section('css')

@endsection

@section('content')
<div class="container">
  @if(session()->has('message'))
  <div class="alert alert-success">
      {{ session()->get('message') }}
  </div>
@endif
  <div class="card">
    <div class="card-body">
      <center>
          <br>
            <h1 style="color: blue">Level Two Catogery</h1>
          <br>
        </center>
        <form action="{{route('CatTwoStore')}}"  method="post">
          @csrf
          <input class="form-control" type="text" placeholder="Enter Name" name="name"><br>
          <input class="form-control" type="text" placeholder="Description" name="description"><br>
          
          <select name="catagory_level_one_id"  class="form-control form-select" aria-label="Default select example">
            <option >Select any Option</option>
            @foreach ($firstCatogery as $data)
             <option value="{{$data->id}}" >{{$data->name}}</option>
            @endforeach
         </select><br><br>
          
          <label class="switch">
            <input type="checkbox" name="status" data-on="Active" data-off="InActive">
            <span class="slider round"></span>
          </label><br><br> 
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

  </div>
</div>
@endsection
  

    




