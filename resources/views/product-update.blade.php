@extends('layouts.dash')
@section('content')
<div class="container">
    <div class="card ">
        <div class="card-body">
            <form action="{{url('/product/update')}}/{{$products->id}}" method="post" enctype="multipart/form-data">
                @csrf
                <input class="form-control" type="text" placeholder="Enter Product Name." name="name" value="{{$products->name}}"><br>
                <span class="text-danger">
                    @error('name')
                    {{$message}}
                    @enderror
                </span>
                <input class="form-control" id="des" type="text" placeholder="Description" name="description" value="{{$products->description}}"><br>
                <span class="text-danger">
                    @error('description')
                    {{$message}}
                    @enderror
                </span>
                <div class="row">
                    <div class="col">
                        <input type="price" name="price" class="form-control" placeholder="Price" value="{{$products->price}}">
                        <span class="text-danger">
                            @error('price')
                            {{$message}}
                            @enderror
                        </span>
                    </div>
                    
                    <div class="col">
                        <input type="offerprice" name="offer_price" class="form-control" placeholder="Offer Price" value="{{$products->offer_price}}">
                        <span class="text-danger">
                            @error('offerprice')
                            {{$message}}
                            @enderror
                        </span>
                    </div>
                </div><br> 
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    
</div>
@endsection