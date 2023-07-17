@extends('layouts.master')

@section('tiulopaxina', 'Edición de Novas')

@section('textocabeceira', 'Edición da Nova "' . $nova->titulo.'"')

@section('contidocentral')
    <form method="post" action="{{ route('novas.update', $nova->id) }}">
        @method('PUT')
        @include('novas._form')
   
        <div class="form-group">

            <label for="imaxe">Imaxe:</label><br>
            <input type="file" name="imaxe" id="imaxe" value="{{ old('imaxe', $nova->imaxe) }}">
        </div>
        <br/>
        <button type="submit" class="btn btn-primary">Editar Nova</button>

   
    </form>
    <br />

    <a href="{{ route ('novas.index')  }}" class="btn btn-secondary">Volver</a>
@endsection
