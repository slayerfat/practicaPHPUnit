@extends('app')

@section('content')
  <h1>
    <a href="{!! action('CalculadoraController@create') !!}">Calculadora</a>
  </h1>
  {!! Form::open(['url' => 'calculadora']) !!}
    @include('calculadora._form')
  {!! Form::close() !!}
@stop
