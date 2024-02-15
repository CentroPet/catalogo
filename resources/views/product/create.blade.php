@extends('adminlte::page')

@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.min.css" crossorigin="anonymous">


<link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.2/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />  {{--awasone--}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
@stop

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


@section('title', 'Dashboard')

@section('content_header')
    <h1>producto a crear</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
            crear producto 
        </div>

        <div class="card-body">
            @if($errors->has("nombre"))
                <span class="text-danger">{{$errors->first("nombre")}}</span> 
            @endif
            <form action="{{route("product.store")}}" method="post" enctype="multipart/form-data">  {{--product.store ->> guardar--}}
                @csrf    {{--para que sirve--}}
                @include("product.form") 
            </form>
        </div>
    </div>
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>   {{--libreria Jquery--}}
<script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.2/js/plugins/buffer.min.js" type="text/javascript"></script>   {{--input foto--}} 
<script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.2/js/plugins/filetype.min.js" type="text/javascript"></script> {{--input foto--}} 
<script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.2/js/plugins/piexif.min.js" type="text/javascript"></script>   {{--input foto--}} 
<script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.2/js/plugins/sortable.min.js" type="text/javascript"></script> {{--input foto--}} 
<script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.2/js/fileinput.min.js"></script>                                {{--input foto--}} 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>  {{--boostrap--}}
<script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.2/js/locales/LANG.js"></script>


{{--&&&&&&&&&&&&&&&&& para que funcione modal, agregando a booststrap &&&&&&&&&&&&&&&&&&&--}}
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

{{-- para mensajes dinamicos --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> 





<script>
    $(document).ready(function() {
        $("#fotos").fileinput(
            {
                maxFileCount:5,   //para que sirve
                showUpload:false,  //  para que sirve
            }
        );

        $("#agregarCategoria").on("click",function(){
            //console.log("estan intentado agregar categoria")
            $("#formcrearcategoria").modal("show");   // lo muestra, la ventana categoria(modal) => sub ventanas
        });

        //========== ajax guardar product desde modal ===================
        $('#guardaModal').on('click',function(e){
            console('me isiste clic para guardar')

            $.ajax({
                url: "{{route('guardarModalProdu')}}",
                data:{}
                type:'GET'
                success:function(respuesta){
                    
                }
            });
        });

            
        



        // ----------ajax guarfar ===================
        $("#guardar").on("click",function(e){
            console.log("me sisite gurdar");
            e.preventDefault();  // quedate espre aqui
            categoriaAjax = $("#categoriaajax").val();   // ???
                // console.log(categoriaAjax)
            $.ajax({
                url: "{{route('guardar.categoria.ajax')}}",  // Url 
                data:  {cate:categoriaAjax},  // lo que va enviando, lo que recibio de la caja; variable cate= llega alla controlador {clave: valor}.,
                type: 'GET',  //que  voy a enviar
                success:function(respuesta){
                    // console.log(respuesta);
                    $("#formcrearcategoria").modal("hide"); // que hace esto?? una vez  guardado lo oculata la ventana.
                    Swal.fire({
                        position: "top-end",
                        icon: "success",
                        title: "Categoria Gurdado correctamente",
                        showConfirmButton: false,
                        timer: 1500
                    });
                    //%%%%%%%%%%% este hace el guardado %%%%%%%%%%%%%%%
                    $html="<option value="+respuesta.id+">"+respuesta.categoria+"</option>"
                   // $html="<option value="+respuesta.id+">"+respuesta.categoria+"</option>

                    $("#categoria_id").append($html)
                    console.log(respuesta.categoria);
                },  
            });
        })
    });









    </script>
@stop