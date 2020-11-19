@extends('layouts.app')

@section('content') 
    <!-- Creating form using Lavaravel Collective Form -->
    {!! Form::open(['action' => 'App\Http\Controllers\PostsController@store', 'method' => 'POST']) !!}
        <div class="form-grop">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Enter title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body content')}}
            {{Form::textarea('body', '', ['class' => 'form-control ckeditor', 'placeholder' => 'Enter body content'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-success'])}}
    {!! Form::close() !!}
@endsection