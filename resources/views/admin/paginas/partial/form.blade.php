
<div class="form-group">
        
        <div class="col-sm-12">
            <select class="form-control" name="slider_id">
                
                    <option value="" >Slider</option>
                @foreach($sliders as $sli)
                    <option value="{{ $sli->id }}" @if($sli->id == @$page->slide_id) selected  @endif>{{ @$sli->title }}</option>
                @endforeach
                </div>

            </select>
        </div>
</div>

<div class=" form-group">
    
        <div class="col-sm-12">
            <select class="form-control" name="category_id">
                    <option value="">Categoria</option>
                @foreach($categories as $cat)
                    <option value="{{ $cat->id }}" @if($cat->id == @$page->category_id) selected  @endif>{{ @$cat->name }}</option>
                @endforeach

            </select>
        </div>    
</div>

<div class="md-form form-group">
    <div class="col-sm-12">
        <input type="text" name="title" id="title" value="{{ @$page->title }}" class="form-control" placeholder="Titulo">
     </div>   
</div>

<div class="md-form form-group">
    <div class="col-sm-12">
        <input type="text" name="slug" id="slug" value="{{ @$page->slug }}" class="form-control" placeholder="Slug">
    </div>    
</div>

<div class="md-form form-group">
    <div class="col-sm-12">
        <input type="text" name="tags" id="form4" value="{{ @$page->tags }}" class="form-control" placeholder="Tags">
   </div>     
</div>

<div class="md-form form-group">
    <div class="col-sm-12">
        <input type="text" name="resume" id="resume" value="{{ @$page->resume }}" class="form-control" placeholder="Extracto">
     </div>   
</div>


<div class="md-form form-group">
    <div class="col-sm-12">
        <textarea id="editor-container" class="form-control" placeholder="Contenido.."></textarea>
    </div>
</div>
<div class="fixed-content-btn">
    <a href="#" class="btn-floating btn-lg blue waves-effect waves-light btn-add-content" data-toggle="tooltip" title="Nuevo Contenido">
      <i class="fas fa-plus mdb-gallery-view-icon"></i>
    </a>
</div>

<div class="md-form form-group text-center">
   
    <button  class="btn btn-danger" type="submit">Guardar</button>
</div>
