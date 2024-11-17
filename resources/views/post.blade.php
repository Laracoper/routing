

@extends('layout.main')


@section('content')
<h2>post one</h2>

<div class="alert alert-info w-50">
    <p>{{$post->title}}</p>
    <p>{{$post->description}}</p>
    
   
</div>


<a href="{{route('posts')}}">back</a>
@endsection

@section('title', 'posts')