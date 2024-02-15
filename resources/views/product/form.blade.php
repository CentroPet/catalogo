
{{--
    <div class=" mb-3">
    @if($errors->has('nombre'))
        <span class="text-darge">{{$errors->first('nombre')}}</span>
    @endif
</div>
    --}}
{{--{{$product}}--}}
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="nombre" value="{{ old("nombre", $product->nombre ?? "cemento" )}}" name="nombre">
        <label for="nombre">Nombre</label>
    </div>
    
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="stock"  name="stock" value="{{ old("stock",$product->stock ?? "20")}}">
        <label for="stock">stock</label>
    </div>
    
    {{--%%%%%%%%%%%%%%%%%%%%% campo de precio %%%%%%%%%%%%%%%%%%%%%% --}}
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="precio"  name="precio" value="{{ old("precio",$product->precio ?? "50" ) }}">
        <label for="precio">precio</label>
    </div>

    {{--%%%%%%%%%%%%%%%%%%%%% campo de fecha de vencimiento %%%%%%%%%%%%%%%%%%%%%% --}}
    <div class=" col-2 form-floating mb-3">
        <input type="date" class="form-control" id="fvencimiento"  name="fvencimiento" value="{{ old ("fvencimiento",$product->fvencimiento ?? "") }}">
        <label for="fvencimiento">Fecha vencimiento</label>
    </div>
    
    {{--%%%%%%%%%%%%%%%%%%%%% campo foto %%%%%%%%%%%%%%%%%%%%%% --}}
    <div class="form-floating mb-3">
        <input type="file" class="form-control" id="foto" name="foto">
        <label for="foto">Foto</label>
    </div>
    {{--%%%%%%%%%%%%%%%%%%%%% campo de video %%%%%%%%%%%%%%%%%%%%%% --}}
    <div class="form-floating mb-3">
        <input type="file" class="form-control" id="video" name="video">
        <label for="video">Video</label>
    </div> 

    {{-- $$$$$$$$$$$$$$ campo categoria $$$$$$$$$$$$$$$--}}
    <div class="row">
            <div class="col-11">
                <div class="form-floating mb-3">
                    <select class="form-control" name="categoria_id" id="categoria_id">
                        @foreach($categorias as $cat)
                            <option value="{{$cat->id}}">   {{--lo que vale internamente--}}
                                {{$cat->categoria}}         {{--{{-- lo que se muestra--}} 
                            </option>
                        @endforeach
                    </select>
                    <label for="categoria_id">Categorias</label>
                </div> 
            </div>
            {{-- %%%%%%%%%%%%%%%%%%%%% icono de (+) crear categoria %%%%%%%%%%%%%%%%%%%%--}}
        <div class="col-1">
            <label id="agregarCategoria" for="">
                <i class="fa-solid fa-circle-plus fa-3x text-info" data-bs-toggle="modal" data-bs-target="#staticBackdrop" ></i>
            </label>
        </div>
    </div>

        {{--$$$$$$$$$$$$$$$$$$$$ este es para seleccionar fotos $$$$$$$$$$$$$$$$$$$$$$$--}}
    <input id="fotos" name="file-data[]" type="file" multiple>

    
    {{-- <div class="form-floating mb-3">
        <select name="categoria_id" class="form-control">
            <option value=""> seleccione una categoria</option>

            @foreach($categorias as $cat)
                <option value="{{$cat->id}}">
                    {{$cat->categoria}}
                </option>
            @endforeach
        </select>
    </div> --}}



{{-- ######################### boton de guardar #########################--}}
    <div class="d-grid gap-2 col-6 mx-auto">
        <button class="btn btn-primary" type="submit">Guardar</button>
    </div>

{{-- #########################  ventanas modales, esto es modal #########################--}}
    <div class="modal fade" id="formcrearcategoria" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                {{-- este encabezado --}}
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Crear Categoria Modal</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> {{--es el icono (x)--}}
                </div>
                {{-- este el cuerpo --}}
                <div class="modal-body" >
                    <div class="row">
                        {{-- <div class="coli-3">
                            <label for=""></label>
                        </div> --}}
                        <div class="col-9">
                            <input class="form-control" type="text" name="" id="categoriaajax" placeholder="ingrese una categoria de un producto">
                        </div>
                    </div>
                </div>
                {{--&&&&&&&&&&&& este es el pie &&&&&&&&&&&--}}
                <div class="modal-footer">
                    <div class="container-fluid h-100 mt-3">
                        <div class="row w-100 align-items-center">
                            <div class="col text-center">
                                {{-- <button id="guardar" class="btn btn-secondary">Guardar <i class="far fa-save"></i></button> --}}
                                <button id="cancelar" class="btn btn-danger">Cancelar<i class=""></i></button>
                                <a href="" id="guardar" class="btn btn-info"> Guardar Create<i class=""></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- action="{{route("categoria.store")}}" --}}















{{-- ######################### es para saber cualquier tipo de error #########################--}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
@endif




