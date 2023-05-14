@extends('layout.app')
@section('content')
<a href="/lsapp/public/post"> Go Back </a>
<!-- to execute as html  use !!-->
    <h1>{!!$post->title!!}</h1>
    <small>Writton on {{$post->created_at}}</small>
    <div class="post">{!!$post->body!!}</div>
    <hr>
@endsection