@extends('layouts.app')

@section('content') 
    <a href="/posts" class="btn btn-primary mb-5">Go Back</a>

    <div class="card card-body card-title">
        <h1>{{$post->title}}</h1>
        {!! $post->body !!} <!-- Parsing html -->
    </div>
    <small>Created on {{$post->created_at}}</small>
    <hr>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-secondary">Edit Post</a>

    {!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST']) !!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger float-right'])}}
    {!! Form::close() !!}
@endsection