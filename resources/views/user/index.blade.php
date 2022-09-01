@extends('layouts.plantilla')
@section('tittle') Usuarios @endsection
@section('content')
        <h3 class="mt-4">Listado de Usuarios</h3>
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Email</th>
                    <th scope="col">Rol</th>
                    <th scope="col">Contraseña</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Opciones</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($user as $itemuser)
                  <tr>
                    <td>{{$itemuser->id}}</td>
                    <td>{{$itemuser->name}}</td>
                    <td>{{$itemuser->email}}</td>
                    @if ($itemuser->email == 'admin@admin.com')
                        <td>Admin</td>
                    @else
                        <td>Cliente</td>
                    @endif
                    <td>{{$itemuser->password}}</td>
                    @if ($itemuser->email !== 'admin@admin.com')
                        @if ($itemuser->email_verified_at)
                        <td><span class="badge badge-success">Activo</span></td>
                        @else
                        <td><span class="badge badge-danger">Inactivo</span></td>
                        @endif
                    @else
                        <td><span class="badge badge-primary">Admin</span></td>
                    @endif
                    <td>
                        @if ($itemuser->email !== 'admin@admin.com')
                            <a href="{{route('registrarUser',$itemuser->id)}}" class="btn btn-primary">Activar</a>
                        @endif
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
@endsection
