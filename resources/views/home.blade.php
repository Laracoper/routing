@extends('layout.main')


@section('content')
<h2>home page</h2>
<section class="main-block">
    <h2 class="main-block__title">
        Lorem, ipsum dolor.
    </h2>
    <p class="main-block__text ">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit corporis aut quod! Veniam magni veritatis neque dolorum a magnam eveniet sapiente itaque dolorem similique repellat, sed quae ut, tenetur earum.
    </p>
    
</section>
<a class="mt-4 btn btn-warning" href="{{route('slug','?name=')}}">SLUG</a>
@endsection

@section('title', 'home')