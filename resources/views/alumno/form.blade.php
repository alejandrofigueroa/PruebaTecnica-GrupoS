<div class="box box-info padding-1">
    <div class="box-body">
        <!-- UTILIZACION DEL FORM BLADE PARA MAYOR RAPIDEZ Y QUE ME PERMITE DE MANERA FACIL INTEGRARLOS PARA EL EDITAR Y CREAR -->
        <!-- FORMATO EJ FORM::TEXT(NAME, VALUE, [OTRAS COSAS])-->
        
        <div class="form-group">
                {{ Form::label('codigo') }}
                {{ Form::text('codigo', $alumno->codigo, ['class' => 'form-control' . ($errors->has('codigo') ? ' is-invalid' : ''), 'placeholder' => 'Ingresar el codigo']) }}
                {!! $errors->first('codigo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $alumno->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Ingresar el codigo']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        
        <div class="form-group">
            {{ Form::label('edad') }}
            {{ Form::number('edad', $alumno->edad, ['class' => 'form-control' . ($errors->has('edad') ? ' is-invalid' : ''),'min' => 0, 'placeholder' => 'Ingresar la edad']) }}
            {!! $errors->first('edad', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('sexo', 'Sexo: ') }}
            {{ Form::select('sexo', [0 => 'Masculino', 1 => 'Femenino'], $alumno->sexo, ['class' => 'form-control' . ($errors->has('sexo') ? ' is-invalid' : '')]) }}
            {!! $errors->first('sexo', '<div class="invalid-feedback">:message</p>') !!}
        </div>


        <div class="form-group">
            {{ Form::label('grado_id', 'Grado: ') }}
            {{ Form::select('grado_id', $grados, $alumno->grado_id, ['class' => 'form-control' . ($errors->has('grado_id') ? ' is-invalid' : '')]) }}
            {!! $errors->first('grado_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        
        <div class="form-group">
            {{ Form::label('observacion') }}
            {{ Form::textarea('observacion', $alumno->observacion, ['class' => 'form-control' . ($errors->has('observacion') ? ' is-invalid' : '')]) }}
            {!! $errors->first('observacion', '<div class="invalid-feedback">:message</p>') !!}
        </div>


        
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>