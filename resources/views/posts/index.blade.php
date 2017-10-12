@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="well">
                <h3>
                    <a href="/posts/{{$post->id}}">{{$post->title}}</a>
                     <a href="/posts/{{$post->id}}/edit" class="btn btn-default pull-right btn-xs">Edit</a>
                </h3>
                <small>Written on {{$post->created_at}}</small>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No posts found</p>
    @endif
@endsection