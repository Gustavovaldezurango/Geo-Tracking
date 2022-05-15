<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehiculo;
use Validator;
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
        $validator = Validator::make($request->all(),[
            'conductor' => 'required|max:10',
            'documentoconductor' => '|required|numeric',
            'modelo' => 'required|string',
            'anno' => 'required|numeric',
            'matricula' => 'required|string',
            'placa' => 'required|numeric',
            'tecnomecanica' => 'required',
            'soat' => 'required|' ,//image|mimes:jpg,jpeg,gif,svg|max:2048',
            'targetapropiedad' => 'required',
            'fechavencimiento' => 'required',
        ]);

        if ($validator->fails()){
            return back()
            ->withInput()
            ->with('ErrorInsert', 'llenar todos los campos')
            ->withErrors($validator);
        }
        if($request->hasFile('tecnomecanica')) {
            $image = $request->file('tecnomecanica');
           //  print_r($image);
            $image_name = time().'.'.$image->getClientOriginalExtension();
           //  echo $image;
           //  exit(0);
            $destinationPath = public_path('img\vehiculo\tecnomecanica');
            $image->move($destinationPath, $image_name);
        }
        if($request->hasFile('soat')) {
            $image = $request->file('soat');
           //  print_r($image);
            $image_name = time().'.'.$image->getClientOriginalExtension();
           //  echo $image;
           //  exit(0);
            $destinationPath = public_path('img\vehiculo\soat');
            $image->move($destinationPath, $image_name);
        }
        if($request->hasFile('targetapropiedad')) {
            $image = $request->file('targetapropiedad');
           //  print_r($image);
            $image_name = time().'.'.$image->getClientOriginalExtension();
           //  echo $image;
           //  exit(0);
            $destinationPath = public_path('img\vehiculo\targetapropiedad');
            $image->move($destinationPath, $image_name);

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
            return back()->with('Listo', 'se ha creado correctamente ');
    }
}


        //$image = $request -> file('tecnomecanica');
        //$nombre =  time().'.'.$image->getClienteOriginalExtension();
        //$destino = public_path('img/vehiculos');
        //$request->move($destino,$nombre);
        //dd("si subio");

        //$image = $request -> file('soat');
        //$nombre =  time().'.'.$image->getClienteOriginalExtension();
        //$destino = public_path('img/vehiculos');
        //$request->move($destino,$nombre);
      //  dd("si subio");

       // $image = $request -> file('targetapropiedad');
       // $nombre =  time().'.'.$image->getClienteOriginalExtension();
       // $destino = public_path('img/vehiculos');
       // $request->move($destino,$nombre);
       // dd("si subio");








    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vehiculo = Vehiculo::find($id);
        return view('vehiculo.show')->with('vehiculo', $vehiculo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {
        $vehiculo = Vehiculo::find($id);
        return view('vehiculo.edit')->with('vehiculo', $vehiculo );


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
        $vehiculo = Vehiculo::find($id);
        $vehiculo =  new Vehiculo();
        $vehiculo->conductor = $request->conductor;
        $vehiculo->documentoconductor = $request->documentoconductor;
        $vehiculo->modelo = $request->modelo;
        $vehiculo->anno = $request->anno;
        $vehiculo->matricula = $request->matricula;
        $vehiculo->placa = $request->placa;
        $vehiculo->tecnomecanica = $request->tecnomecanica;
        $vehiculo->soat = $request->soat;
        $vehiculo->targetapropiedad = $request->targetapropiedad;
        $vehiculo->fechavencimiento = $request->fechavencimiento;
        $vehiculo->save();
        return redirect('vehiculos');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vehiculo = Vehiculo::find($id);
        $vehiculo->delete();
        return redirect('vehiculos');



    }
}
