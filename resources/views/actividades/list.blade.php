


@extends('layouts.master')

@section('titulopaxina','Actividades')



<style>
  .actividade{
      align-content: center;
  }
  
  
  .actividade>a:hover{
      text-decoration: none;
      color:#2a2a2a;
  }
  
    </style>
  
@section('contidocentral')



<h1>Todas as Actividades:</h1>

<br>

<div class="row" >

    @foreach ($actividades as $actividade)  



<div class="col-sm-4 actividade {{-- d-none d-sm-block --}}">
     
  <a href="{{ route('actividades.show', $actividade->id) }}">    
    <div class="card" style="width: 18rem;">
    
  
      <img class="card-img-top" src="{{ asset('imaxes/actividades/' . $actividade->imaxe) }}" alt="Actividade {{$actividade->id}}">
      <div class="card-body">
        <h5 class="card-title">{{$actividade->titulo}}</h5>
       
      </div>
    </div>

    </a>

    <br>
    </div>
 


@endforeach

</div>



@endsection