@extends('layout.app')
@section('content')
    <h1>Post</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="post">
                <h3><a href="/lsapp/public/post/{{$post->id}}">{{$post -> title}}</h3>
                <small>{{$post->created_at}}
            </div>
            <br>

        @endforeach
    @else
        <p>No Posts found</p>
    @endif
    @endsection