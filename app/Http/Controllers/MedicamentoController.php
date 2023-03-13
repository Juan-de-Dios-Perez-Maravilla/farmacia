<?php

namespace App\Http\Controllers;

use App\Models\Medicamento;
use Illuminate\Http\Request;

class MedicamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medicamentos = Medicamento::get();        
        return view('medicamento.medicamento-index', compact('medicamentos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('medicamento.medicamento-form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //$medicamento = new Medicamento();
        //$medicamento->nombre = $request->nombre;
        //$medicamento->clasificacion = $request->clasificacion;
        //$medicamento->potencia = $request->potencia;
        //$medicamento->precio = $request->precio;
        //$medicamento->propiedades = $request->propiedades;
        //$medicamento->laboratorio = $request->laboratorio;
        //$medicamento->save();

        Medicamento::create($request->all());

        return redirect()->route('medicamento.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Medicamento $medicamento)
    {
        return view('medicamento.medicamento-show', compact('medicamento'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Medicamento $medicamento)
    {
        return view('medicamento.medicamento-form', compact('medicamento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Medicamento $medicamento)
    {
        Medicamento::where('id', $medicamento->id)->update($request->except('_token', '_method'));

        return redirect()->route('medicamento.show', $medicamento);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Medicamento $medicamento)
    {
        $medicamento->delete();
        return redirect()->route('medicamento.index');
    }
}
