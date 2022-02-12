@extends('layout')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <h1>{{ __('Bienvenido al sistema') }}</h1>
                            </span>

                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="tabla-inicio" class="table table-striped table-bordered table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>#</th>
                                        <th>Alumno</th>
                                        <th>Grado</th>
                                        <th>Materias</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($gradoAlumnos as $gradoAlumno)
                                        <tr>
                                            <td>{{ $gradoAlumno->id }}</td>
                                            <td>{{ $gradoAlumno->alumno }}</td>
                                            <td>{{ $gradoAlumno->grado }}</td>

                                            <td>
                                                @forelse ($gradoMaterias as $gradoMateria)

                                                    @if($gradoAlumno->grado_id == $gradoMateria->grado_id)

                                                        <p class="btn btn-primary">{{ $gradoMateria->materia }}</p>
                                                    

                                                    @endif

                                                @empty
                                                    No hay ninguna materia registrada
                                                @endforelse
                                            </td>
                                        <tr>
                                    @empty
                                        <tr>
                                            <td colspan="4">No hay ningun resultado</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#tabla-inicio').DataTable();
        });
    </script>
@endsection
