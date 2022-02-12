@extends('layout')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Vincular un grado con otra materia</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('materiaGrados.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('materiaGrado.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection