{{-- Llamamos la vista de la cual heredaremos la estructura --}}
@extends('dashboard.master')
@section('Titulo','AgregarPost')
@section('contenido')
@include('dashboard.partials.validation-error')
<h1>Registrar post</h1>

<form action="{{ route('post.store') }}" method="post">
@csrf
{{-- form:post --}}
{{-- Fila 1 --}}
<div class="row">
    {{-- .row para crear fila --}}
    <div class="form-group">
         <label for="name">Artículo</label><input class="form-control" type="texto" name="name" id="name">
    </div>
</div>

{{ Fila 2 }}
<div class="row form-group">
    <label for="description">contenido</label>
    <textarea class="form-control" name="description" id="description" rows="10"></textarea>
</div>

{{-- Fila 3 --}}
  <div class="row center">
     {{-- las columnas en bootstrap tienen un ancho de 12, añadir dos input
           en una fila: 12/cantidadInput -- }}

     <div class="col s6">
          <button class="btn btn-succes btn-sm" type="submit">Publicar</button>
          <button class="btn btn=-danger btn-sm>"Cancelar</butoon>
     </div>
  </div>
</form>
@endsection

