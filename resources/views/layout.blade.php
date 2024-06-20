<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <title> @yield('title') </title>
</head>

<body>
    <div class="d-flex overflow-hidden">    
        @include('component.header')

        <div class="container-fluid p-0 m-2">
            
            @yield('content')

        </div>
        @include('component.footer')
    </div>
    <!-- JS bootstrap.bundle.js -->
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</body>
</html>