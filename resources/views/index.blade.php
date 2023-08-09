@extends('layout.template')
@section('title', 'Lista de Postulaciones')
@section('content')
@if (session()->has('message'))
<div class="alert alert-success">{{ session('message') }}</div>
@endif

@if ($errors->has('postulates'))
<div class="alert alert-danger">{{ $errors->first('postulates') }}</div>
@endif

@if ($errors->has('postulates'))
<div class="alert alert-danger">{{ $errors->first('postulates') }}</div>
@endif
    <livewire:index /> 
@endsection
