<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>@yield('title')</title>

        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" type="text/css" href="{{asset('/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
        <!-- Font Awesome -->
        <link rel="stylesheet" type="text/css" href="{{asset('/bower_components/font-awesome/css/font-awesome.min.css')}}">
        <!-- Ionicons -->
        <link rel="stylesheet" type="text/css" href="{{asset('/bower_components/Ionicons/css/ionicons.min.css')}}">
        <!-- Theme style -->
        <link rel="stylesheet" type="text/css" href="{{asset('/dist/css/AdminLTE.min.css')}}">
        <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" type="text/css" href="{{asset('/dist/css/skins/_all-skins.min.css')}}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

{{-- <link rel="stylesheet" href="{{ asset('web_asset') }}/css/style.css"> --}}
@yield('stylesheets')