

    <div class="md-form form-group">
            <input type="text" name="name" value="{{ @$user->name }}" placeholder="Nombres" class="form-control"  value="{{ old('name') }}" required>

    </div>

    <div class="md-form form-group">
            <input type="text" name="lastname" value="{{ @$user->lastname }}" placeholder="Apellidos" value="{{ old('lastname') }}" class="form-control" required>

    </div>

    <div class="md-form form-group">
            <input type="text" name="puntoventa" value="{{ @$user->puntoventa }}" placeholder="Punto de venta" value="{{ old('puntoventa') }}" class="form-control" required>

    </div>
    <div class="md-form form-group">
            <input type="text" name="numdocumento" value="{{ @$user->numdocumento }}" placeholder="DNI/EXT/COD" value="{{ old('numdocumento') }}" class="form-control" required>

    </div>

    <div class="md-form form-group">
            <input type="text" name="perfil" value="{{ @$user->perfil }}" placeholder="Perfil" value="{{ old('perfil') }}" class="form-control" required>

    </div>

    <div class="md-form form-group">
            <input type="text" name="movil" value="{{ @$user->movil }}" placeholder="Movil" value="{{ old('movil') }}" class="form-control" required>

    </div>

    <div class="md-form form-group">
            <input type="email" name="email"  value="{{ @$user->email }}" placeholder="Email" value="{{ old('email') }}" class="form-control" required>
    </div>

    <div class="md-form form-group">
            <input type="text" name="region" value="{{ @$user->region }}" placeholder="Region" value="{{ old('region') }}" class="form-control" required>

    </div>

    <div class="md-form form-group">
            <input type="text" name="Departamento" value="{{ @$user->departamento }}" placeholder="Departamento"  value="{{ old('departamento') }}" class="form-control" required>

    </div>


    <div class="md-form form-group">
            <input type="text" name="provincia" value="{{ @$user->provincia }}" placeholder="Provincia" value="{{ old('provincia') }}" class="form-control" required>

    </div>

    <div class="md-form form-group">
            <input type="text" name="distrito" value="{{ @$user->distrito }}" placeholder="Distrito" value="{{ old('distrito') }}" class="form-control" required>

    </div>

    <div class="form-group">

        <select name="role_id" class="form-control" required>

            <option> Seleccione Rol</option>
            @foreach($roles as $role)
                <option value="{{ $role->id}}"  @if(@$user->roles[0]->id == $role->id) selected @endif> {{ $role->name }}</option>
            @endforeach
        </select>
    </div>

    

        <div class="md-form form-group">
                <select name="canal" id="canal" class="form-control">
                        <option value="">Canal</option>
                        <option value="{{@$user->canal}}"  @if(@$user->canal =='canal') selected @endif>{{@$user->canal}}</option>
                </select>
                
        </div>

 

    

    <div class="md-form form-group">
        <input type="submit" class="btn btn-danger btn-page-save-edit" value="Guardar" >
    </div>
