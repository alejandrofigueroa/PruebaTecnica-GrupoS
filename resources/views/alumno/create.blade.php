@extends('layout')

@section('template_title')
    Crear Alumno
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear un nuevo alumno</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('alumnos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('alumno.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection