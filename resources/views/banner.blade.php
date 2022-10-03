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
                <h1 style="color: blue">Banner</h1>
                <br>
            </center>
            <form id="bannerForm" method="post" enctype="multipart/form-data">
                @csrf
                <div class="alert alert-success d-none" id="msg_div">
                    <span id="res_message"></span>
                </div>
                <input class="form-control" id="name" type="text" placeholder="Name" name="name"><br>
                <span class="text-danger">
                    @error('name')
                    {{$message}}
                    @enderror
                </span>
                <input class="form-control" id="description" type="text" placeholder="Description" name="description"><br>
                <span class="text-danger">
                    @error('description')
                    {{$message}}
                    @enderror
                </span>
                <input class="form-control" id="type" type="text" placeholder="Type" name="type"><br>
                <span class="text-danger">
                    @error('type')
                    {{$message}}
                    @enderror
                </span>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Upload Image</label>
                    <input class="form-control" type="file" name="file" id="file">
                </div>
                <span class="text-danger">
                    @error('file')
                    {{$message}}
                    @enderror
                </span>
                <select name="product_id" id="product_id" class="form-control form-select" aria-label="Default select example" >
                <option >Select Product</option>
                @foreach ($products as $data)
                <option value="{{$data->id}}" >{{$data->name}}</option>
                @endforeach
                </select><br><br>
                <div class="row">
                    <div class="col" >
                    <label for="formFile" class="form-label">Status</label><br>
                    <label class="switch">
                        <input type="checkbox" name="status" id="status" data-on="Active" data-off="InActive">
                        <span class="slider round"></span>
                    </label><br><br> 
                    </div>
                </div>   
                <button type="submit" name="submit" class="btn btn-primary" >Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script>
  $("#bannerForm").on("submit", function(event){
        event.preventDefault();
        var formData = new FormData(this);
        const inputs = document.querySelectorAll('#name, #description, #type, #product_id, #status, #file');
        $.ajax({
            method: "POST",
            data: formData,
            url: '{{route('bannerStore')}}',
            processData: false,
            contentType: false,
            cache: false,
            success: function (response) {
                if(response.success){
                    alert(response.message);
                    inputs.forEach(input => {
                    input.value = '';
                    });
                }
                else{
                    alert("Error");
                }
            },
            error: function (data) {
                $.each(data.responseJSON.errors, function (key, value) {
                    alert('We need you to correct or provide more information. Please check and enter correct data.')
                });
            }
        });
    });

</script>
@endsection