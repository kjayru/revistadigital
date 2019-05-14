                                

    <div class="form-group row {{ $errors->has('title') ? 'has-error' : '' }}">
            <label for="title" class="col-md-2 col-form-label">Título</label>
            <div class="col-md-5">
                <input type="text" name="title" id="title" value="{{@$item->title}}{{ old('title')}}" class="form-control ">
                @if ($errors->has('title'))
                <span class="help-block" role="alert">
                    <strong>{{ $errors->first('title') }}</strong>
                </span>
            @endif
            </div>
    </div>

    <div class="form-group row">
            <label for="subtitle" class="col-md-2 col-form-label">Texto Sub</label>
            <div class="col-md-5">
                <input type="text" name="subtitle" id="subtitle"  value="{{ @$item->subtitle }}{{ old('title')}}"class="form-control ">
                
            </div>
    </div>

    <div class="form-group row">
        <label for="description" class="col-form-label col-md-2">Descripción</label>
        <div class="col-md-5">
            <input type="text" name="description" id="description" value="{{@$item->description}}{{ old('description')}}" class="form-control ">
        </div>
    </div>

    <div class="row  form-group">
            <label for="url" class="col-md-2 col-form-label">URL</label>
            <div class="col-md-5 md-form selectorurl">
            @if(@$item->externa_url==2 || empty(@$item->externa_url) )
                <select name="url" class="form-control">
                    <option value="">Seleccione</option>
                    @foreach($categories as $cat)
                    <option value="{{ $cat->slug }}" @if($cat->id==@$item->url) required @endif>{{ $cat->name }}</option>
                    @endforeach
                </select>
            @else
             <input type="text" name="url" id="form3" value="{{@$item->url}}" placeholder="http://www.claro.com.pe" class="form-control" required="">
            @endif
            </div>
            <div class="col-md-2">
                <div class="form-check">
                    <input type="checkbox"  name="nuevaVentana" value="2" class="form-check-input urlexterna" @if(@$item->externa_url==2) checked @endif  id="f1">
                    <label class="form-check-label" for="f1">Externo</label>
                </div>
            </div>
    </div>


    <div class="row form-group">
            <label for="estado" class="col-md-2 col-form-label">Estado</label>
            <div class="form-check">
                    <input type="checkbox" name="estado" value="2" class="form-check-input" @if(@$item->state==2) cheked @endif id="form4">
                    <label class="form-check-label" for="form4">Ocultar</label>
            </div>

    </div>

    <div class="row form-group">
        <div class="col-md-3">
            <button type="submit" class="btn btn-success"> Guardar </button>
        </div>
    </div>
