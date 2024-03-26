<?php

namespace App\Http\Controllers;

use App\Models\Recetas;
use Illuminate\Http\Request;


class RecetasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $host="localhost";
        $puerto="27017";

        $conexion = new \MongoDB\Client("mongodb://$host:$puerto");

         
         
         $filtrar = array();
         $options = array();

         $collection = $conexion->laravelmongodb->productos;
         $datos = $collection->find($filtrar, $options);
         
         return view('recetas', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Recetas $recetas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recetas $recetas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Recetas $recetas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recetas $recetas)
    {
        //
    }
}
