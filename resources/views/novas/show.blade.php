@extends('layouts.master')

@section('titulopaxina',$nova->titulo )



@section('textocabeceira', )

<style>
#contido{
    text-align: justify;

}


#redes_sociais>a{

text-decoration: none; 
color: black;}




</style>

@section('contidocentral')


<br><br>


<br>



<div class="row">

    <div class="col-sm-6">

        <br>
        <h1>{{ $nova->titulo}}</h1>
<br>
        <img src="{{ asset('imaxes/novas/' . $nova->imaxe) }}" width="100%" 
        alt={{ $nova->imaxe }}" /><br />
<br>



    </div>

    <div class="col-sm-6">
    
    <br>
<br>
<h5>        {{ Carbon\Carbon::parse($nova->created_at)->format('d-m-Y') }}

</h5>

<h5><b>{{$nova->resumo}}</b><h5>


    <br>
<p id="contido">

    {{ $nova->contido }} <br>
    <br>
@auth
<a href="{{route('novas.edit', $nova->id)}}" class="btn btn-success">Editar Nova</a>

<br><br>

 
@endauth
        <a href="{{ route ('novas.index')  }}" class="btn btn-dark">Todas as Novas</a>

    <br>
    
    
  
        <br>


      
        
       


      

        

    </div>

 
    </div>

    <br><br>




@endsection