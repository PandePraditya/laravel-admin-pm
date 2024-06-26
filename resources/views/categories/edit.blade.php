@extends('layout')

@section('title', 'Ubah Category')

@section('content')
    <h1> Ubah Category {{ $category->name }} </h1>
    <form action="{{ route("category.update", $category->id) }}" method="POST" 
    class="form-control">
    @method('PATCH')
    @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Konten</label>
            <input type="text" class="form-control" id="description" rows="3" name="description" value="{{ $category->description }}">
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
    <div class="mt-4">
        <a href="{{ route("category.index") }}"> <button class="btn btn-primary">Kembali</button> </a>
    </div>
@endsection

