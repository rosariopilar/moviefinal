<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $cliente->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellido') }}
            {{ Form::text('apellido', $cliente->apellido, ['class' => 'form-control' . ($errors->has('apellido') ? ' is-invalid' : ''), 'placeholder' => 'Apellido']) }}
            {!! $errors->first('apellido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telefonon') }}
            {{ Form::text('telefonon', $cliente->telefonon, ['class' => 'form-control' . ($errors->has('telefonon') ? ' is-invalid' : ''), 'placeholder' => 'Telefonon']) }}
            {!! $errors->first('telefonon', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('direccionn') }}
            {{ Form::text('direccionn', $cliente->direccionn, ['class' => 'form-control' . ($errors->has('direccionn') ? ' is-invalid' : ''), 'placeholder' => 'Direccionn']) }}
            {!! $errors->first('direccionn', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>