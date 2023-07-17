
@extends('layouts.master')
<link href="css/master.css" rel="stylesheet" type="text/css"> 

@section('titulopaxina', 'Novo/a Socio/a')


<style>

#redes_sociais>a{

text-decoration: none; 
color: black;}



#menu-principal{
    text-align: center;
}


</style>

{{-- @section('textocabeceira', 'Rexistrarse') --}}

    @section('contidocentral')

    <br><br>


    <h1>Súmate á nosa equipa! </h1>
<br>
<br>
    <div class="row">


<div class="col-sm-6">
   
    @if (\Session::has('estado'))
    <div class="alert alert-success">
        {!! \Session::get('estado') !!}
       
    </div>
@endif

    
        <form method="post" action="{{ route("socixs.store") }}">
            
            @include('socixs._form')
           
            <br/>
<br>
            <button type="submit" class="btn btn-dark" style>Facerme Socio/a</button>
          </form>


</div>


<div class="col-sm-6">


<img src="https://ascentropia.kozow.com/imaxes/sumate.png" class="w-100"/>
</div>

    </div>

   

    @endsection

