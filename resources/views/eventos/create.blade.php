@extends('layouts.app')

@section('titulopaxina', 'Novo Evento')




    @section('content')

    <div class="container">

        <h2> Publicar novo evento</h2>

        <br>

    
        <form method="post" action="{{ route("eventos.store") }}"  enctype="multipart/form-data">
            
            @include('eventos._form')

            <div class="form-group">

                <label for="imaxe">Imaxe:</label><br>
                <input type="file" name="imaxe" id="imaxe" >
            </div>
           
            <br/>

            <button type="submit" class="btn btn-primary">Publicar Evento</button>
          </form>
        </div>

    @endsection