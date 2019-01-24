<select class="mdb-select md-form">
        <option value="" disabled @if(@!$page->category_id) selected  @endif>Categoria</option>
    @foreach($categories as $cat)
        <option value="{{ $cat->id }}" @if($cat->id == @$page->category_id) selected  @endif>{{ @$cat->name }}</option>
    @endforeach

</select>
<div class="md-form form-group">
        <input type="text" name="title" id="form2" value="{{ @$page->title }}" class="form-control">
        <label for="form2">Titulo</label>
</div>



<div class="md-form form-group">
        <input type="text" name="tags" id="form4" value="{{ @$page->tags }}" class="form-control">
        <label for="form4">Tags</label>
</div>
<div class="md-form form-group">
    <textarea name="content" id="form5" class="md-textarea form-control">{{ @$page->content }}</textarea>
    <label for="form5">Contenido</label>
</div>

<div class="md-form form-group">
    <a href="#" class="btn btn-danger btn-page-save-edit">Guardar</a>
</div>
