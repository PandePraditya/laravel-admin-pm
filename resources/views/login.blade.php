<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <title>Login</title>
</head>

<body>
    <div class="container-fluid vh-100">
        <div class="row d-flex justify-content-center align-items-center h-100" style="background-color: rgb(219,219,219);">
            <div class="col-lg-6 col-md-8 col-sm-12 border-dark rounded-4 bg-white shadow-lg">
                <div class="border-bottom mb-3">
                    <h1 class="text-center py-3"> Form Login </h1>
                </div>
                <form action="" method="POST">
                    <!-- Bagian tampilan input data -->
                    <div class="mx-3 mx-4"> 
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email address</label>
                            <input type="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Password</label>
                            <input type="password" class="form-control">
                        </div>

                        <!-- bagian input -->
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label" for="flexCheckDefault"> Remember me </label>
                        </div>
                        <div class="d-flex justify-content-center"> 
                            <input type="submit" value="Login" class="btn btn-primary w-50 ms-2">
                        </div>
                        
                    </div>
                    <p class="text-center d-block py-3"> Buat akun <a href="Index.html"> Register</a></p>
                </form>
                <div class="border-top">
                    <p class="text-center py-3"> Copyright by UKM CC </p> 
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>

</html>
