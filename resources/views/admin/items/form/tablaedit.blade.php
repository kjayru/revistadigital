<fieldset >
        <legend> Dimensiones</legend>
    
            <table class="table table-striped table-hover">
                <thead>
                    <th>Imagen</th>
                    <th>Texto</th>
                    <th colspan="3"></th>
                </thead>
                <tbody>
                        <tr>
                            <td>General</td>
                            <td>
                                @if(!$item->background)
                                <img src="/assets/default.jpg" class="img-fluid" width="200px">
                                @else
                                <img src="/{{ $item->background}}" class="img-fluid" width="200px">
                                @endif
                            </td>
                            <td colspan="3">
                                <a href="#" data-id="{{@$item->id}}"  data-projectid="{{ $item->id }}" data-toggle="modal" data-target="#modificarItem" data-row="background" class="btn-modificar btn btn-sm btn-success">Modificar</a>
                                <a href="#" data-id="{{ @$item->id}}" data-projectid="{{ $item->id }}" data-toggle="modal" data-target="#delete-item" class="btn-slider-delete btn btn-sm btn-danger">Eliminar</a>
                            </td>
                        </tr>
                        <tr>
                            <td>max 1366</td>
                            <td>
                                @if(!$item->max1366)
                                <img src="/assets/default.jpg" class="img-fluid" width="200px">
                                @else
                                <img src="/{{ $item->max1366}}" class="img-fluid" width="200px"></td>
                                @endif
                                <td colspan="3">
                                <a href="#" data-id="{{@$item->id}}"  data-projectid="{{ $item->id }}" data-toggle="modal" data-target="#modificarItem" data-row="max1366" class="btn-modificar btn btn-sm btn-success">Modificar</a>
                                <a href="#" data-id="{{@$item->id}}" data-projectid="{{ $item->id }}" data-toggle="modal" data-target="#delete-item" class="btn-slider-delete btn btn-sm btn-danger">Eliminar</a>
                            </td>
                        </tr>
                        <tr>
                            <td>max 1024</td>
                            <td>
                                @if(!$item->max1024)
                                <img src="/assets/default.jpg" class="img-fluid" width="200px">
                                @else
                                <img src="/{{ $item->max1024}}" class="img-fluid" width="200px">
                                @endif
                            </td>

                            <td colspan="3">
                                <a href="#" data-id="{{@$item->id}}"  data-projectid="{{ $item->id }}" data-toggle="modal" data-target="#modificarItem" data-row="max1024" class="btn-modificar btn btn-sm btn-success">Modificar</a>
                                <a href="#" data-id="{{@$item->id}}"  data-projectid="{{ $item->id }}" data-toggle="modal" data-target="#delete-item" class="btn-slider-delete btn btn-sm btn-danger">Eliminar</a> 
                            </td>
                        </tr>
                        <tr>
                            <td>max 768</td>
                            <td>
                                @if(!$item->max768)
                                <img src="/assets/default.jpg" class="img-fluid" width="200px">
                                @else
                                <img src="/{{ $item->max768}}" class="img-fluid" width="200px">
                                @endif
                            </td>
                                
                            <td colspan="3">
                                <a href="#"  data-id="{{@$item->id}}"  data-projectid="{{ $item->id }}" data-toggle="modal" data-target="#modificarItem" data-row="max768"class="btn-modificar btn btn-sm btn-success">Modificar</a>
                                <a href="#" data-id="{{@$item->id}}"  data-projectid="{{ $item->id }}" data-toggle="modal" data-target="#delete-item" class="btn-slider-delete btn btn-sm btn-danger">Eliminar</a> 
                            </td>
                        </tr>
                        <tr>
                            <td>max 640</td>
                            <td>
                                @if(!$item->max640)
                                <img src="/assets/default.jpg" class="img-fluid" width="200px">
                                @else
                                <img src="/{{ $item->max640}}" class="img-fluid" width="200px">
                                @endif
                            </td>
                            <td colspan="3">
                                <a href="#" data-id="{{@$item->id}}"  data-projectid="{{ $item->id }}" data-toggle="modal" data-target="#modificarItem" data-row="max640" class="btn-modificar btn btn-sm btn-success">Modificar</a>
                                <a href="#" data-id="{{@$item->id}}"  data-projectid="{{ $item->id }}" data-toggle="modal" data-target="#delete-item" class="btn-slider-delete btn btn-sm btn-danger">Eliminar</a> 
                            </td>
                        </tr>
                        <tr>
                            <td>max 480</td>
                            <td>
                                @if(!$item->max480)
                                <img src="/assets/default.jpg" class="img-fluid" width="200px">
                                @else
                                <img src="/{{ $item->max480}}" class="img-fluid" width="200px">
                                @endif
                            </td>
                            <td colspan="3">
                                <a href="#" data-id="{{@$item->id}}"  data-projectid="{{ $item->id }}" data-toggle="modal" data-target="#modificarItem" data-row="max480" class="btn-modificar btn btn-sm btn-success">Modificar</a>
                                <a href="#" data-id="{{@$item->id}}"  data-projectid="{{ $item->id }}"  data-toggle="modal" data-target="#delete-item" class="btn-slider-delete btn btn-sm btn-danger">Eliminar</a> 
                            </td>
                        </tr>
                
                </tbody>
            </table>
    </fieldset>