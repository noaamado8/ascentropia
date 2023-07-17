@extends('layouts.master')

@section('titulopaxina', 'Rexistro en Actividades')



<style>

    #redes_sociais>a{
    
    text-decoration: none; 
    color: black;}
    
    
    
    #menu-principal{
        text-align: center;
    }
    
    
    </style>
@section('contidocentral')



<h4>  {{$actividade->titulo}}
</h4>


<div class="row">
<div class="col-sm-6">
   

    @if (\Session::has('estado'))
    <div class="alert alert-success">
        {!! \Session::get('estado') !!}
       
    </div>
@endif
    
    <form method="post" action="{{ route("participantes.store") }}">
        
        @include('participantes._form')
        <input id="actividade_id" name="actividade_id" type="hidden" value="{{$actividade->id}}">
<br>

        <button type="submit" class="btn btn-dark" style>Anotarme na actividade</button>

       
        <br/>
<br>
      </form>


</div>

<div class="col-sm-6">

    <img src="{{ asset('imaxes/actividades/' . $actividade->imaxe) }}" class="w-100"/>
</div>

</div>


@endsection