@extends('layouts.app')

@section('tiulopaxina', 'Edición de Socixs')

@section('content')

<div class="container">

    

<h1> Edición da Socix {{$socix->nome}}</h1>


@if (\Session::has('estado'))
<div class="alert alert-success">
    {!! \Session::get('estado') !!}
   
</div>
@endif
    <form method="post" action="{{ route('socixs.update', $socix->id) }}">
        @method('PUT')
        @include('socixs._form')
   
       
        <br/>
        <button type="submit" class="btn btn-primary">Editar Socix</button>

   
    </form>
    <br />

    <a href="{{ route ('socixs.index')  }}" class="btn btn-secondary">Volver</a>

</div>
@endsection
