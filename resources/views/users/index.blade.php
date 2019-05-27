@extends('layout')

@section('content')

    <h1>{{ $title }}</h1>
    <p>
        <a href="{{ route('users.create') }}">*Crear Usuario*</a>
    </p>
    <ul>
        @forelse ($users as $user)
        <li>{{ $user->name }} - {{ $user->email }}
            <a href="{{ route('users.show',$user)}}">Ver Detalles</a>|
            <a href="{{ route('users.edit',$user)}}">Editar Usuario</a>|
            <form action="{{ route('users.destroy',$user)}}" method="POST">
                {{ method_field('PUT')}}
                {{ csrf_field() }}
                <button type="submit">Eliminar</button>
            </form>
        </li>
        @empty
            <li>No hay usuarios registrados</li>
        @endforelse
    </ul>
@endsection
