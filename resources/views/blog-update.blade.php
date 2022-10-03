@extends('layouts.dash')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <center><h1 style="color: blue;">Blog update</h1></center>
            <form action="{{route('blogUpdate' , $blogs->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="title">Title:</label>
                <input type="text" name="title" class="form-control" placeholder="Tilte" value="{{$blogs->title}}"><br>
                <label for="title">Description:</label>
                <div rows="35" cols="50">
                    <textarea id="summernote" name="editordata">{{$blogs->description}}</textarea><br>
                </div>
                <label for="title">Attach Blog Image:</label>
                <input class="form-control" type="file" name="file" id="formFile" ><br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    $(document).ready(function() {
  $('#summernote').summernote();
});
</script>
@endsection