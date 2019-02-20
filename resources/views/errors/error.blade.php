<!DOCTYPE html>
<html lang="en">
<head>
    @include('pages.html.head')
</head>
<body>
<div id="wrapper">
    @include('pages.html.header')
    @yield('hero')
    @yield('content')
    @include('pages.html.footer')
    @include('pages.html.scripts')
</div>
</body>
</html>