<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;
use Validator;
use Illuminate\Support\Facades\DB;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request)

    {
        $texto=trim($request->get('texto'));
        $empresas =DB::table('empresas')
        ->select('id','nombre', 'kit', 'direccion', 'personacontacto',
        'telefonocontacto', 'correo' )
        ->where('nombre', 'LIKE', '%'  .$texto.'%')
        ->orwhere('correo','LIKE', '%'  .$texto.'%')
        ->orderBy('nombre', 'asc' )
        ->paginate(10);


        return view('empresa.index',compact('empresas','texto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empresa.create');
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
            'nombre' => 'required',
            'kit' => 'required',
            'direccion' => 'required',
            'personacontacto' => 'required',
            'telefonocontacto' => 'required|numeric',
            'logo' => 'required|image|mimes:jgp,jpeg,png,svg|max:2048|',
            'correo' => 'required',
            'contraseña' => 'required',


        ]);

        if ($validator->fails()){
            return back()
            ->withInput()
            ->with('ErrorInsert', 'llenar todos los campos')
            ->withErrors($validator);
        }

        if($request->hasFile('logo')) {
            $image = $request->file('logo');
           //  print_r($image);
            $image_name = time().'.'.$image->getClientOriginalExtension();
           //  echo $image;
           //  exit(0);
            $destinationPath = public_path('img\empresa');
            $image->move($destinationPath, $image_name);
            $empresas =  new Empresa();
             $empresas->nombre = $request->nombre;
            $empresas->kit = $request->kit;
            $empresas->direccion = $request->direccion;
            $empresas->personacontacto = $request->personacontacto;
            $empresas->telefonocontacto = $request->telefonocontacto;
            $empresas->logo = $request->logo;
            $empresas->correo = $request->correo;
            $empresas->contraseña = $request->contraseña;

            $empresas->save();
             return back()->with('Listo', 'se ha creado correctamente ');

    };


}


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $empresa = Empresa::find($id);
        return view('empresa.show')->with('empresa', $empresa);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empresa = Empresa::find($id);
        return view('empresa.edit')->with('empresa', $empresa);
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
        $empresa =  Empresa::find($id);
             $empresa->nombre = $request->nombre;
            $empresa->kit = $request->kit;
            $empresa->direccion = $request->direccion;
            $empresa->personacontacto = $request->personacontacto;
            $empresa->telefonocontacto = $request->telefonocontacto;
            $empresa->logo = $request->logo;
            $empresa->correo = $request->correo;
            $empresa->contraseña = $request->contraseña;

            $empresa ->save();

            return redirect('/empresas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empresa = Empresa::find( $id);
        $empresa->delete();
        return redirect('/empresas');
    }
}
