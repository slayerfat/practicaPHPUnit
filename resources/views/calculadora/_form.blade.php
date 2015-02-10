<div class="form-group">
  {!! Form::label('operando_x', 'Operando: ') !!}
  {!! Form::input('text', 'operando_x', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::label('operando_y', 'Operando: ') !!}
  {!! Form::input('text', 'operando_y', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::label('operacion', 'Tipo de operacion: ') !!}
  {!! Form::select(
    'operacion', 
    [1 => 'Sumar', 2 => 'Restar', 3 => 'Multiplicar', 4 => 'Dividir'], 
    null, 
    ['class' => 'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::submit('Resultado', ['class' => 'form-control btn btn-primary']) !!}
</div>
