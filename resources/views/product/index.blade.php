@extends('adminlte::page')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />  {{--dinamismo de mensaje --}}                                                       
    <link rel="stylesheet" href="  https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">                           {{--https://datatables.net/extensions/responsive/examples/styling/bootstrap5.html --}}
    <link rel="stylesheet" href="   https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">                                           {{--https://datatables.net/extensions/responsive/examples/styling/bootstrap5.html --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css">                                    {{--https://datatables.net/extensions/responsive/examples/styling/bootstrap5.html --}}
@stop

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')

    <div class="container bg ">
        <div class="card">
            <div class="card-header p-3" style="background-color: #5c3587;">
                <div>
                    <a href="{{route('product.crear')}}"> <button class="btn" style="background-color: #f7014c; color: #ffffff; font-weight: 500;  font-size: 18px;">crear</button></a>

                    <div class="float-right">
                        <a id="crear_producto_modal" class="" data-placement="left" href="#" >
                            <i class="fa-solid fa-circle-plus fa-3x text-info" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></i>
                        </a>
                        <label id="agregarCategoria" for="">
                        </label>
                    </div>
                </div>


            </div>
            <div class="card-body bg-info">
                <table id="productos"    class="table table-bordered table-hover table-striped nowrap" style="width: 100%">
                    <thead class="bg-primary">
                        <th>id</th>
                        <th>nombre</th>
                        <th>categoria</th>
                        <th>stock</th>
                        <th>precio</th>
                        <th>foto</th>
                        {{-- <th>video</th> --}}
                        <th>opciones</th>   
                    </thead>
                        <tbody> 
                            @foreach ($products as $product)
                                <tr id="{{$product->id}}"> {{-- a este axidemos--}}
                                    <td class="text-">{{ $product->id }}</td>
                                    <td>{{ $product->nombre }}</td>
                                    <td>{{ $product->categoria->categoria}}</td>
                                    <td>{{ $product->stock  }}</td>
                                    <td>{{ $product->precio }}</td>
                                    <td>{{ $product->foto}}</td>
                                    {{-- <td>{{ $product->video}}</td> --}}
            
                                    <td>
                                        <i class="fa-solid fa-trash-can text-danger " id="eliminar"></i>&nbsp; {{--icon de Elimonar--}}
            
                                        <a href="https://wa.link/0v7v9c">
                                            <i class="fa-brands fa-square-whatsapp text-success"></i>&nbsp;
                                        </a>
            
                                        <a href="{{route("product.mostrar",$product)}}">
                                            <i class="fa-solid fa-eye text-fuchsia"></i>&nbsp; {{--este el el ojo--}}
                                        </a>
                                    
                                    
                                        <a href="{{route('product.editar',$product->id)}}">
                                            <i class="fa-solid fa-pen-to-square text-success"></i> {{--icono editar--}}
                                        </a>
                                    </td>   

                                </tr>
                            @endforeach
                        </tbody>
                </table>
            </div>
            <div class="card-foorter bg-info">
                este es el pie de la tabla
            </div>
        </div>
    </div>


    <!-- Button trigger modal para crear un producto desde ajax-->
  
  <!-- Modal -->
  <div class="modal fade" id="modal_Crear_Producto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal crear categoria</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        <div class="modal-body">
            @include('product.formAjax')
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar crate</button>
            <a href="" id="guardaModal" class="btn btn-info"> Guardar Create<i class=""></i></a>
            {{-- <button type="button" class="btn btn-primary">Guardar modal</button> --}}
        </div>

      </div>
    </div>
  </div>
@stop

{{-- @section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@stop --}}

@section('js')
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>   {{-- libreria de Jquey => https://releases.jquery.com/ --}}
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>                                                                {{--  => https://datatables.net/extensions/responsive/examples/styling/bootstrap5.html--}}
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>                                                            {{--  => https://datatables.net/extensions/responsive/examples/styling/bootstrap5.html--}}
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>                                                  {{--  => https://datatables.net/extensions/responsive/examples/styling/bootstrap5.html--}}
<script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap5.min.js"></script>                                                  {{--  => https://datatables.net/extensions/responsive/examples/styling/bootstrap5.html--}}

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>{{-- ese es el suet alert--  para que sirve??????--}}

{{-- desde de=> https://getbootstrap.com/docs/5.3/getting-started/introduction/#cdn-links --}}
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

<script>

        $(document).ready(function () {

        // $$$$$$$$$$$$$$$  buscador, de productos datatable $$$$$$$$$$$$$$$$$$
        new DataTable('#productos', {
            responsive: true,
            "lengthMenu": [[10,10,20,30,50,100,-1],[10,20,30,50,100,"todos"]], // Personaliza la lista de números de registros por página
        });

        $('#crear_producto_modal').on("click",function(){
            $.ajax({
                url:"{{route('jalar.categorias')}}", 
                type: 'GET',
                dataType:"json",
                success:function (categorias){
                    $('#categoriasSelec').empty();
                    $('#categoriasSelec').append(`<option>Elija una Categoria</option>`);
                        categorias.forEach(categoria => {
                        $('#categoriasSelec').append(`<option value=${categoria.id}>${categoria.categoria}</option  >`);
                    });
                }
            });

            $('#modal_Crear_Producto').modal("show");
                console.log()
        });

    
        $('#eliminar').on('click', function(){ 
            console.log('me esiste click')
            // Obtener el ID del dato a eliminar
            id=$(this).closest("tr").attr("id"); //extrae el id de la fila clicada
            // Mostrar SweetAlert2 para confirmar la eliminación
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            });

            swalWithBootstrapButtons.fire({
                title: '¿Estás seguro?',
                text: '¡No podrás revertir esto!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Sí, eliminarlo',
                cancelButtonText: 'No, cancelar',
                reverseButtons: true
            }).then((result) => {
                // Si el usuario confirma, realizar la eliminación mediante Ajax
                if (result.isConfirmed) {
                    $.ajax({
                        url: "{{route('product.destroy')}}",
                        data: {id_product : id}, 
                        type: 'GET', // o 'POST' según tu configuración
                        dataType:'json',
                        success: function (respuesta) {
                            $("#"+id).remove(); // oye js dirigite a id q tenga este id
                            // Manejar el éxito de la eliminación
                            swalWithBootstrapButtons.fire(
                                'Eliminado',
                                'El dato ha sido eliminado correctamente.',
                                'success'
                            );
                            // Puedes actualizar tu interfaz aquí si es necesario
                        },
                        error: function (error) {
                            // Manejar errores en la petición Ajax
                            console.error('Error en la petición Ajax', error);
                            swalWithBootstrapButtons.fire(
                                'Error',
                                'Hubo un problema al intentar eliminar el dato.',
                                'error'
                            );
                        }
                    });
                } else if (result.dismiss === Swal.DismissReason.cancel){
                        // Si el usuario cancela, mostrar mensaje de cancelación
                        swalWithBootstrapButtons.fire(
                        'Cancelado',
                        'Tu archivo está a salvo :)',
                        'error'
                    );
                }
            });
        });
    });
</script>
@stop










