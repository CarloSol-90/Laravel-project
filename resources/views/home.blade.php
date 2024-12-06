@extends('layouts.app')

@section('title', 'Laravel')

@push('css')
    <style>
        body {
            background-color: aqua;
        }
    </style>
@endpush

@push('css')
    <style>
        body {
            color: red;
        }
    </style>
@endpush

@section('content')
    <div class="max-w-4xl mx-auto px-4">
    <x-alert2 type="success" class="mb-4"> {{-- Esta clase esta almacenada en la variable llamada $attribute y se ha mergeado con la clase ya existente en el componente alert.--}}
       <x-slot name="title">
           Titulo de la alerta
       </x-slot>

       Primer mensaje de alerta
   </x-alert2>  

   <p>Hola Mundo</p>
    </div>
@endsection

