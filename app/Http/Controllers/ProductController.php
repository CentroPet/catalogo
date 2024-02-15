<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str; // inportaciones
use App\Models\Product;
use App\Models\Categoria;
use App\Http\Requests\StoreRequestProdu;
use App\Http\Requests\UpdateProducRequest;
use App\Http\Requests\EliminarRequest; // creamos con $ php artisan make:request EliminarRequest
use Illuminate\Support\Facades\Storage; // agregamos esta libreraia
use Intervention\Image\Facades\Image;

//use App\Models\Imagen;
//use Intervention\Image\Facades\Image; // agregamos esta libreria

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products=Product::all();
        $categorias=Categoria::all();
        return view("product.index", compact("products","categorias"));  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // dd($categorias); para ver si esta jalnado
        $categorias=Categoria::all(); // extraemos toda las categorias
        return view("product.create",compact("categorias",'categorias')); //compact, envia a otro lado 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequestProdu $request)
    {
        // store => alamacenar STORE ES PARA GUARDAR
        //dd($request->all()); // para verificar si esta llegando
        //dd($product);

        $product=new Product();
        $product->nombre= $request->nombre;
        $product->stock= $request->stock;
        $product->precio= $request->precio;
        $product->fvencimiento= $request->fvencimiento;
        $product->categoria_id=$request->categoria_id; // el segundo es de formulario.
        
        // $$$$$$$$$$$$$ llamando al metodo store de ImagenController $$$$$$$$$$$$$$$
        // $objetoImagen->guardar($request->url2,$product->id);

        $objetoImagen = app(ImagenController::class);

        $product->foto= $this->GuardarImagenDesdeInput($request);
        $product->video= $this->GuardarVideo($request);
        $product->save();  // el guarda el product // tiene desde de aqui


        //$$$$$$$$$$$$$$$$$$ con ciclo guardamos imagenes $$$$$$$$$$$$$$$$$$$$
        foreach ($request->file('file-data') as $imagen){ // as como? saca uno.
            $objetoImagen->guardarBaseDatos($imagen,$product->id); // guarda la imagen que imagen,$product->ide
            $this->guardarImagenFisico($imagen); // tambien guarda de manera fisica.
        }
        return redirect()->route("listar_products");
        // return "guardado justiniano"; 
        //return redirect()->route("listar_products");
    }   

        //$$$$$$$$$$$$$$$$$$ function guardarImagenDesdeInput $$$$$$$$$$$$$$$$$$$$
        public function guardarImagenDesdeInput(StoreRequestProdu $request){    
            if($request->hasFile('foto')){ //has=. Tiene? 
                $fileArchivo=$request->file('foto');      
                $nombreArchivo=Str::random(5)."fotos". '.'.$request->file('foto')->getClientOriginalExtension();
                //Storage::disk('public')->put('fotos\\',$fileArchivo); // lo guarda en storage public y le crea una carp fotos. 
                $fileArchivo->StoreAs('fotos',$nombreArchivo,'public');
            }else{
                dd("no enviaron foto");
            }
            return $nombreArchivo;     
        }
        
         //$$$$$$$$$$$$$$$$$$ function guardarImagenDesdeInput $$$$$$$$$$$$$$$$$$$$
        public function guardarImagenFisico($imagen){
            $nombreArchivo=Str::random(5)."fotos".'.'.$imagen->getClientOriginalExtension();
            Storage::disk('public')->put('fotos\\',$imagen); // crea la carpeta en caso NO EXISTA, y si hay solo de aumenta
        }

        //$$$$$$$$$$$$$$$$$$ function guardarVideo $$$$$$$$$$$$$$$$$$$$
        public function guardarVideo(StoreRequestProdu $request){
            if($request->hasFile('video')){
                //dd("me enviaron un video");       
                $fileArchivo=$request->file('video');
                $nombreArchivo=Str::random(5)."video".'.'.$request->file('video')->getClientOriginalExtension();
                Storage::disk('public')->put('videos\\',$fileArchivo);
            }else{
                dd("no enviaron video");
            }
            return $nombreArchivo;
        }
    /**
     * Display the specified resource.
     */

    
    public function show(Product $product)
    {
        //dd($product); para verificar si esta llegando
        return view("product.mostrar",compact("product"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categorias=Categoria::all();
        return view("product.edita",compact("product","categorias"));    

    }

    /**
     * Update the specified resource in storage.
     */
    public function actualizar(UpdateProducRequest $request, Product $product)
    {
        //dd($request->all()); // llega la imformacion del formulario
        $product->nombre=$request->nombre;  /// igual que objeto => public function actualizar( => igual ===>>UpdateProducRequest $request, mocdel=> Product  => este llega objeto $produc)
        $product->stock=$request->stock;
        $product->precio=$request->precio;
        $product->fvencimiento=$request->fvencimiento;
        $product->foto=$request->foto;
        $product->video=$request->video;

        $product->save();
        return redirect()->route("listar_products");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EliminarRequest $request)
    {
        $id_product=$request->id_product;
        $product=Product::find($id_product);
        $product->estado=0;
        $product->save();
        return response()->json(["respuesta"=>"eliminado correctamente"]);
    }
}
