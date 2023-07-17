@extends('layouts.app')

@section('tiulopaxina', 'Edición de Participantes')


@section('content')

<div class="container">

<h1>Edición da participante {{$participante->nome}}</h1>

@if (\Session::has('estado'))
<div class="alert alert-success">
    {!! \Session::get('estado') !!}
   
</div>
@endif

    <form method="post" action="{{ route('participantes.update', $participante->id) }}">
        @method('PUT')
        @include('participantes._form')
   
       
        <br/>
        <button type="submit" class="btn btn-primary">Editar Participante</button>

   
    </form>
    <br />

    <a href="{{ route ('participantes.index')  }}" class="btn btn-secondary">Volver</a>

</div>
@endsection
