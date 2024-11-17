

@extends('layout.main')


@section('content')
<h2>slug</h2>

<div class="alert alert-info w-50">
   
   {{$name}}
   
</div>


<a href="{{route('posts')}}">back</a>
@endsection

@section('title', 'posts')