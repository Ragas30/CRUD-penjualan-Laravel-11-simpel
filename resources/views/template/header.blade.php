<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <script src="./node_modules/preline/dist/preline.js"></script>
</head>
<body class=bg-blue-500 min-h-screen">
    @include('template.navbar')
    @yield('content')
    
    
    @include('template.footer')
</body>
</html>