<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ elixir('css/template.css') }}">
    @yield('css')
</head>

<body>
@include('components.navBar')

@include('components.content')

@include('components.footer')
<!-- Bootstrap core JavaScript -->
<script src="{{ elixir('js/baseJs.js') }}"></script>
@yield('js')
</body>
</html>