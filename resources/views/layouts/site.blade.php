<!doctype html>
<html lang="ua" class="nojs">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Cache-Control" content="public">

    <title>Броварня Гірське | Головна</title>

    <link rel='stylesheet' id='sage/css-css'  href="{{ asset('assets/style.css') }}" type='text/css' media='all' />
    <script type='text/javascript' src="{{ asset('assets/jquery.js') }}"></script>
</head>
<body class="page">

@include('site._header')

<main class="main">
    @yield('content')
</main>

@include('site._footer')

<script type='text/javascript' src="{{ asset('assets/script.js') }}"></script>
</body>
</html>
