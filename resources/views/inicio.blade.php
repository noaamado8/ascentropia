

@extends('layouts.master')
@section('titulopaxina','Inicio')

@section('video')

<video width="100%"  controls autoplay poster="imaxes/video_poster2.png" >
    <source src="imaxes/video.mp4" type="video/mp4">
    Your browser does not support HTML video.
  </video>

  @endsection


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



<link href="css/inicio.css" rel="stylesheet" type="text/css"> 



<div id="corpo_inicio">


  
      


{{-- 
<div id="carousel1" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        @foreach ($eventos as $evento)
    <li data-target="#carousel{{$evento->id}}" data-slide-to="{{$evento->id}}" class="active"></li>
     
      @endforeach

    </ol> 

    <div class="carousel-inner">
@foreach ($eventos as $evento)


    <a href="{{ route('eventos.show', $evento->id) }}">
    <div class="carousel-item  active">
        <img class="d-block w-100" src="{{ asset('imaxes/eventos/' . $evento->imaxe) }}" alt="{{$evento->id}} imaxe">
        
        <div class="carousel-caption d-none d-md-block">
            <h5>{{$evento->titulo}}</h5>
            <p>{{$evento->datas}}</p>
          </div> 
    </div>
    
     
</a>
@endforeach
</div>
<a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Seguinte</span>
  </a>
</div>


 --}}

<div id="presentacion">

<div class="row">
   

 
    <div class="col-sm-6   ">
      
        
    <h1>Quénes somos?</h1>
   
<p>A Asociación Sociocultural Entropía é un proxecto sen ánimo de lucro de dinamización e desenvolvemento do medio rural, que ten entre os seus obxetivos a creación de espazos de encontro e troca de saberes, así coma a rehabilitación e aproveitamento do lugar seguindo a filosofía da permacultura e a bioconstrución. ASC Entropía declárase Ecoloxista, Feminista e Antirracista. Este é un proxecto a longo prazo que está a nacer, polo que medrará cas persoas que participen nel! Ideas e propostas son benvidas! </p>    
    </div>

    <div class="col-sm-6 order-md-first">
    
     
        <img src="imaxes/quenes_somos.jpg" />
        <br>
        <br>
    </div>



    </div>
    

    <br>
    <br><br>
<div class="row" id="que_facemos">
    <div class="col-sm-6">
    
    <h1>Qué facemos?</h1>
  
    
    <p>Para o cumplimento de todos os nosos fins a través de todas as nosas filosofías realizaremos eventos e eventos, orientados a todos os distintos grupos de idade. Algunhas das actividades serán orientadas á reconstrución e  rehabilitación do patrimonio, á implantación de medidas de accesibilidade dirixidas a todas as persoas, agricultura ecolóxica e biocontrucción, actividades culturais e recreativas, cursos e obradoiros... e moito máis. (Segue coñecéndonos!)
    </p>
    
    </div>

 
    <div class="col-sm-6">
     
        <img  src="imaxes/que_facemos.jpg" />
    
    </div>
    </div>

</div>


<br/><br/>
<hr/>
<div id="novas">
    <h1 >Novas</h1>
<br/>
<div class="row" >

    @foreach ($novas as $nova)  



<div class="col-sm-4 nova {{-- d-none d-sm-block --}}">
     
    <a href="{{ route('novas.show', $nova->id) }}">
      
    <div class="card" style="width: 18rem;">
  

        <img class="card-img-top" src="{{ asset('imaxes/novas/' . $nova->imaxe) }}" alt="Nova {{$nova->id}}">
        <div class="card-body">
          <h5 class="card-title">{{$nova->titulo}}</h5>
          <h6 class="card-title">{{ Carbon\Carbon::parse($nova->created_at)->format('d-m-Y') }}</h6>
          <p class="card-text">{{$nova->resumo}}</p>
        </div>
      </div>
    </a>
      <br>
    </div>


@endforeach

</div>

<br/>

<a class="nav-link " aria-current="page" href="{{ route('novas.index') }} "><button
    class="btn btn-dark">Todas as Novas</button></a>


</div>




</div>
@endsection