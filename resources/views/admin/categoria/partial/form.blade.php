
<div class="md-form form-group">
        <input type="text" name="name" id="form2" value="{{ @$category->name }}" placeholder="Nombre" class="form-control" required>

</div>

<div class="md-form form-group">
        <input type="text" name="slug" id="form3" value="{{ @$category->slug }}" placeholder="Slug" class="form-control" required>

</div>

<div class="md-form form-group">
    <textarea name="description" id="form5" class="md-textarea form-control" placeholder="Descripción">{{ @$category->description }}</textarea>
</div>

<div class="form-group">
    <label for="cover">Seleccione una imagen</label>
    <input type="file" name="cover" id="cover" class="form-control-file">
    @if(@$category->cover)
    <p>
            <img src="{{ $category->cover }}" class="img-fluid" style="max-width:100px">
    </p>
    @endif
</div>
<div class="md-form form-group">
        <div class="form-check">
                <input type="checkbox" name="estado" class="form-check-input" id="form4">
                <label class="form-check-label" for="form4">Oculto</label>
        </div>

</div>

<div class="md-form form-group">
    <input type="submit" class="btn btn-danger btn-page-save-edit" value="Guardar">
</div>
