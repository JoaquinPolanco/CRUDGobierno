@extends('layouts.app')


@section('content')
    <div class="text-center">
        <img src="{{ asset('imgs/gob.png') }}" alt="Logo del Gobierno" style="width: 100px; height: auto; display: inline-block; vertical-align: middle;">
        <h1 style="display: inline-block; vertical-align: middle;">Gobierno de El Salvador Proyectos</h1>
    </div>
    <div class="container mt-4">
    <a href="{{ route('proyectos.create') }}" class="btn btn-primary">Agregar Proyecto</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre del Proyecto</th>
                    <th>Fuente de Fondos</th>
                    <th>Monto Planificado</th>
                    <th>Monto Patrocinado</th>
                    <th>Monto de Fondos Propios</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            @foreach($proyectos as $proyecto)
                    <tr>
                        <td>{{ $proyecto->id }}</td>
                        <td>{{ $proyecto->NombreProyecto }}</td>
                        <td>{{ $proyecto->fuenteFondos }}</td>
                        <td>{{ $proyecto->MontoPlanificado }}</td>
                        <td>{{ $proyecto->MontoPatrocinado }}</td>
                        <td>{{ $proyecto->MontoFondosPropios }}</td>
                        <td>
                            <a href="{{ route('proyectos.edit', $proyecto->id) }}" class="btn btn-primary" title="Editar">
                                <i class="fas fa-edit">Editar</i>
                            </a>
                            <form action="{{ route('proyectos.destroy', $proyecto->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" title="Eliminar" onclick="return confirm('¿Estás seguro de que deseas eliminar este proyecto?');">
                                    <i class="fas fa-trash-alt">Eliminar</i>
                                </button>
                            </form>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

