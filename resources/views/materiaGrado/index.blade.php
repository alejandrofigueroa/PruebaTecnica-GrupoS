@extends('layout')

@section('template_title')
    Materias por Grados
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Materias por Grados') }}
                            </span>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="tabla-pelicula" class="table table-striped table-bordered table-hover">
                                <thead class="thead">
                                    
                                </thead>
                                <tbody>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
