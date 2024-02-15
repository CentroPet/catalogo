@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Categoria</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>Editar Categoria</h1>
        </div>
        <div class="card-body">
            {{$categoria}}
            <form action="{{route("invetario.update",$categoria)}}" method="post">
                {{method_field("PATCH")}}   {{--esto para que es, para agregar campo ????????????????--}}
                @csrf
                @include("categoria.form")
            </form>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop