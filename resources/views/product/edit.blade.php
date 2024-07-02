@extends('layout')

@section('title', 'Change Products')

@section('content')
    <h1> Ubah Product {{ $products->name }} </h1>
    <form action="{{ route("product.update", $products->id) }}" method="POST" 
    class="form-control">
    @method('PATCH')
    @csrf
        {{-- Name & Unit --}}
        <div class="d-flex justify-content-between mt-2">
            <div class="mb-3 me-3 w-50">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $products->name }}">
            </div>
            <div class="mb-3 w-50">
                <label for="unit" class="form-label">Unit</label>
                <input  type="text" class="form-control" id="unit" rows="3" name="unit" value="{{ $products->unit }}">
            </div>
        </div>
        {{-- Category --}}
        <div class="mb-3 w-25">
            <label for="category_id" class="form-label">Category</label>
            <select class="form-select" id="category_id" name="category_id" value="{{ $products->category_id }}">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        {{-- Minimal Stock & Maximal Stock --}}
        <div class="d-flex justify-content-between mt-2">
            <div class="mb-3 me-3 w-50">
                <label for="minimal_stock" class="form-label">Minimal Stock</label>
                <input type="number" class="form-control" id="minimal_stock" name="minimal_stock" value="{{ $products->minimal_stock }}">
            </div>
            <div class="mb-3 w-50">
                <label for="maximal_stock" class="form-label">Maximal Stock</label>
                <input  type="number" class="form-control" id="maximal_stock" rows="3" name="maximal_stock" value="{{ $products->maximal_stock }}">
            </div>
        </div>
        {{-- Stock --}}
        <div class="mb-3 w-25">
            <label for="stock" class="form-label">Stock</label>
            <input type="number" class="form-control" id="stock" name="stock" value="{{ $products->stock }}">
        </div>
        {{-- Selling Price & Purchase Price --}}
        <div class="d-flex justify-content-between mt-2">
            <div class="mb-3 me-3 w-50">
                <label for="selling_price" class="form-label">Selling Price</label>
                <input type="number" class="form-control" id="selling_price" name="selling_price" value="{{ $products->selling_price }}">
            </div>
            <div class="mb-3 w-50">
                <label for="purchase_price" class="form-label">Purchase Price</label>
                <input  type="number" class="form-control" id="purchase_price" rows="3" name="purchase_price" value="{{ $products->purchase_price }}">
            </div>
        </div>
            
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
    <div class="mt-4">
        <a href="{{ route("product.index") }}"> <button class="btn btn-primary">Kembali</button> </a>
    </div>
@endsection