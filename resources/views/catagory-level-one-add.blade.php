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
          <center><h4 class="card-title" style="color: blue">Level 1 Registration</h4></center>
          <form action="{{route('CatOneStore')}}"  method="post">
            @csrf
            
              <label for="">Catogery Name</label>
              <input type="name" class="form-control" name="name"   placeholder="Enter Name" value="{{old('name')}}">  
              <label for="">Description</label>
              <input class="form-control" type="text" placeholder="Description" name="description"><br>
              <label for="">Status</label><br>
              <label class="switch">
                  <input type="checkbox" name="status" data-on="Active" data-off="InActive">
                  <span class="slider round"></span>
              </label><br><br>
              <button type="submit" class="btn btn-primary" onclick="myfun()">Sign in</button>
            </form>
      </div>
  </div>
</div>
@endsection
