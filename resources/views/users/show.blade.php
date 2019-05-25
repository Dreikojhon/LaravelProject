@extends('layout')
@section('title',"Usuario {$user->id}")

@section('content')
    <h1>Usuario #{{ $user->id }}</h1>

    Mostrando detalle del usuario: {{ $user->id }}
    <p></p>
    <p>Nombre del Usuario: {{ $user->name }}</p>
    <p>Correo Electrónico: {{ $user->email }}</p>
    <p></p>

    <p>
        <a href="{{action('UserController@index')}}">Regresar al listado de usuarios</a>
    </p>
@endsection