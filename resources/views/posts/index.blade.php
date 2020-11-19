@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts)>0)
        @foreach($posts as $post)
            <div class="card card-body card-title">
            <a href="posts/{{$post->id}}">
                <small class="font-weight-bold">Post {{$post->id}}</small>
            </a><hr>
                <h3>{{$post->title}}</h3>
            </div>
        @endforeach
    @else
        <p>No posts found...</p>
    @endif
@endsection