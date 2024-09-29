<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PokeDex</title>
    @livewireStyles

    {{-- Font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .grass {
            border: 2px solid #228B22;
            background-color: #228B22;
        }

        .poison {
            border: 2px solid #483D8B;
            background-color: #483D8B;
        }

        .fire {
            border: 2px solid #B22222;
            background-color: #B22222;
        }

        .bug {
            border: 2px solid #006400;
            background-color: #006400;
        }

        .flying {
            border: 2px solid #B0C4DE;
            background-color: #B0C4DE;
        }

        .water {
            border: 2px solid #1E90FF;
            background-color: #1E90FF;
        }

        .normal {
            border: 2px solid #BC8F8F;
            background-color: #BC8F8F;
        }

        .ice {
            border: 2px solid #ADD8E6;
            background-color: #ADD8E6;
        }

        .dragon {
            border: 2px solid #00BFFF;
            background-color: #00BFFF;
        }

        .steel {
            border: 2px solid #66CDAA;
            background-color: #66CDAA;
        }

        .fairy {
            border: 2px solid #FF00FF;
            background-color: #FF00FF;
        }

        .ground {
            border: 2px solid #A0522D;
            background-color: #A0522D;
        }

        .rock {
            border: 2px solid #8B4513;
            background-color: #8B4513;
        }

        .fighting {
            border: 2px solid #D2691E;
            background-color: #D2691E;
        }

        .psychic {
            border: 2px solid #DA70D6;
            background-color: #DA70D6;
        }

        .electric {
            border: 2px solid #F0E68C;
            background-color: #F0E68C;
            color: #000000
        }

        .ghost {
            border: 2px solid #8B008B;
            background-color: #8B008B;
        }

        .dark {
            border: 2px solid #4B0082;
            background-color: #4B0082;
        }
    </style>

</head>

<body>

    <header>
        <div class="navbar navbar-light" style="background-color: #ff00ff;">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center">
                    <strong class="text-white">Pokedex</strong>
                </a>
            </div>
        </div>
    </header>

    <main>
        <form>
            <div class="d-flex justify-content-between mt-3 mb-1">
                <div>
                    <a href="{{ route('index', ['offset' => '0']) }}">
                        <i class="fas fa-angle-double-left"></i>
                    </a>
                    <a href="{{ route('index', ['offset' => '150']) }}">
                        <i class="fas fa-angle-left"></i>
                    </a>
                    <a href="{{ route('index', ['offset' => '500']) }}">
                        <i class="fas fa-angle-right"></i>
                    </a>
                    <a href="{{ route('index', ['offset' => '900']) }}">
                        <i class="fas fa-angle-double-right"></i>
                    </a>
                </div>

                <div>
                    Pokemons por página:
                    <select class="custom-select mr-sm-2" id="page" onchange="location.href=this.value">
                        <option> - </option>
                        <option value="{{ route('index', ['limit' => '15']) }}"> 15 </option>
                        <option value="{{ route('index', ['limit' => '50']) }}"> 50 </option>
                        <option value="{{ route('index', ['limit' => '100']) }}"> 100 </option>
                    </select>
                </div>

            </div>
        </form>
        <div class="album py-5 bg-white">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 g-3">
                    <livewire:poke-dex-component />
                </div>
            </div>
        </div>
    </main>

    <footer class="text-muted py-5">
        <div class="container">
            <p class="float-end mb-1">
                <a href="#">Back to top</a>
            </p>
            <p class="mb-0">Visit the homepage <a target="_blank" href="https://pokeapi.co/">PokeAPI</a>.</p>
        </div>
    </footer>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    @livewireScripts
</body>

</html>
