<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehiculo;
class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $vehiculos = Vehiculo::all();
        return view('vehiculo.index')->with('vehiculos', $vehiculos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vehiculo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)


    {




        $request->validate([
            'conductor' => 'required|max:10',
            'documentoconductor' => '|required|numeric|max:11',
            'modelo' => 'required|string',
            'anno' => 'required|numeric',
            'matricula' => 'required|string',
            'placa' => 'required|numeric',
            'tecnomecanica' => 'required',
            'soat' => 'required',
            'targetapropiedad' => 'required',
            'fechavencimiento' => 'required',
        ]);
        $vehiculos =  new Vehiculo();
        $vehiculos->conductor = $request->conductor;
        $vehiculos->documentoconductor = $request->documentoconductor;
        $vehiculos->modelo = $request->modelo;
        $vehiculos->anno = $request->anno;
        $vehiculos->matricula = $request->matricula;
        $vehiculos->placa = $request->placa;
        $vehiculos->tecnomecanica = $request->tecnomecanica;
        $vehiculos->soat = $request->soat;
        $vehiculos->targetapropiedad = $request->targetapropiedad;
        $vehiculos->fechavencimiento = $request->fechavencimiento;
        $vehiculos->save();

        return redirect('/vehiculos');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
