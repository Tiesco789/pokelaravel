<div>
    @foreach ($pokeDex as $poke)
        <div class="bg-red-200 shadow-md rounded-lg overflow-hidden card">
            <div class="p-4">
                <img src="{{ $poke['img'] }}" alt="Card image cap" class="w-full h-48 object-cover">
                <ul class="mt-4 space-y-2">
                    <li>
                        <h5 class="text-xl font-semibold">{{ $poke['numero'] }}. {{ ucfirst($poke['nome']) }}</h5>
                    </li>
                    <li>
                        <div class="flex justify-around mt-2">
                            <div class="text-center">
                                Peso: {{ $poke['peso'] }}
                            </div>
                            <div class="text-center">
                                Altura: {{ $poke['altura'] }}
                            </div>
                        </div>
                    </li>
                    <li class="flex flex-wrap gap-2 mt-2">
                        @foreach ($poke['tipos'] as $tipo)
                            <span class="badge bg-blue-500 text-white rounded px-2 py-1">{{ ucfirst($tipo) }}</span>
                        @endforeach
                    </li>
                </ul>
            </div>
        </div>
    @endforeach
</div>
