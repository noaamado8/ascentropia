@extends('layouts.app')






@section('content')

<div class="container">

<br>
<a href="/">Páxina</a>

    
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Accións</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row"><a class="nav-link  col-6" aria-current="page" href="{{ route('actividades.create') }} "><button
                        class="btn btn-dark">Publicar Actividade</button></a> 
                        {{-- <a class="nav-link col-6" aria-current="page" href="{{ route('eventos.create') }} "><button
                            class="btn btn-dark">Publicar Evento</button></a> --}}
                            <a class="nav-link col-6" aria-current="page" href="{{ route('novas.create') }} "><button
                                class="btn btn-dark">Publicar Nova</button></a>
               </div>

                        
                </div>
            </div>
        </div>







 <div class="col-md-8">
            <div class="card">
                <div class="card-header">Datos</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                
                    
<div class="row">

   
    <a class="nav-link  col-6" aria-current="page" href="{{ route('socixs.index') }} "><button
        class="btn btn-dark">Listado de Socixs</button></a>
    <a class="nav-link  col-6" aria-current="page" href="{{ route('participantes.index') }} "><button
        class="btn btn-dark">Listado de Participantes</button></a>
</div>
                        
                </div>
            </div>
        </div>








    </div>
</div>
@endsection
