<div>
    @foreach ($pokeDex as $poke)
        <div class="col">
            <div class="card" style="width: 20rem;">
                <img class="card-img-top" src="{{ $poke['img'] }}" alt="Card image cap">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex flex-column align-items-center">
                        <h5 class="card-title">{{ $poke['numero'] }}. {{ ucfirst($poke['nome']) }}</h5>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col d-flex flex-column align-items-center">
                                Peso: {{ $poke['peso'] }}
                            </div>
                            <div class="col d-flex flex-column align-items-center">
                                Altura: {{ $poke['altura'] }}
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        @foreach ($poke['tipos'] as $tipo)
                            <div class="badge {{ $tipo }}"> {{ ucfirst($tipo) }}</div>
                        @endforeach
                    </li>
                </ul>
            </div>
        </div>
    @endforeach
</div>
