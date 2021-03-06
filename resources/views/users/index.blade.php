@extends('layouts.app')

@section('content')

    <div class="d-flex justify-content-between align-items-end">
        <h1 class="pb-1">{{ $title }}</h1>
            <p>
                <a href="{{ route('users.create') }}" class="btn btn-primary"><span class="oi oi-plus"> Añadir Usuario</span></a>
            </p>
    </div>

    @if ($users->isNotEmpty())
    <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombres</th>
            <th scope="col">Email</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
          <tr>
            <th scope="row">{{ $user->id }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                
                <form action="{{ route('users.destroy',$user)}}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE')}}
                    <a href="{{ route('users.show',$user)}}" class="btn btn-link"><span class="oi oi-eye">Detalles</span></a>
                    <a href="{{ route('users.edit',$user)}}" class="btn btn-link"><span class="oi oi-pencil">Editar</span></a>
                    <button type="submit" class="btn btn-link"><span class="oi oi-trash">Eliminar</span></button>
                </form>
            </td>
          </tr>
        @endforeach 
        </tbody>
      </table>
    @else
      <p>No hay usuarios registrados.</p>
    @endif
@endsection
