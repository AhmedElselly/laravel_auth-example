@extends('layout.master')

@section('title')
    post
@endsection

@section('content')
{{-- {{$post}} --}}
    <div class="card mb-3">
        <img src="{{asset('uploads/'.$post->image)}}" class="card-img-top" alt="{{$post->title}}">
        <div class="card-body">
            <h5 class="card-title">{{$post->title}}</h5>
            <p class="card-text">{{$post->description}}</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            <a href="/posts/{{$post->id}}/edit" class="btn btn-success">Edit</a>
            <form action="/posts/{{$post->id}}/remove" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Remove</button>
            </form>
        </div>
    </div>
@endsection
