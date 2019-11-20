@extends('layouts.app')

@section('content')
    <a href="/comp380proj2/public/posts/" class="btn btn-default"> Back </a>
    <h1 class="display-8 ">{{$post->title}}</h1>
    <div class="p-3 border">
        {{$post->body}}
    </div>
    <small>Written on {{$post->created_at}}</small>
    <hr>
    <a class="btn btn-info" href="/posts/{{$post->id}}/edit">Edit</a>
        {!!Form::open(['action' => ['PostsController@destroy', $post->id, 'method' => 'POST', 'class' => 'float-right']])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger float-right'])}}
        {!!Form::close()!!}
@endsection