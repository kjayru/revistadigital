<div class="md-form form-group">
    <select class="form-control" name="category_id">
            <option value="" disabled @if(@!$page->category_id) selected  @endif>Categoria</option>
        @foreach($categories as $cat)
            <option value="{{ $cat->id }}" @if($cat->id == @$page->category_id) selected  @endif>{{ @$cat->name }}</option>
        @endforeach

    </select>
</div>
<div class="md-form form-group">
        <input type="text" name="title" id="form2" value="{{ @$page->title }}" class="form-control">
        <label for="form2">Titulo</label>
</div>

<div class="md-form form-group">
        <input type="text" name="tags" id="form4" value="{{ @$page->tags }}" class="form-control">
        <label for="form4">Tags</label>
</div>



<div id="tooltip-controls">
    <button id="bold-button"><i class="fa fa-bold"></i></button>
    <button id="italic-button"><i class="fa fa-italic"></i></button>
    <button id="link-button"><i class="fa fa-link"></i></button>
    <button id="blockquote-button"><i class="fa fa-quote-right"></i></button>
    <button id="header-1-button"><i class="fa fa-header"><sub>1</sub></i></button>
    <button id="header-2-button"><i class="fa fa-header"><sub>2</sub></i></button>
</div>
<div id="sidebar-controls">
    <button id="image-button"><i class="fa fa-camera"></i></button>
    <button id="video-button"><i class="fa fa-play"></i></button>
    <button id="tweet-button"><i class="fa fa-twitter"></i></button>
    <button id="divider-button"><i class="fa fa-minus"></i></button>
</div>
      <textarea id="editor-container">Tell your story...</textarea>

<div class="fixed-content-btn">
    <a href="#" class="btn-floating btn-lg blue waves-effect waves-light btn-add-content" data-toggle="tooltip" title="Nuevo Contenido">
      <i class="fas fa-plus mdb-gallery-view-icon"></i>
    </a>
</div>

<div class="md-form form-group">
    <a href="#" class="btn btn-danger btn-page-save-edit">Guardar</a>
</div>
