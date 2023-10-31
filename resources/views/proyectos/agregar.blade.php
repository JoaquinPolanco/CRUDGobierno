@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="text-center">
                    <img src="{{ asset('imgs/gob.png') }}" alt="Logo del Gobierno" style="width: 100px; height: auto; display: inline-block; vertical-align: middle;">
                    <h1 style="display: inline-block; vertical-align: middle;">Agregar Proyectos</h1>
                </div>

                <div class="card-body">
                    <form action="{{ route('proyectos.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="NombreProyecto">Nombre del Proyecto</label>
                            <input type="text" name="NombreProyecto" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="fuenteFondos">Fuente de Fondos</label>
                            <input type="text" name="fuenteFondos" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="MontoPlanificado">Monto Planificado</label>
                            <input type="number" name="MontoPlanificado" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="MontoPatrocinado">Monto Patrocinado</label>
                            <input type="number" name="MontoPatrocinado" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="MontoFondosPropios">Monto de Fondos Propios</label>
                            <input type="number" name="MontoFondosPropios" class="form-control" required>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary">Guardar Proyecto</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
