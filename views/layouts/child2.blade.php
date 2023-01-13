@extends('layouts.master')

@section('titulo', '')
    
@section('menu')
@parent
<ul>
    <li><a href="#">Proveedores</a></li>
    <li><a href="#">Sección 2</a></li>
</ul>
@endsection

@section('contenido')
    @forelse ($frutas as $fruta)
        @include('layouts.fruta')
    @empty
        @include('layouts.vacio', ['elementos' => 'frutas'])
        @includeIf('layouts.nohay', ['elementos' => 'verdura'])
        @includeWhen($boolean, 'view.name', ['some' => 'data'])
        @includeUnless($boolean, 'view.name', ['some' => 'data'])
        @includeFirst(['view.name', 'variable'], ['some' => 'data'])
    @endforelse
@endsection