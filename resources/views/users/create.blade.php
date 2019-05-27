@extends('layout')
@section('title',"Crear Usuario")

@section('content')
    <h1>Crear usuario</h1>

    @if ($errors->any())
    <div class="alert-danger">Existen errores en el formulario
        @if ($errors->has('name'))
        <li>{{ $errors->first('name') }}</li>
        @endif
        {{-- <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul> --}}
    </div>
    @endif

    <form method="POST" action="{{ url('usuarios') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Ingrese los datos para crear un nuevo usuario</label><br>
            <input type="name" class="form-control" name="name" placeholder="Nombre" value="{{ old('name') }}">
            
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" name="email"  placeholder="Correo Electrónico" value="{{ old('email') }}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Crear Usuario</button>
    </form>

    <p>
        <a href="{{route('users.index')}}">Regresar al listado de usuarios</a>
    </p>
@endsection