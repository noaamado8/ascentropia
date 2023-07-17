@csrf


 <div class="form-group">
  <label for="titulo">Título: *</label>
  <input type="text" class="form-control" id="titulo" name="titulo" value="{{ old('titulo', $nova->titulo) }}" />
 

</div> 

  <div class="form-group">
    <label for="resumo">Resumo: </label>
    <input type="text" class="form-control" id="resumo" name="resumo" value="{{ old('resumo', $nova->resumo) }}" />
  
  
  </div> 

   <div class="form-group">
    <label for="contido">Contido: *</label>
    <textarea  class="form-control" id="contido" name="contido" rows="5" value="{{ old('contido', $nova->contido) }}" ></textarea>
  
  
  </div>  

  