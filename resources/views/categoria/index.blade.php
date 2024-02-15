
@extends('adminlte::page')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="  https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="   https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css">
@stop

@section('title', 'Dashboard')

@section('content_header')
@stop   

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <div>
                    <a href="{{route('categoria.crear')}}"> <button class="btn btn-danger">crear categoria</button></a>
                </div>
            </div>      
            <div class="card-body">
                <table class="table table-bordered table-hover table-striped nowrap" style="width: 100%">
                    <thead>
                        <th>id</th>
                        <th>categoria</th>  
                    </thead>
                    <tbody>
                        @foreach ($categorias as $categoria)
                            <tr id="{{$categoria->id}}">  {{--a este axidemos--}}
                                <td id="tex-">{{ $loop->iteration }}</td>
                                <td id="tex-center">{{$categoria->categoria}}</td>
                                <td class="text-center">
                                    <i class="fa-solid fa-trash-can text-danger eliminar"></i>&nbsp; {{--icon de Elimonar--}}
                                    <a href="{{route("product.mostrar",$categoria)}}">
                                        <i class="fa-solid fa-eye text-fuchsia"></i>&nbsp; {{--este el el ojo--}}
                                    </a>
                                    <a href="{{route('product.editar',$categoria->id)}}">
                                        <i class="fa-solid fa-pen-to-square text-success"></i> {{--icono editar--}}
                                    </a>
                                </td>   
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-foorter bg-info">
                este es el pie
            </div>
        </div>
    </div>
@stop



@section('js')
    <script> console.log('Hi!'); </script>
@stop