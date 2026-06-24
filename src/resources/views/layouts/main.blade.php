<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- @vite (['resources/css/main.css']) --}}
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        <header class="header">
            @include('layouts.header')
        </header>
        <main class="main">
            @yield('content')
        </main>
            @include('layouts.footer')
    </div>
</body>
</html>