@extends('layouts.dash')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <center><h4 style="color: blue">Update Catogery 1</h4></center>
            <form action="{{url('/catOne/update')}}/{{$firstCatogery->id}}"  method="post">
                @csrf
                <label for="">Name</label>
                <input type="name" class="form-control" name="name"   placeholder="Enter Name" value="{{$firstCatogery->name}}">
                <br>
                <label for="">Description</label>
                <input class="form-control" type="text" placeholder="Description" name="description" value="{{$firstCatogery->description}}"><br>
                <button type="submit" class="btn btn-primary" >Submitt</button>
            </form>
        </div>
    </div>
</div>
@endsection

