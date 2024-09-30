@extends('components.layouts.app')

@section('content')
    <h1>Bem-vindo à PokeDex</h1>
    <livewire:poke-dex-component />

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
@endsection
