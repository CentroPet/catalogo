<?php

namespace App\Http\Controllers;

use App\Models\Imagen;
use App\Http\Requests\StoreImagenRequest;
use App\Http\Requests\UpdateImagenRequest;

class ImagenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreImagenRequest $request)
    {
        dd($request->all());
        $this->guardar($request->fotos,$request->product_id);
    }
//$$$$$$$$$$$$ creamos otro funcion para mandar a productController $$$$$$$$$$$$$$
    public function guardarBaseDatos($url,$product_id){ //guarda en base de datos,
        $imagen_new = new Imagen(); //
        $imagen_new->url=$url;
        $imagen_new->product_id = $product_id;
        $imagen_new->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(Imagen $imagen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Imagen $imagen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateImagenRequest $request, Imagen $imagen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Imagen $imagen)
    {
        //
    }
}


