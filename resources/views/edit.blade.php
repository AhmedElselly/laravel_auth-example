@extends('layout.master')

@section('title', 'Edit page')

@section('content')

    <h1>Edit {{$post->title}}</h1>
    <form action="/posts/{{$post->id}}/update" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" name='title' value="{{$post->title}}" class="form-control" id="title">
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">description</label>
          <input type="text" class="form-control" name='description' value="{{$post->description}}" id="description">
        </div>
        <div class="mb-3">
          <label for="file" class="form-label">Image</label>
          <input type="file" class="form-control" name='image' id="file">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection