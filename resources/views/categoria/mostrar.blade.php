@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
@stop

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Mostrar Ctegoria</h1>
@stop

@section('content')
    <div class="card">
        <table>
            <thead>
                <th>Atributo</th>
                <th>valor</th>
            </thead>
            <tbody>
                <tr>
                    <td>Categoria</td>
                    <td>{{$categoria->categoria}}</td>
                </tr>
            </tbody>
        </table>
    </div>
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop