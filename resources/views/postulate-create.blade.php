@extends('layout.template')
@section('title', 'Lista de Postulaciones')
@section('content')
@if ($errors->has('message'))
<div class="alert alert-danger">{{ $errors->first('message') }}</div>
@endif
    <livewire:show :postulateId="$postulateId" />
@endsection

