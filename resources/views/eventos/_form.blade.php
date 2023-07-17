@csrf


 <div class="form-group">
  <label for="titulo">Título: *</label>
  <input type="text" class="form-control" id="titulo" name="titulo" value="{{ old('titulo', $evento->titulo) }}" />
  @error('titulo')
      <small class="alert alert-danger">{{ $message }}</small>
  @enderror

</div> 

  <div class="form-group">
    <label for="datas">Datas: *</label>
    <input type="text" class="form-control" id="datas" name="datas" value="{{ old('datas', $evento->datas) }}" />
    @error('datas')
        <small class="alert alert-danger">{{ $message }}</small>
    @enderror
  
  </div> 

   <div class="form-group">
    <label for="descripcion">Descripción: *</label>
    <textarea  class="form-control" id="descripcion" name="descripcion" rows="5" value="{{ old('descripcion', $evento->descripcion) }}" ></textarea>
    @error('descripcion')
        <small class="alert alert-danger">{{ $message }}</small>
    @enderror
  
  </div>  

  

  <div class="form-group">
    <label for="aforo">Aforo</label>
    <input type="text" class="form-control" id="aforo" name="aforo" value="{{ old('aforo', $evento->aforo) }}" />
    @error('aforo')
        <small class="alert alert-danger">{{ $message }}</small>
    @enderror
  
  </div> 

  <div class="form-group">
    <label for="prezo">Prezo</label>
    <input type="text" class="form-control" id="prezo" name="prezo" value="{{ old('prezo', $evento->prezo) }}" />
    @error('prezo')
        <small class="alert alert-danger">{{ $message }}</small>
    @enderror
  
  </div> 


