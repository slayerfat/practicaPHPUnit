@extends('app')

@section('content')
  <h1>
    <a href="{!! action('CalculadoraController@create') !!}">Calculadora</a>
  </h1>
  {!! Form::open() !!}
    @include('calculadora._form')
  {!! Form::close() !!}
@stop
