@extends('layouts.temp')
@section('contenido')
    <h1>Formulario de Medicamentos</h1>

    <p>
        <a href="{{ route('medicamento.index') }}">Listado de Medicamentos</a>
    </p>

    @if(isset($medicamento))
        <!-- Edición de medicamento-->
        <form action=" {{ route('medicamento.update', $medicamento) }}" method="POST">
            @method('PATCH')
    @else
        <!-- Creación de medicamento-->
        <form action="{{ route('medicamento.store') }}" method="POST">
    @endif


        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="{{ $medicamento->nombre ?? '' }}">
        <br>
        
        <label for="clasificacion">Clasificacion:</label>
        <input type="text" name="clasificacion" id="clasificacion" value="{{ $medicamento->clasificacion ?? '' }}">   
        <br>

        <label for="potencia">Potencia:</label>
        <input type="number" name="potencia" id="potencia" value="{{ $medicamento->potencia ?? '' }}">
        <br>

        <label for="precio">Precio:</label>
        <input type="number" name="precio" id="precio" value="{{ $medicamento->precio ?? '' }}">
        <br>

        <label for="propiedades">Propiedades:</label>
        <input type="text" name="propiedades" id="propiedades" value="{{ $medicamento->propiedades ?? '' }}">
        <br>

        <label for="laboratorio">Laboratorio:</label>
        <input type="text" name="laboratorio" id="laboratorio" value="{{ $medicamento->laboratorio ?? '' }}">
        <br>
        
        <input type="submit" value="Guardar">

        </form>
@endsection


