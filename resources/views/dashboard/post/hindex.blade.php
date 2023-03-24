@extends('dashboard.master')
@section('titulo','poster')
@section('contenido')
<main>
     <div class='container py-4'
     <h2>Post publicados</h2>
     <a herf="{{ url ('dashboard / post / create') }}" class="btn btn-primery btn-sm">Nuevo post</a>