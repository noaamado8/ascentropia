@extends('layouts.master')

@section('titulopaxina',$actividade->titulo )






@section('contidocentral')




<br><br>




<div class="row">
    <div class="col-sm-6">
    
    <h1>{{$actividade->titulo}}</h1>
    <br>
<h4>  {{$actividade->categoria}}
</h4>
<br>
<h5><b>Horario:</b>  {{$actividade->horario}}</h5>
<br>
<h5>

    {{ $actividade->descripcion }} <br>
    </h5> 
    <br>
    
    
    <h5>
    
        <b>Prezo:</b> {{ $actividade->prezo }} <br>
        </h5> 
        <br>


      
        
       

@auth
    

        <a href="{{route('actividades.edit', $actividade->id)}}" class="btn btn-success">Editar Actividade</a>
        <br><br>
      

        @endauth
  <a class="nav-link  col-6" aria-current="page" href="/participantes/create?id={{ $actividade->id }} "><button
        class="btn btn-dark">Anotarse</button></a> 
        

    </div>

 
    <div class="col-sm-6">
    
        <img src="{{ asset('imaxes/actividades/' . $actividade->imaxe) }}" width="100%" 
        alt={{ $actividade->imaxe }}" /><br /><br />
    </div>
    </div>

    <br><br>




@endsection