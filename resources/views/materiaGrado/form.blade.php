<div class="box box-info padding-1">
    <div class="box-body">
        <!-- UTILIZACION DEL FORM BLADE PARA MAYOR RAPIDEZ Y QUE ME PERMITE DE MANERA FACIL INTEGRARLOS PARA EL EDITAR Y CREAR -->
        <!-- FORMATO EJ FORM::TEXT(NAME, VALUE, [OTRAS COSAS])-->
        <div class="form-group">
            {{ Form::label('grado_id', 'Grado: ') }}
            {{ Form::select('grado_id', $grados, $materiaGrado->grado_id, ['class' => 'form-control' . ($errors->has('grado_id') ? ' is-invalid' : '')]) }}
            {!! $errors->first('grado_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('materia_id', 'Materia: ') }}
            {{ Form::select('materia_id', $materias, $materiaGrado->materia_id, ['class' => 'form-control' . ($errors->has('materia_id') ? ' is-invalid' : '')]) }}
            {!! $errors->first('materia_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>