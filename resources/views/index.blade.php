@extends('layout.master')

@section('title')
    Posts
@endsection

@section('content')
    <h1>Posts</h1>
    <div class="row gap-4">
        @foreach ($posts as $post)
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('uploads/'.$post->image) }}" class="card-img-top" alt="{{ $post->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->description }}</p>
                    <p class="card-text">{{ $post->user->name }}</p>
                    <a href="/posts/{{ $post->id }}" class="btn btn-primary">Show more</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
