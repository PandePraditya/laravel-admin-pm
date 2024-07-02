@extends('layout')

@section('title', "Judul: $products->name")

@section('content')
    <div class="container mt-5">
        <article class="blog-post">
            <h2 class="display-5 link-body-emphasis mb-1">{{ $products->name }}</h2>
            <p class="blog-post-meta"> {{ date("d M Y H:i", strtotime($products->created_at)) }} </p>

            <p>{{ $products->unit }}</p>
        </article>
        <a href="{{ route("product.index") }}"> <button class="btn btn-primary">Kembali</button></a>
    </div>
@endsection