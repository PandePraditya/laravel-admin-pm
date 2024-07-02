@extends('layout')

@section('title', 'Product')

@section('content')

<div class="row">
    <div class="col">
        <div class="card">
            {{-- card header --}}
            <div class="card-header">
                <h3 class="card-title">Data Product</h3>
            </div>
            {{-- card body --}}
            <div class="card-body">
                <a href="{{ route('product.create') }}"><button class="btn btn-primary my-2"> Tambah </button></a>
                {{-- table --}}
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Unit</th>
                            <th scope="col">Minimal Stock</th>
                            <th scope="col">Maximal Stock</th>
                            <th scope="col">Stock</th>
                            <th scope="col">Selling Price</th>
                            <th scope="col">Purchase Price</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr class="align-middle">
                                {{-- <th scope="row">1</th> --}}
                                <th scope="row">{{ ($products->currentPage() - 1) * $products->perPage() + $loop->iteration }}</th>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->unit }}</td>
                                <td>{{ $product->minimal_stock }}</td>
                                <td>{{ $product->maximal_stock }}</td>
                                <td>{{ $product->stock }}</td>
                                <td>${{ $product->selling_price }}</td>
                                <td>${{ $product->purchase_price }}</td>
                                <td>
                                    <a href="{{ route('product.show', $product->id) }}"><button
                                            class="btn btn-success"> Selengkapnya </button></a>
                                    <a href="{{ route('product.edit', $product->id) }}"><button
                                            class="btn btn-warning ms-2"> Edit </button></a>
                                    <!-- Delete button -->
                                    <form action="{{ route('product.destroy', $product->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger ms-2" onclick="return confirm('Are you sure you want to delete this category?')">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                </table>
                {{-- End table --}}
                <div class="d-flex pt-3">
                    {{ $products->links() }}
                </div>
            </div>
            {{-- End card body --}}
        </div>
    </div>
</div>

@endsection