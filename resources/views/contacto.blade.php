

@extends('layouts.master')
@section('titulopaxina','Contacto')


<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-
xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
crossorigin=""/>
<style>
    #mapa {position: absolute; top: 0; bottom: 0; left: 0; right: 0;
    
    
    }
    </style>

<script src="https://unpkg.com/leaflet@1.6.0/dist/leafle t.js" integrity="sha512-
gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
crossorigin=""></script>

    

@section('contidocentral')
<h2>Envíanos as túas dúbidas, opinións ou suxerencias :</h2>








    
    @if (\Session::has('estado'))
    <div class="alert alert-success">
        {!! \Session::get('estado') !!}
       
    </div>
    @endif
   
   <form action={{ route('contacto') }} method="POST">
   
   
   
       @csrf
       <label for="nome">Nome:</label>
       <input type="text" class="form-control" id="nome" name="nome" value="" />











   
   <div class="form-group">
       <label for="mail">Correo Elecrtrónico:</label>
       <input type="text" class="form-control" id="mail" name="mail" value="" />
   </div>
   <div class="form-group">
       <label for="mobil">mobil:</label>
       <input type="mobil" class="form-control" id="mobil" name="mobil" value="" />
   </div>





   <div class="form-group">
       <label for="contido">Contido</label>
       <textarea class="form-control" name="contido"></textarea>
   
       @error('contido')
     <small class="text-danger">A túa mensaxe non ten contido</small>
   @enderror
   </div>
   
   
   
   <div class="form-group">
       <button type="submit" class="btn btn-dark">Enviar mensaxe</button>
   </div>
   </form>




@endsection



<script type="text/javascript">
    const tilesProvider = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
    
    let meuMapa = L.map('mapa').setView([42.878,-8.537], 13); 
    L.tileLayer(tilesProvider, {
    maxZoom: 18, 
    }).addTo(meuMapa);
    
    </script>