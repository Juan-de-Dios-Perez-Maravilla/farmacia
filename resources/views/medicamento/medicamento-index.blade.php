@extends('layouts.temp')
@section('contenido')
    <h1>Listado de Medicamentos</h1>

    <p>
        <a href="{{ route('medicamento.create') }}">Agregar Medicamento</a>
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
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($medicamentos as $medicamento)
                <tr>
                    <td>
                        <a href="{{ route('medicamento.show', $medicamento->id) }}">{{ $medicamento->nombre }}</a>
                        
                    </td>
                    <td>{{ $medicamento->clasificacion }}</td>
                    <td>{{ $medicamento->potencia }}</td>
                    <td>{{ $medicamento->precio }}</td>
                    <td>{{ $medicamento->propiedades }}</td>
                    <td>{{ $medicamento->laboratorio }}</td>
                    <td>
                        <a href="{{ route('medicamento.edit', $medicamento) }}">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection