<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre y apellido') }}
            {{ Form::text('name', $user->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('Correo') }}
            {{ Form::text('email', $user->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('Contraseña')}}
            {{ Form::text('password', $user->password, ['class'=> 'form-control' . ($errors->has('password') ? 'is-invalid' : ''), 'placeholder' => 'Password']) }}
            {!! $errors->first ('password', 'div class=invalid-feedback>">:message</div>')!!}
    </div>  
        
            <div class="form-group">
            {{ Form::label('Edad') }}
            {{ Form::text('age', $user->age, ['class' => 'form-control' . ($errors->has('age') ? ' is-invalid' : ''), 'placeholder' => 'Age']) }}
            {!! $errors->first('age', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Membresía') }}
            {{ Form::text('membership', $user->membership, ['class' => 'form-control' . ($errors->has('membership') ? ' is-invalid' : ''), 'placeholder' => 'Membership']) }}
            {!! $errors->first('membership', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>