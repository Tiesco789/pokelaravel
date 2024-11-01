<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PokeDex</title>

    {{-- Font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body class="border-red-500">
    <header class="p-8">
        <h1 class="p-8">Bem-vindo à PokeDex</h1>
    </header>

    <main class="container">
        @yield('content') <!-- Aqui é onde o conteúdo das views que estendem este layout será inserido -->
    </main>

    <footer class="container inline-flex">
        <a href="#">Back to top</a>
        <p>Visit the homepage <a target="_blank" href="https://pokeapi.co/">PokeAPI</a>.</p>
    </footer>

    @livewireScripts
</body>

</html>
