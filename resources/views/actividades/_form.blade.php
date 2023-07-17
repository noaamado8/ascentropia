@csrf


 <div class="form-group">
  <label for="titulo">Título: *</label>
  <input type="text" class="form-control" id="titulo" name="titulo" value="{{ old('titulo', $actividade->titulo) }}" />
  @error('titulo')
      <small class="alert alert-danger">{{ $message }}</small>
  @enderror

</div> 

<div class="form-group">
    <label for="categoria">Categoría:*</label>
    <input type="text" class="form-control" id="categoria" name="categoria" value="{{ old('categoria', $actividade->categoria) }}" />
    @error('categoria')
        <small class="alert alert-danger">{{ $message }}</small>
    @enderror
  
  </div> 

  <div class="form-group">
    <label for="horario">Horario: *</label>
    <input type="text" class="form-control" id="horario" name="horario" value="{{ old('horario', $actividade->horario) }}" />
    @error('horario')
        <small class="alert alert-danger">{{ $message }}</small>
    @enderror
  
  </div> 

   <div class="form-group">
    <label for="descripcion">Descripción: *</label>
    <textarea  class="form-control" id="descripcion" name="descripcion" rows="5" value="{{ old('descripcion', $actividade->descripcion) }}" ></textarea>
    @error('descripcion')
        <small class="alert alert-danger">{{ $message }}</small>
    @enderror
  
  </div>  

  

  <div class="form-group">
    <label for="aforo">Aforo</label>
    <input type="text" class="form-control" id="aforo" name="aforo" value="{{ old('aforo', $actividade->aforo) }}" />
    @error('aforo')
        <small class="alert alert-danger">{{ $message }}</small>
    @enderror
  
  </div> 

  <div class="form-group">
    <label for="prezo">Prezo</label>
    <input type="text" class="form-control" id="prezo" name="prezo" value="{{ old('prezo', $actividade->prezo) }}" />
    @error('prezo')
        <small class="alert alert-danger">{{ $message }}</small>
    @enderror
  
  </div> 


