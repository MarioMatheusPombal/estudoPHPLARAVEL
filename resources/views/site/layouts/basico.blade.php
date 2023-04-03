<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Laravel - @yield('titulo')</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

</head>

<body>
    @yield('navbar')
    @yield('conteudo')
</body>
</html>
