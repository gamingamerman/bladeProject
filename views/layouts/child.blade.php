@extends('layouts.master')

@section('titulo', 'Mi titulo')
    
@section('menu')
@parent
<ul>
    <li><a href="#">Proveedores</a></li>
    <li><a href="#">Sección 2</a></li>
</ul>
@endsection

@section('contenido')
    <p>Hola</p>
    <p>Adios</p>
@endsection