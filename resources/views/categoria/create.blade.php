{{--%%%%%%%%%%%%%%%%%%% create %%%%%%%%%%%%%%%%%%%%%%--}}
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear categoria</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            Crear Categoria
        </div>
        {{-- ######## este campo es para resaltar errores de color rojo #########--}}
        <div class="card-body">
            @if($errors->has("nombre"))
                <span class="text-danger">{{$errors->first("nombre")}}</span>    
            @endif

        {{-- ######## este campo es para almacenar  #########--}}
            <form action="{{route("categoria.store")}}" method="post" enctype="multipart/form-data">  {{--categoria.store ->> guardar--}}
                @csrf    {{--para que sirve--}}
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