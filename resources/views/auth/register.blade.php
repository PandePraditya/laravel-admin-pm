@extends('layout')

@section('title', 'register')

@section('content')
<body>
    <div class="container-fluid vh-100">
        <div class="row d-flex justify-content-center align-items-center h-100" style="background-color: rgb(219,219,219);">
            <div class="col-lg-6 col-md-8 col-sm-12 border-dark rounded-4 bg-white shadow-lg">
                <div class="border-bottom mb-3">
                    <h1 class="text-center py-3"> Form Register </h1>
                </div>
                <form action="{{ route('register.store') }}" method="POST">
                    @csrf
                    <!-- Bagian tampilan input data -->
                    <div class="mx-3 mx-4"> 
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="name" class="form-control" id="name" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>

                        <!-- bagian input -->
                        </div>
                        <div class="d-flex justify-content-center"> 
                            <button type="submit" class="btn btn-primary w-50">Register</button>
                        </div>
                        <p class="text-center d-block py-3"> Sudah punya akun? <a href="{{ url('login') }}"> Login </a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection