<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Http\Requests\StoreCategoriaRequest; // storage
use App\Http\Requests\UpdateCategoriaRequest; // update
use App\Http\Requests\EliminarRequest; // creamos con $ php artisan make:request EliminarRequest
use App\Http\Requests\RequestAjax; // creamos con $ php artisan make:request EliminarRequest

use GuzzleHttp\Psr7\Request;

use function PHPUnit\Framework\returnSelf;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //::all() es un método proporcionado por Eloquent que realiza una consulta para
        // recuperar todas las filas de la tabla asociada al modelo.
        $categorias=Categoria::all();
        return view("categoria.index",compact("categorias"));
    }
    
    //  * Show the form for creating a new resource.
    //  * Mostrar el formulario para crear un nuevo recurso.
    public function create()
    {
        $categorias=Categoria::all();
        return view("categoria.create",compact('categorias'));
    }
    //  * Store a newly created resource in storage.
    //  * Almacene un recurso recién creado en el almacenamiento.
    public function store(StoreCategoriaRequest $request)
    {
        $categoria=new categoria();
        $categoria->categoria=$request->input('categoria');
        $categoria->save(); // guardar desde aqui. el categoria.
            
        return redirect()->route("listar_products");
        return redirect()->route("panel_categoria");
    }
    
    // * Display the specified resource.
    // * mostrar el recurso especificado
    public function show(Categoria $categoria)
    {
        return view("categoria.mostrar");
    }

    // * Show the form for editing the specified resource.
    // * Mostrar el formulario para editar el recurso especificado.
    public function edit(Categoria $categoria)
    {
        return view("categoria.edit");  
    }

    
    //  * Update the specified resource in storage.
    //  * actualiza el recurso especificado en el almacenamiento
    public function update(UpdateCategoriaRequest $request, Categoria $categoria)
    {
        $categoria->categoria=$request->categoria;
        $categoria->save(); // guardar desde aqui. el categoria.
    }

    
        // Remove the specified resource from storage.
        // Elimine el recurso especificado del almacenamiento.
    public function destroy(EliminarRequest $request)
    {
        $id_categoria=$request->id_categoria;
        $categoria=Categoria::find($id_categoria);
        $categoria->estado=0;
        $categoria->save();
        return response()->json(["respuesta"=>"eliminado correctamente"]);
    }

    public function guardadoajax(RequestAjax $request){
        $categoria=new Categoria(); 
        $categoria->categoria=$request->cate;
        $categoria->save(); // guardar desde aqui. el categoria. 
        
        return response()->json($categoria);
        // return response()->json(["categoria llegante"=>$request->all()]);
    }


    public function entrgaCategorias()
        {
            $categorias=Categoria::all();
            return  response()->json($categorias);

        }

}


