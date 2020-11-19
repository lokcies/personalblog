@extends('layouts.app')

@section('content') 
    <a href="/posts" class="btn btn-primary mb-5">Go Back</a>

    <div class="card card-body card-title">
        <h1>{{$post->title}}</h1>
        {{$post->body}}
    </div>
    <small>Created on {{$post->created_at}}</small>
    <hr>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-secondary">Edit Post</a>
@endsection