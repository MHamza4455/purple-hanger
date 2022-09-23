@extends('layouts.dash')

@section('content')
<div class="container">
  

  <div class="card">
    <div class="card-body">
      <form action="{{route('storeUsers')}}"  method="post" enctype="multipart/form-data">
          @csrf
            <div class="form-row">
                <div class="form-group >
                  <label for="">Name</label>
                  <input type="name" class="form-control" name="name"   placeholder="Enter Name" value="{{old('name')}}">
                  <span class="text-danger">
                    @error('name')
                    {{$message}}
                    @enderror
                </span>
                </div>
                <div class="form-group ">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email"  placeholder="Enter Email" value="{{old('email')}}">
                    <span class="text-danger">
                      @error('email')
                      {{$message}}
                      @enderror
                  </span>
                  </div>
              </div>
            <div class="form-row">
                <div class="form-group >
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password"  placeholder="Password" aria-describedby="helpid">
                    <span class="text-danger">
                      @error('password')
                      {{$message}}
                      @enderror
                  </span>
                  </div>
              <div class="form-group ">
                <label for="inputPassword4">Confirm Password</label>
                <input type="password" class="form-control"  name="password_confirmation" placeholder="Confirm Password" aria-describedby="helpid">
                <span class="text-danger">
                  @error('password_confirmation')
                  {{$message}}
                  @enderror
              </span>
              </div>
            </div>
            <br>
            <div class="mb-3">
              <label for="formFile" class="form-label">Default file input example</label>
              <input class="form-control" type="file" name="file" id="formFile">
            </div>
            <label for="permission">Role:</label>
            <select class="form-control form-select"  name="select01" id="select01">
              <option selected >Select Any Option</option>
              <option value="admin">Admin</option>
              <option value="manager">Manager</option>
              <option value="customer">Customer</option>
            </select><br><br>
            
            <div class="form-group" style="display: none;" id="permissionBox">
              <label for="permission">Choose Permissions:</label>
              <select class="form-control form-select" name="permission[]" id="permission" multiple>
                @foreach ($permissions as $data )
                  <option value="{{$data->slug}}">{{$data->name}}</option>
                @endforeach
              </select>
            </div>
            <br><br>    
            <button type="submit" class="btn btn-primary" onclick="myfun()">Submit</button>
          </form>
    </div>
  </div>
</div>
@endsection

@section('script')
<script>
  $(document).ready(function(){
    $('#select01').change(function (){
     var check =  $('#select01').val();
     $('#permissionBox').hide();
     if(check == "admin"){
      alert(check);
     }
     else if(check == 'manager'){
      $('#permissionBox').show();
     }
     else if(check == "customer"){
      alert(check);
     }
     else{
      $('#permission').prop('hidden',true);
     }
 
    });
   
  });
 </script>
@endsection