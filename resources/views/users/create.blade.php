@extends('layout')
@section('title',"Crear Usuario")

@section('content')
    <h1>Crear usuario</h1>

    <form method="POST" action="{{ url('usuarios') }}">
        {{ csrf_field() }}
        <label>Ingrese los datos para ingresar un nuevo usuario</label><br>
        <input type="text" name="name" placeholder="Nombre"><br>
        <input type="email" name="email" placeholder="Correo Electrónico"><br>
        <input type="password" name="password" placeholder="Clave de Usuario">





        <button type="submit">Crear Usuario</button>
    
    </form>
   



    <p>
        <a href="{{route('users.index')}}">Regresar al listado de usuarios</a>
    </p>
@endsection