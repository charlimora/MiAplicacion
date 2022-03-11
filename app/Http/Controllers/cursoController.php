<?php

namespace App\Http\Controllers;

use App\Models\curso;
use Illuminate\Http\Request;

class cursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //creamos un array para poder manipular la información de la tabla cursos
        //a su vez el array actuará como un objeto

        $cursito = curso::all();
        /*el método compact pide un parámetro el cual será nuestro array
        llamado cursito y va acompañando la vista que estamos llamando*/
        return view('cursos.index',compact('cursito'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cursos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //con el método all() veo toda la información
        //return $request->all();
        /*obtuvimos el dato de lo que el usuario envía por el input
        cuyo name es 'nombre'*/
        //return $request->input('nombre');
        //creamos una nueva instancia del modelo
        $cursito = new curso();
        //esto me permitirá manipular la tabla
        $cursito->nombre = $request->input('nombre');
        $cursito->descripcion = $request->input('descripcion');
        //con esto ejecutamos el comando para guardar

        if ($request->hasFile('imagen')){ //si desde ese campo viene un archivo hacer:
            $cursito->imagen = $request->file('imagen')->store('public');
        }

        $cursito->save();
        return 'Waw lograste guardar';

    }

    /**
     * Muestra el recurso especificado (un recurso es un registro).
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //creo un array con información del registro
        //del id que viajó en la solicitud
        $cursito = curso::find($id);
        //asocio el array al view usando compact
        return view('cursos.show', compact('cursito'));
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
