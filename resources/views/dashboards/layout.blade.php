<!DOCTYPE html>
<html>

<head>

    {{-- html head --}}
    @include('dashboards.partials._head')

</head>

<body class="hold-transition skin-yellow sidebar-mini">

<div class="wrapper">

    

    {{-- navbar --}}
    @include('dashboards.partials._navbar')

    @include('dashboards.partials._sidebars')
  

    {{-- content --}}
    <div class="content-wrapper">
        {{-- @include('partials._messages') --}}
        @yield('content')
    </div>

    {{-- sidebar control --}}

    {{-- footer --}}
    @include('dashboards.partials._footer')

</div>

    {{-- dashboard's js's --}}
    @include('dashboards.partials._scripts')

    {{-- own's page js's --}}
    @yield('scripts')

</body>

</html>