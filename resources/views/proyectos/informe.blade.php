@extends('layouts.app')


@section('content')
    <div class="text-center">
        <img src="{{ asset('imgs/gob.png') }}" alt="Logo del Gobierno" style="width: 100px; height: auto; display: inline-block; vertical-align: middle;">
        <h1 style="display: inline-block; vertical-align: middle;">Gobierno de El Salvador Informes proyecto</h1>
    </div>
    <div class="container mt-4">
    <a href="{{ asset('proyectos') }}" class="btn btn-info">Regresar</a>

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
                    <a href="{{ route('proyectos.downloadPDF', $proyecto->id) }}" class="btn btn-info" title="Descargar PDF">
                        Descargar PDF
                    </a>
                </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>
@endsection

