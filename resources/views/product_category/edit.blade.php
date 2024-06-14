@extends('layout')

@section('title', 'Ubah Category')

@section('content')
    <h1> Ubah Category {{ $category->name }} </h1>
    <form action="{{ url("category/$category->id") }}" method="POST" 
    class="form-control">
    @method('PATCH')
    @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Konten</label>
            <textarea class="form-control" id="description" rows="3" name="description">{{ $category->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
@endsection

