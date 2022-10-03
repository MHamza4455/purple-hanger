@extends('layouts.dash')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <center><h4 style="color: blue">Update Catogery 2</h4></center>
            <form action="{{ route('catTwoupdate',$secondCatogery->id) }}"  method="post">
                @csrf
                <label for="">Name</label>
                <input type="name" class="form-control" name="name"   placeholder="Enter Name" value="{{$secondCatogery->name}}">
                <br>
                <label for="">Description</label>
                <input class="form-control" type="text" placeholder="Description" name="description" value="{{$secondCatogery->description}}"><br>
                <button type="submit" class="btn btn-primary" >Submitt</button>
            </form>
        </div>
    </div>
</div>
@endsection

