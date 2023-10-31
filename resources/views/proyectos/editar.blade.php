@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                <div class="text-center">
                    <img src="{{ asset('imgs/gob.png') }}" alt="Logo del Gobierno" style="width: 100px; height: auto; display: inline-block; vertical-align: middle;">
                    <h1 style="display: inline-block; vertical-align: middle;">Editar Proyectos</h1>
                </div>
                    <div class="card-body">
                        <form action="{{ route('proyectos.update', $proyecto->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="NombreProyecto">Nombre del Proyecto</label>
                                <input type="text" name="NombreProyecto" class="form-control" value="{{ $proyecto->NombreProyecto }}" required>
                            </div>
                            <div class="form-group">
                                <label for="fuenteFondos">Fuente de Fondos</label>
                                <input type="text" name="fuenteFondos" class="form-control" value="{{ $proyecto->fuenteFondos }}" required>
                            </div>
                            <div class="form-group">
                                <label for="MontoPlanificado">Monto Planificado</label>
                                <input type="number" name="MontoPlanificado" class="form-control" value="{{ $proyecto->MontoPlanificado }}" required>
                            </div>
                            <div class="form-group">
                                <label for="MontoPatrocinado">Monto Patrocinado</label>
                                <input type="number" name="MontoPatrocinado" class="form-control" value="{{ $proyecto->MontoPatrocinado }}" required>
                            </div>
                            <div class="form-group">
                                <label for="MontoFondosPropios">Monto de Fondos Propios</label>
                                <input type="number" name="MontoFondosPropios" class="form-control" value="{{ $proyecto->MontoFondosPropios }}" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                                <a href="{{ url('/proyectos') }}" class="btn btn-primary">Regresar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
