@extends('layout.main')

@section('title', 'posts')

@section('content')
<h2>posts page</h2>

@foreach ($posts as $post)

<div class="alert alert-info">
    <p>{{$post->title}}</p>
    {{$post->description}}
    <a class="btn btn-link" href="{{route('post',$post->id)}}">read</a>
</div>
@endforeach
<!-- @foreach ($posts as $post)
<div class="alert alert-info">
    {{$post->title}}--// -- 
    {{$post->description}}
    <a class="btn btn-link" href="{{route('post',$post->description)}}">read</a>
</div>
@endforeach -->


<!-- <a class="btn btn-info" href="{{route('posts',$post->title)}}">one post</a> -->
@endsection

