@extends('templates.dashboard-layout')
@section('title') Usuario @endsection
@section('content')

@foreach($usuarios as $usuario)
{{$usuario->username}}
@endforeach

@endsection