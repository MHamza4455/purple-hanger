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
              <h1 style="color: blue">Level 3 Catogery</h1>
            <br>
          </center>

          <form action="{{route('catThreeStore')}}"  method="post">
            @csrf
            <input class="form-control" type="text" placeholder="Enter Name" name="name"><br>
            <input class="form-control" id="des" type="text" placeholder="Description" name="description"><br>

            <select name="" id="select0" class="form-control form-select" aria-label="Default select example">
              <option >Select any Option </option>
              <option >Select  1</option>
              <option >Select  1</option>

          </select><br><br>
            <select name="catagory_level_one_id" id="select01" class="form-control form-select" aria-label="Default select example" disabled>
              <option >Select Catogery 1</option>
          </select><br><br>
          <select id="select02" name="catagory_level_two_id" class="form-control form-select" aria-label="Default select example" disabled >
            <option >Select Catogery 2</option>
            @foreach ($secondCatogery as $data)
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
@section('script')
<script>
  $(document).ready(function(){
  
    $('#select0').change(function (){
     var job =  $('#select01').val();
     $.ajax({
           type:'POST',
           url:'{{ route('getLevelOneFromLevelThree') }}',
           data: {
            _token : '<?php echo csrf_token() ?>',
            id : job
           },
           success:function(data) {
              console.log(data);
              let options = `<option >Select Catogery 1</option>`;
              data.firstcats.forEach(element => {
     
                options += `<option value="${element.id}">${element.name}</option>`;

              });
              $('#select01').empty();
              $('#select01').append(options);
           }
        });
        $('#select01').prop('disabled',false);
    
    });
      

    $('#select01').change(function (){
     var job =  $('#select01').val();
        $('#select02').prop('disabled',false);
    
    });
   
  });
 </script>
@endsection
    



