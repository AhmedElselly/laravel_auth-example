@extends('layout.master')

@section('title')
    Create page
@endsection

@section('content')
    <h1>Create Post</h1>
    <form action="/create" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" name='title' class="form-control" id="title" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">description</label>
          <input type="text" class="form-control" name='description' id="description" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="file" class="form-label">Image</label>
          <input type="file" class="form-control" name='image' id="file" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection