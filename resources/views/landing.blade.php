@extends('layouts.master')

@section('content')
<div class="section-home text-center">
  <h1 class="display-4 fw-bold">La mejor App de Tareas</h1>
  <div class="col-lg-6 mx-auto">
    <p class="lead mb-4">Las aplicación más usada para organizar proyectos y tareas</p>

    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
      <a href="{{ route('register') }}" class="btn btn-primary btn-lg px-4 me-sm-3">Registrate Ahora</a>
     
    </div>
  </div>
</div>

@endsection

