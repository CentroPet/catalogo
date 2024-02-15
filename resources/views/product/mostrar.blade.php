@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
@stop

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Motrar producto</h1>
@stop

@section('content')
    <div class="card">
        <table>
            <thead class="table-primary">
                <th>Atributo</th>
                <th>Valor</th>
            </thead>
            <tbody>
                <tr class="table-secondary">
                    <td>Nombre</td>
                    <td>{{$product->nombre}}</td>
                </tr>
                <tr class="table-success">
                    <td>Stock</td>
                    <td>{{$product->stock}}</td>
                </tr>
                <tr class="table-danger">
                    <td>precio</td>
                    <td>{{$product->precio}}</td>
                </tr>
                <tr class="table-info">
                    <td>foto</td>
                    <td>{{$product->foto}}</td>
                </tr>
                <tr class="table-info">
                    <td>video</td>
                    <td>{{$product->video}}</td>
                </tr>
                <tr class="table-info">
                    <td>fvencimiento</td>
                    <td>{{$product->fvencimiento}}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div>
        <a href="{{route("listar_products")}}">
            <button type="button" class="btn btn-primary ">Volver Inicio</button>
        </a>
    </div>
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop