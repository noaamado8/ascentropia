@extends('layouts.app')

@section('titulopaxina', 'Listado de Soci@s')


@section('content')

<div class="container">

  <h1>Listado de Soci@s</h1>

<table class="table {{-- table-striped --}} table-hover">
    <thead>
    {{--   <tr>
      @foreach($columnas as $columna)

     @if($columna!='updated_at')

        <th scope="col">{{ $columna }}</th>
@endif
      
      @endforeach
    </tr> --}}


   <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Apelidos</th>
        <th scope="col">Tipo de Documento</th>
        <th scope="col">Número</th>
        <th scope="col">Data Nacemento</th> 
        <th scope="col">Mobil</th>
        <th scope="col">E-mail</th>
        <th scope="col">Tipo</th>
        <th scope="col">Data de Rexistro</th>


        
      </tr> 
    </thead>
    <tbody>
        @foreach($socixs as $socix)
      <tr>
        <th scope="row">{{ $socix->id }}</th>
        <td>{{ $socix->nome }}</td>
        <td>{{ $socix->apelidos }}</td>
        <td>{{ $socix->tipo_documento }}</td>
        <td>{{ $socix->numero }}</td>
        <td>{{ Carbon\Carbon::parse($socix->data_nacemento)->format('d-m-Y') }}</td>
        <td>{{ $socix->mobil }}</td>
        <td>{{ $socix->email }}</td>
        <td>{{ $socix->tipo }}</td>
        <td>{{ Carbon\Carbon::parse($socix->created_at)->format('d-m-Y') }}</td>



        <td>

          <a href="{{ route('socixs.edit', $socix->id) }}" class="btn btn-success">Editar</a>

          <br>

            <form action="{{ route('socixs.destroy', $socix->id) }}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
                

                
         {{--  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal"
              data-id="{{ $persona->id }}">Borrar</button>
          <!--
                  <form action="{{ route('socixs.destroy', $persona->id) }}" method="POST">
                  @method('DELETE')
                  @csrf
                  <button type="submit" class="btn btn-danger">Borrar</button>
                  </form>
                  --> --}}
      </td> 

      </tr>
      @endforeach
    </tbody>
  </table>

{{-- 
{{ $socixs->links() }} --}}


<!-- Si queremos añadir un modal añadimos este código y el JavaScript -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="deleteModalLabel"></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              ¿Está seguro/a de borrar el registro seleccionado?
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

              <form id="formularioBorrado" action="{{ route('socixs.destroy', 0) }}"
                  data-action="{{ route('socixs.destroy', 0) }}" method="POST">
                  @method('DELETE')
                  @csrf
                  <button type="submit" class="btn btn-danger">Borrar Persona</button>
              </form>
          </div>
      </div>
  </div>
</div>

<script>
  window.onload = function () {
      $('#deleteModal').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var id = button.data('id') // Extract info from data-* attributes
          // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
          // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
          var modal = $(this)
          modal.find('.modal-title').text('Borrado de la persona con id: ' + id)

          // Cogemos el accion del data-action por que éste no cambia a lo largo de los distintos borrados.
          // Y así no tenemos problemas al intentar borrar registros con más de 1 dígito o que nos mantenga los dígitos del registro borrado anteriormente.
          accion = $("#formularioBorrado").attr("data-action").slice(0, -1) + id
          $("#formularioBorrado").attr('action', accion)
      })
  }
</script>



</div>
 @endsection