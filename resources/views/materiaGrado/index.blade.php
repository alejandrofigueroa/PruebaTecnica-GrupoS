@extends('layout')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <h1>{{ __('Materias por Grados') }}</h1>
                            </span>

                            <div class="float-right">
                                <a href="{{ route('materiaGrados.create') }}" class="btn btn-primary float-right"  data-placement="left">
                                    {{ __('Nueva Materia por Grado') }}
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="tabla-materiaGrado" class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Grados</th>
                                        <th>Materias</th>
                                        <th>Operaciones</th>
                                    </tr>
                                </thead>
                                <tbody >
                                    @forelse ($materiasGrados as $materiaGrado)
                                        <tr>
                                            <td>{{ $materiaGrado->grado }}</td>
                                            <td>{{ $materiaGrado->materia }}</td>
                                            <td>
                                                <form action="{{ route('materiaGrados.destroy',$materiaGrado->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-success" href="{{ route('materiaGrados.edit',$materiaGrado->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Seguro de que quieres eliminarlo?')"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="2"><center>NO SE HAN ENCONTRADO RESULTADOS</center></td>
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
            $('#tabla-materiaGrado').DataTable();
        });
    </script>
@endsection
