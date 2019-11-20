@extends('layouts.app')

@section('content')
    <h1> Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="card"><div class="p-3 border">
                <h3><a href="/comp380proj2/public/posts/{{$post->id}}">{{$post->title}}</h3>
                <small> Written on {{$post->created_at}}</small>
            </div>
            </div>
        @endforeach
    @else
        <p> No Posts Found </p>
    @endif
@endsection