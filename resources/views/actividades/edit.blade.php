@extends('layouts.master')

@section('tiulopaxina', 'Edición de Actividades')
<br>

@section('textocabeceira', 'Edición da Actividade "' . $actividade->titulo.'"')

@section('contidocentral')
    <form method="post" action="{{ route('actividades.update', $actividade->id) }}">
        @method('PUT')
        @include('actividades._form')
   
        <div class="form-group">

            <label for="imaxe">Imaxe:</label><br>
            <input type="file" name="imaxe" id="imaxe" value="{{ old('imaxe', $actividade->imaxe) }}">
        </div>
        <br/>
        <button type="submit" class="btn btn-primary">Editar Actividade</button>

   
    </form>
    <br />

    <a href="{{ route ('actividades.index')  }}" class="btn btn-secondary">Volver</a>
@endsection
