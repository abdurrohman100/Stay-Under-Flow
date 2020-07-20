<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials._head')
</head>
<body>
    <div class="site-wrap" id="home-section">
    @include('partials._header')
    @yield('content')
    </div>
</body>
@include('partials._footer')
</html>