@extends('layouts.dash')
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
                <h1 style="color: blue">Product</h1>
              <br>
            </center>
          <form id="productForm" action="{{route('productStore')}}"  method="post" enctype="multipart/form-data">
              @csrf
              <input class="form-control" type="text" placeholder="Enter Product Name." name="name"><br>
              <span class="text-danger">
                  @error('name')
                  {{$message}}
                  @enderror
              </span>
              <input class="form-control" id="des" type="text" placeholder="Description" name="description"><br>
              <span class="text-danger">
                  @error('description')
                  {{$message}}
                  @enderror
              </span>
              <div class="row">
                  <div class="col">
                      <input type="price" name="price" class="form-control" placeholder="Price">
                      <span class="text-danger">
                          @error('price')
                          {{$message}}
                          @enderror
                      </span>
                  </div>
                  
                  <div class="col">
                      <input type="offerprice" name="offer_price" class="form-control" placeholder="Offer Price">
                      <span class="text-danger">
                          @error('offerprice')
                          {{$message}}
                          @enderror
                      </span>
                  </div>
                  
                  
              </div><br>
              <div class="row">
                  <div class="col">
                      <input type="text" class="form-control" name="quantity" placeholder="Quantity">
                      <span class="text-danger">
                          @error('quantity')
                          {{$message}}
                          @enderror
                      </span>
                  </div>
                  
                  <div class="col">
                    <select name="tags[]" class="form-control js-example-tokenizer" multiple>
                      <option value="" selected>Tags</option>           
                    </select>
                  </div>
              </div><br>
              <div class="mb-3">
                  <label for="formFile" class="form-label">Upload Product Image</label>
                  <input class="form-control" type="file" name="file" id="formFile">
              </div>
              <span class="text-danger">
                  @error('file')
                  {{$message}}
                  @enderror
              </span>
              <select name="" id="select0" class="form-control form-select" aria-label="Default select example">
                <option >Select any Option </option>
                <option >Select  1</option>
                <option >Select  2</option>
            </select><br><br>
              <select name="catagory_level_one_id" id="select01" class="form-control form-select" aria-label="Default select example" disabled>
                <option >Select Catogery 1</option>
                @foreach ($firstCatogery as $data)
                <option value="{{$data->id}}" >{{$data->name}}</option>
              @endforeach
            </select><br><br>
            <select id="select02" name="catagory_level_two_id" class="form-control form-select" aria-label="Default select example" disabled >
              <option >Select Catogery 2</option>
            
            </select><br><br>
            <select id="select03" name="catagory_level_three_id" class="form-control form-select" aria-label="Default select example" disabled >
              <option >Select Catogery 3</option>
            
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
  $(".js-example-tokenizer").select2({
    tags: true,
    tokenSeparators: [',', ' ']
});
  $(document).ready(function(){
  
     $('#select0').change(function (){
        $('#select01').prop('disabled',false);
    
    });
      

    $('#select01').change(function (){
     var job =  $('#select01').val();
     //alert(job);
     
     $.ajax({
           type:'POST',
           url:'{{ route('getLevelTwoFromLevelOne') }}',
           data: {
            _token : '<?php echo csrf_token() ?>',
            id : job
           },
           success:function(data) {
              console.log(data);
              let options = `<option >Select any Option</option>`;
              data.secondcats.forEach(element => {
     
                options += `<option value="${element.id}">${element.name}</option>`;

              });
              $('#select02').empty();
              $('#select02').append(options);
           }
        });
        $('#select02').prop('disabled',false);
    
    });
    $('#select02').change(function (){
     var job =  $('#select01').val();
     //alert(job);
     
     $.ajax({
           type:'POST',
           url:'{{ route('getLevelThreeFromLevelproducts') }}',
           data: {
            _token : '<?php echo csrf_token() ?>',
            id : job
           },
           success:function(data) {
              console.log(data);
              let options = `<option >Select any Option</option>`;
              data.thirdcats.forEach(element => {
     
                options += `<option value="${element.id}">${element.name}</option>`;

              });
              $('#select03').empty();
              $('#select03').append(options);
           }
        });
        $('#select03').prop('disabled',false);
    
    });
   
  });
  
 </script>

@endsection
    