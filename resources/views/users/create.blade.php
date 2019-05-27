@extends('layout')
@section('title',"Crear Usuario")

@section('content')
    <h1>Crear usuario</h1>

    @if ($errors->any())
    <div class="alert-danger">Existen errores en el formulario
        {{-- <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul> --}}
    </div>
    @endif

    <form method="POST" action="{{ url('usuarios') }}">
        {{ csrf_field() }}
        <label for="name">Ingrese los datos para ingresar un nuevo usuario</label><br>
        <input type="text" name="name" placeholder="Nombre" value="{{ old('name') }}">
        @if ($errors->has('name'))
            <p>{{ $errors->first('name') }}</p>
        @endif
        <br>
        <input type="email" name="email" placeholder="Correo Electrónico" value="{{ old('email') }}"><br>
        <input type="password" name="password" placeholder="Clave de Usuario">





        <button type="submit">Crear Usuario</button>
    
    </form>
   



    <p>
        <a href="{{route('users.index')}}">Regresar al listado de usuarios</a>
    </p>
@endsection