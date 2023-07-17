@extends('layouts.master')

@section('titulopaxina',$evento->titulo )



@section('textocabeceira', $evento->titulo )



@section('contidocentral')




<br><br>
<h4><b>{{$evento->datas}}</b> </h4>

<img src="{{ asset('imaxes/eventos/' . $evento->imaxe) }}" width="100%" 
alt={{ $evento->imaxe }}" />


<br /><br />



<h5>

    {{ $evento->descripcion }}</h5>

    <b>Prezo:</b> {{ $evento->prezo }} <br>




{{-- @auth
<a href="{{ route('recetas.edit', $receta->id) }}" class="btn btn-primary">Editar</a>
<br> <br>

 <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal"
data-id="{{ $receta->id }}">Borrar</button> 

<form action="{{ route('recetas.destroy', $receta->id) }}" method="POST">
    @method('DELETE')
    @csrf
    <button type="submit" class="btn btn-danger">Borrar</button>
    </form>
@endauth

<br>

<button class="btn btn-primary"> VOTAR</button>

<br><br>



    <a href="{{ url()->previous() }}" class="btn btn-secondary">Volver</a>
 --}}



@endsection