@extends('layout')

@section('title', 'Buat Category')
    
@section('content')
    <h1> Buat Category Baru </h1>
    <form action="{{ route('category.store') }}" method="POST" class="form-control p-3">
    @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name">
            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <input class="form-control" id="description" rows="3" name="description">
            @if ($errors->has('description'))
                <span class="text-danger">{{ $errors->first('description') }}</span>
            @endif
        </div>
        <button type="submit" class="btn btn-success me-3">Simpan</button>
    </form>
    <div class="mt-4">
        <a href="{{ route("category.index") }}"> <button class="btn btn-primary">Kembali</button> </a>
    </div>
@endsection