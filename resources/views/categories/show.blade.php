@extends('layout')

@section('title', "Judul: $category->name")

@section('content')
    <div class="container mt-5">
        <article class="blog-post">
            <h2 class="display-5 link-body-emphasis mb-1">{{ $category->name }}</h2>
            <p class="blog-post-meta"> {{ date("d M Y H:i", strtotime($category->created_at)) }} </p>

            <p>{{ $category->description }}</p>
        </article>
        <a href="{{ route("category.index") }}"> <button class="btn btn-primary">Kembali</button> </a>
    </div>
@endsection