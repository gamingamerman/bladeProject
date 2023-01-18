@extends('layouts.master')

@section('titulo', 'Personas')

@section('menu')
  @parent
  <ul>
    <li><a href="createperson.php">Crear persona</a></li>
  </ul> 
@endsection

@section('contenido')
  <ul>
    @foreach ($persons as $person)
        <li>
          <a href="person.php?id={{$person->id}}">
            {{$person->name}}
          </a>
        </li>
    @endforeach
  </ul>
@endsection