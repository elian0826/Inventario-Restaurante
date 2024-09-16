@extends('layouts.main')

@section('contenido')
<div class="container">
    <h1>Lista de Mesas</h1>
    <div class="d-flex justify-content-between mb-3">
        <a href="{{ route('mesas.create') }}" class="btn btn-primary">Agregar Mesa</a>
        <a href="{{ route('home') }}" class="btn btn-secondary">Regresar</a>
    </div>

    <div class="row mt-4">
        @foreach ($mesas as $mesa)
        <div class="col-md-3 mb-3">
            <div class="card mesa {{ $mesa->estado == 'ocupada' ? 'mesa-ocupada' : 'mesa-libre' }}">
                <div class="card-body text-center text-white">
                    <h5 class="card-title">{{ $mesa->nombre }}</h5>
                    <p class="card-text">{{ ucfirst($mesa->estado) }}</p>
                    <img src="{{ asset('images/mesa.png') }}" alt="Ícono de Mesa" class="img-fluid" style="max-height: 100px;">

                    <div class="mt-3">
                        <a href="{{ route('mesas.edit', $mesa->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('mesas.destroy', $mesa->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
