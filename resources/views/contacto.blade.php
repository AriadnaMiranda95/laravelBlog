
@extends('layout.base')

@section('title', 'Contacto')

@section('styles')
    @parent()
    <link href="{{ asset('resources/css/screen2.css') }}" rel="stylesheet" />
@stop

@section('body')
    <header>
        <h1>Formulario contacto</h1>
    </header>

    @if(Session::has('message'))
        <p class="blogger-notice">
            {{ Session::get('message') }}
        </p>
    @endif

    <p>¿ Necesita ponerse en contacto con Laravelblog ?</p>

    <form action="" method="post"  class="blogger">
        @csrf
        <div>
            <label>Nombre</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>

        <div>
            <label>Email</label>
            <input type="email" class="form-control" name="email" id="email">
        </div>

        <div>
            <label>Asunto</label>
            <input type="text" class="form-control" name="subject" id="subject">
        </div>

        <div>
            <label>Descripción</label>
            <textarea class="form-control" name="body" id="body" rows="4"></textarea>
        </div>

        <input type="submit" name="send" value="Enviar" class="btn btn-dark btn-block">
    </form>

@stop