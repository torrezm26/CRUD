<?php

namespace App\Http\Controllers;

use App\Models\inmobiliaria; 
use Illuminate\Http\Request;

class InmobiliariaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //proporcionamos al index los datos
        $datos['inmobiliaria']=inmobiliaria::paginate(5);
        return view('inmobiliaria.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //acceso a través de una clase
        return view('inmobiliaria.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /*Usamos token, recolectamos todos los datos
        $datosInmobiliaria = request()->all();
        */


        //Eliminamos el uso del token, recolectamos datos 
        $datosInmobiliaria = request()->except('_token');

        //Insertamos toda la información en la BD
        inmobiliaria::insert($datosInmobiliaria);
        return response()->json($datosInmobiliaria);
    }

    /**
     * Display the specified resource.
     */
    public function show(inmobiliaria $inmobiliaria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(inmobiliaria $inmobiliaria)
    {
        //
        return view('inmobiliaria.create');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, inmobiliaria $inmobiliaria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        inmobiliaria::destroy($id);
        return redirect('inmobiliaria');
    }
}
