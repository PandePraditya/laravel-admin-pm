@extends('layout')

@section('title', 'Product Category')

@section('content')
    <div class="row p-3">
        <div class="col">
            <div class="card">
                {{-- card header --}}
                <div class="card-header">
                    <h3 class="card-title">Data Category Products</h3>
                </div>
                {{-- card body --}}
                <div class="card-body">
                    <a href="{{ route('category.create') }}"><button class="btn btn-primary my-2"> Tambah </button></a>
                    {{-- table --}}
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr class="align-middle">
                                    {{-- <th scope="row">1</th> --}}
                                    <th scope="row">{{ ($categories->currentPage() - 1) * $categories->perPage() + $loop->iteration }}</th>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->description }}</td>
                                    <td>
                                        <a href="{{ route('category.show', $category->id) }}"><button
                                                class="btn btn-success"> Selengkapnya </button></a>
                                        <a href="{{ route('category.edit', $category->id) }}"><button
                                                class="btn btn-warning ms-2"> Edit </button></a>
                                        <!-- Delete button -->
                                        <form action="{{ route('category.destroy', $category->id) }}" method="POST"
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
                        {{ $categories->links() }}
                    </div>
                </div>
                {{-- End card body --}}
            </div>
        </div>
    </div>
@endsection
