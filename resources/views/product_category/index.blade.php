@extends('layout')

@section('title', 'Product Category')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Product Category</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="{{ url('category/create') }}" class="btn btn-primary">Create</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
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
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->description }}</td>
                            <td>
                                <a href="{{ url("category/$category->id/edit") }}"><button class="btn btn-warning"> Edit </button></a>

                                <!-- Delete button -->
                                <form action="{{ url("category/$category->id") }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Are you sure you want to delete this category?')"> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
            </table>
        </div>
    </div>
@endsection
