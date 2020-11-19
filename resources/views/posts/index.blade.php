@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts)>0)
        @foreach($posts as $post)
            <div class="card card-body card-title">
            <small class="font-weight-bold">Post {{(0+$post->id)}}</small> <hr>
                <h3>{{$post->title}}</h3>
                <p>{{$post->body}}</p>
            </div>
        @endforeach
    @else
        <p>No posts found...</p>
    @endif
@endsection