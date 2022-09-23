@extends('layouts.dash')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <center><h4 style="color: blue">Update Catogery 3</h4></center>
            <form action="{{url('/catThree/update')}}/{{$thirdCatogery->id}}"  method="post">
                @csrf
                <label for="">Name</label>
                <input type="name" class="form-control" name="name"   placeholder="Enter Name" value="{{$thirdCatogery->name}}">
                <br>
                <label for="">Description</label>
                <input class="form-control" type="text" placeholder="Description" name="description" value="{{$thirdCatogery->description}}"><br>
                <button type="submit" class="btn btn-primary" >Submitt</button>
            </form>
        </div>
    </div>
</div>
@endsection

