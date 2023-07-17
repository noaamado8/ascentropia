<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulopaxina')</title>
  
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>



    <script src="https://kit.fontawesome.com/e70fb32f70.js" crossorigin="anonymous"></script>
    
    
    <link href="css/master.css" rel="stylesheet" type="text/css"> 

<style>




#menu-principal{


background-color: #a8caa3;
text-align: center;


}

/* 
#toggler-icon{
  
  align-content: center;
  text-align: center;


}
 */

#pe_paxina a {


 
text-decoration:none;
color:#2a2a2a;




}



#avisos_legais{
  text-align: right;
}




</style>

</head>


<body>




    <nav class="navbar navbar-light flex-row text-left" {{-- style="background-color: #e8890c;" --}} >

   
      <a class="navbar-brand" aria-current="page" href="/"><b>ASC ENTROPÍA</b></a>

      <div id="redes_sociais">
        <a href="mailto:ascentropia@gmail.com" ><i class="fas fa-envelope fa-lg"></i>   </a> {{-- &nbsp;ascentropia@gmail.com --}}


&nbsp; &nbsp;
<a href="https://www.google.com/maps/place/42%C2%B044'29.4%22N+8%C2%B023'05.3%22W/@42.7410159,-8.3869647,16.25z/data=!4m5!3m4!1s0x0:0x0!8m2!3d42.7415111!4d-8.3848069?hl=es" ><i class="far fa-compass fa-lg"></i> </a> 

        &nbsp; &nbsp;  &nbsp;&nbsp; 
        <a href="https://www.facebook.com/ascentropia2021/" ><i class="fab fa-facebook-square fa-lg"></i></i> </a>
    
        
        &nbsp; &nbsp;  
        <a href="https://www.instagram.com/ascentropia/" ><i class="fab fa-instagram fa-lg"></i> </a>
        


        &nbsp;  &nbsp;
      </div>

     

    </nav>

    <nav class="navbar navbar-expand-lg navbar-light sticky-top" id="menu-principal">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon" id="toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav d-flex justify-content-around w-100">
          <a class="nav-link" href="{{ route('socixs.create') }}" ><b>SÚMATE</b></a>
          <a class="nav-link" href="{{ route('actividades.index') }}" ><b>ACTIVIDADES</b></a>
          <a class="nav-link" href="/galeria" ><b>GALERÍA</b></a>
          <a class="nav-link" href="{{ route('contacto') }}" ><b>CONTACTO</b></a>

        </div>
      </div>
    </nav>
{{-- 
    <nav class="navbar navbar-expand-lg navbar-light sticky-top " id="menu-principal"  style="background-color:  #93bd8c;" >
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon" id="toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse d-flex justify-content-around" id="navbarNav">
        <ul class="navbar-nav " >
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('socixs.create') }}" >SÚMATE</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('actividades.index') }}" >ACTIVIDADES</a>
          </li> <li class="nav-item active">
            <a class="nav-link" href="{{ route('socixs.create') }}" >GALERÍA</a>
          </li> <li class="nav-item active">
            <a class="nav-link" href="{{ route('contacto') }}" >CONTACTO</a>
          </li> 
        </ul>
      </div>
    </nav>

 --}}


{{-- <div id="nav-menu">
  <a id="boton-menu-desplegar" href="#"><i class="fas fa-bars"></i></a>
  <div id="menu">
    <a href="{{ route('socixs.create') }}" id="boton-menu"> <div ><b>SÚMATE</b></div></a>
    <a href="{{ route('actividades.index') }}" id="boton-menu"> <div ><b>ACTIVIDADES</b></div></a>
    <a href="#" id="boton-menu"> <div ><b>GALERÍA</b></div></a>
    <a href="{{ route('contacto') }}" id="boton-menu"> <div ><b>CONTACTO</b></div></a>
 
  </div>

</div> --}}









@yield('video')

<div class="container">
     



            <h1> @yield('textocabeceira')</h1>
 
    
           
    
    


<br>
 

            @yield('contidocentral')

         

<br>
<br>

<hr>
<div class="row" id="pe_paxina">

  <div class="col-sm-4">
   
    <p><b>ASC ENTROPÍA</b></p>

    <p>ascentropía@gmail.com</p>
    <p>@ascentropía</p>
    <p>Lugar Abelao, nº8. Oca A Estrada</p>
 
    </div>

    <div class="col-sm-4" style="text-align: center">
      <p><b>COLABORADORES/AS</b></p>


     <a href="https://www.instagram.com/suenosderaices/"> <i class="fab fa-instagram"></i>  &nbsp; @suenoderaices </a>
 
    </div>
    <div class="col-sm-4" id="avisos_legais" >
      <p><b>AVISOS LEGAIS</b></p>

<a href="politica_privacidade" >Política de Privacidade</a>

<br>
<a href="politica_cookies">Política de Cookies</a>



    </div>


</div>
</div>
          
</body>
</html>