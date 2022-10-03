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
            <form action="{{route('blogStore')}}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="title">Title:</label>
                <input type="text" name="title" class="form-control" placeholder="Tilte">
                <span class="text-danger">
                    @error('title')
                    {{$message}}
                    @enderror
                </span><br>
                <label for="title">Description:</label>
                <div rows="35" cols="50">
                    <textarea id="summernote" name="editordata">Describe blog details brefily.</textarea><br>
                </div>
                <span class="text-danger">
                    @error('editordata')
                    {{$message}}
                    @enderror
                </span><br>
                <label for="title">Attach Blog Image:</label>
                <input class="form-control" type="file" name="file" id="formFile">
                <span class="text-danger">
                    @error('file')
                    {{$message}}
                    @enderror
                </span><br>
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
