<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Http;
use App\Models\Gastronomia;
use App\Http\Resources\Gastronomia_resource as GrastronomiaResource;

class GastronomiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $grastronomias = Gastronomia::all();
        return GrastronomiaResource::collection($grastronomias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $grastronomias = $request->isMethod('put') ? Gastronomia::findOrFail($request->id) : new Gastronomia;
        $grastronomias->id = $request->input('id');
        $grastronomias->pais = $request->input('pais');
        $grastronomias->nombre_comida = $request->input('nombre_comida');
        $grastronomias->precio = $request->input('precio');
        $grastronomias->tradicion = $request->input('tradicion');

        if ($grastronomias->save()){
            return new GrastronomiaResource($grastronomias);
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
        //
        $grastronomias = Gastronomia::findOrFail($id);
            return new GrastronomiaResource($grastronomias);
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
        $grastronomias = Gastronomia::findOrFail($id);
        $grastronomias->delete();

    }
}
