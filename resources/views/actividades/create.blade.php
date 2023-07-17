@extends('layouts.app')

@section('titulopaxina', 'Nova Actividade')




    @section('content')

    <div class="container">

        <h2> Publicar nova actividade</h2>

        <br>

    
        <form method="post" action="{{ route("actividades.store") }}"  enctype="multipart/form-data">
            
            @include('actividades._form')

            <div class="form-group">

                <label for="imaxe">Imaxe:</label><br>
                <input type="file" name="imaxe" id="imaxe" >
            </div>
           
            <br/>

            <button type="submit" class="btn btn-primary">Publicar Actividade</button>
          </form>
        </div>

    @endsection