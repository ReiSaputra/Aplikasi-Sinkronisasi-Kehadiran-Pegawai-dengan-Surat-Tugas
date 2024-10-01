<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    {{-- CSS files --}}
    @yield('utilities.css')
</head>
<body>
    {{-- Navigation Bar --}}
    @yield('nav')

    <!-- Main Content -->
    @yield('content')


    {{-- Footer --}}
    @yield('footer')
    {{-- JS Files --}}
    @yield("utilities.js")
</body>
</html>
