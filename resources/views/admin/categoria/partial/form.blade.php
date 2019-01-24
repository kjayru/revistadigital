
<div class="md-form form-group">
        <input type="text" name="name" id="form2" value="{{ @$category->name }}" class="form-control">
        <label for="form2">Nombre</label>
</div>

<div class="md-form form-group">
        <input type="text" name="slug" id="form3" value="{{ @$category->slug }}" class="form-control">
        <label for="form3">Slug</label>
</div>

<div class="md-form form-group">
    <textarea name="description" id="form5" class="md-textarea form-control">{{ @$category->description }}</textarea>
    <label for="form5">Descripción</label>
</div>
<div class="md-form form-group">
        <div class="form-check">
                <input type="checkbox" name="estado" class="form-check-input" id="form4">
                <label class="form-check-label" for="form4">Oculto</label>
        </div>

</div>

<div class="md-form form-group">
    <a href="#" class="btn btn-danger btn-page-save-edit">Guardar</a>
</div>
