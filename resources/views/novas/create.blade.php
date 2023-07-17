@extends('layouts.app')

@section('titulopaxina', 'Publicar Nova')




    @section('content')

    <div class="container">

        <h2> Publicar Nova</h2>

        <br>

    
        <form method="post" action="{{ route("novas.store") }}"  enctype="multipart/form-data">
            
            @include('novas._form')

            <div class="form-group">

                <label for="imaxe">Imaxe:</label><br>
                <input type="file" name="imaxe" id="imaxe" >
            </div>
           
            <br/>

            <button type="submit" class="btn btn-primary">Publicar</button>
          </form>
        </div>

    @endsection