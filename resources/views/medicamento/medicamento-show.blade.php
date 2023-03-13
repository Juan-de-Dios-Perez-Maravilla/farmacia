@extends('layouts.temp')
@section('contenido')
    <h1>Detalle del Medicamento</h1>

    <p>
        <a href="{{ route('medicamento.index') }}">Listado de Medicamentos</a>
    </p>
    
    <table border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Clasificacion</th>
                <th>Potencia</th>
                <th>Precio</th>
                <th>Propiedades</th>
                <th>Laboratorio</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $medicamento->nombre }}</td>
                <td>{{ $medicamento->clasificacion }}</td>
                <td>{{ $medicamento->potencia }}</td>
                <td>{{ $medicamento->precio }}</td>
                <td>{{ $medicamento->propiedades }}</td>
                <td>{{ $medicamento->laboratorio }}</td>
            </tr>
        </tbody>
    </table>

    <form action="{{ route('medicamento.destroy', $medicamento) }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Eliminar Medicamento">
    </form>


@endsection