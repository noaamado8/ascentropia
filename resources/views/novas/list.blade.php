@extends('layouts.master')

@section('titulopaxina','Novas')



<style>
  .nova{
      align-content: center;
  }
  
  
  .nova>a:hover{
      text-decoration: none;
      color:#2a2a2a;
  }
  
    </style>
  
@section('contidocentral')



<h1>Novas</h1>

<br>

<div class="row" >

    @foreach ($novas as $nova)  



<div class="col-sm-4 nova {{-- d-none d-sm-block --}}">
     
  <a href="{{ route('novas.show', $nova->id) }}">    <div class="card" style="width: 18rem;">
  

        <img class="card-img-top" src="{{ asset('imaxes/novas/' . $nova->imaxe) }}" alt="Nova {{$nova->id}}">
        <div class="card-body">
          <h5 class="card-title">{{$nova->titulo}}</h5>
          <h6 class="card-title">{{ Carbon\Carbon::parse($nova->created_at)->format('d-m-Y') }}</h6>
          <p class="card-text">{{$nova->resumo}}</p>
        </div>
      </div>

    </a>
    </div>
 


@endforeach

</div>



@endsection