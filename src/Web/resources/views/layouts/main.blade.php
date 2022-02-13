<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="{{URL::asset('css/custom.css')}}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/35499894bb.js" 
    crossorigin="anonymous"></script>
    @include('sweetalert::alert')
    {{-- <title>{{$name}}</title> --}}
</head>

<body class="font-Poppins">
    <x-navbar></x-navbar>
    @yield('container')
    <x-footer></x-footer>
</body>

</html>
