@section('css')
@stop
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Producto a editar</h1>x
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            EDITAR PRODUCTO
        </div>

        <div class="card-body">
            {{--{{ $product}}--}}
            <form action="{{route("product.update",$product) }}"method=post>
                {{method_field("PATCH")}}   {{--que es para que sirve--}}
                @csrf
                @include("product.form")
            </form>
        </div>

    </div>
@stop


@section('js')
    <script> console.log('Hi!'); </script>
@stop