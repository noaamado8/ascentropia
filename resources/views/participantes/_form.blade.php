
      @csrf
      <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome', $participante->nome) }}" />
        @error('nome')
            <small class="alert alert-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="apelidos">Apelidos:</label>
        <input type="text" class="form-control" id="apelidos" name="apelidos"
            value="{{ old('apelidos', $participante->apelidos) }}" />
        @error('apelidos')
            <small class="alert alert-danger">{{ $message }}</small>
        @enderror
    </div>


    <label for="tipo_documento">Tipo de Documento</label>

    <div class="form-check">

        <input class="form-check-input" type="radio"  id="tipo_documento1" name="tipo_documento" value="dni">
        <label class="form-check-label" for="tipo_documento1">
DNI        </label>
      <br>
        <input class="form-check-input" type="radio"  id="tipo_documento2" name="tipo_documento" value="nie">
        <label class="form-check-label" for="tipo_documento2">
          NIE
        </label>

        <br>
        <input class="form-check-input" type="radio"  id="tipo_documento3" name="tipo_documento" value="pasaporte">
        <label class="form-check-label" for="tipo_documento3">
Pasaporte        </label>
      
      </div>
      


<br>




<div class="form-group">
    <label for="numero">Número de Documento:</label>
    <input type="text" class="form-control" id="numero" name="numero" value="{{ old('numero', $participante->numero) }}"
        maxlength="9" />
    @error('numero')
        <small class="alert alert-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
  <label for="data_nacemento">Data de Nacemento:</label>
 {{--  @if (!empty($participante->data_nacemento))
      <input type="date" class="form-control" id="data_nacemento" name="data_nacemento"
          value="{{ old('data_nacemento', $participante->data_nacemento->format('Y-m-d')) }}" />
  @else
      <input type="date" class="form-control" id="data_nacemento" name="data_nacemento"
          value="{{ old('data_nacemento') }}" />
  @endif --}}
  <input type="date" class="form-control" id="data_nacemento" name="data_nacemento"
  value="{{ old('data_nacemento') }}" />
</div>
<div class="form-group">
    <label for="mobil">Teléfono Móbil:</label>
    <input type="text" class="form-control" id="mobil" name="mobil"
        value="{{ old('mobil', $participante->mobil) }}" maxlength="9" />
    @error('mobil')
        <small class="alert alert-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
  <label for="email">Correo Electrónico</label>
  <input type="text" class="form-control" id="email" name="email"
      value="{{ old('email', $participante->email) }}" maxlength="50" />
  @error('email')
      <small class="alert alert-danger">{{ $message }}</small>
  @enderror
</div>




