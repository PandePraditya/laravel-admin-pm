@extends('layout')

@section('title', 'Buat Category')
    
@section('content')
    <h1> Buat Category Baru </h1>
    <form action="{{ url('category') }}" method="POST" 
    class="form-control">
    @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="description" rows="3" name="description"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
@endsection