@extends('layouts.app')
@section('title', "Laravel 12")
@push('css')
<style>
    body {
        background-color: #f3f4f6;
    }
</style>
@endpush
@section('content')

<div class="max-w-4xl mx-auto px-4 mt-2">

    <x-alert2 type="info" class="mb-4">
        <x-slot name="title">
            Titulo de la alerta
        </x-slot>
        Contenido de la alerta
    </x-alert2>

    <p>Hola mundo</p>
</div>
@endsection


