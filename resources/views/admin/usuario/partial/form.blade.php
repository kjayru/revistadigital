

    <div class="md-form form-group">
            <input type="text" name="name" value="{{ @$user->name }}" placeholder="Nombres" class="form-control" required>

    </div>

    <div class="md-form form-group">
            <input type="email" name="email"  value="{{ @$user->email }}" placeholder="Email" class="form-control" required>
    </div>

    <div class="md-form form-group">
            <input type="password" name="password"   placeholder="Password" class="form-control" >
    </div>



    <div class="form-group">

        <select name="role_id" class="form-control" required>

            <option> Seleccione</option>
            @foreach($roles as $role)
                <option value="{{ $role->id}}"  @if(@$user->roles[0]->id == $role->id) selected @endif> {{ $role->name }}</option>
            @endforeach
        </select>
    </div>

    <div>

    </div>

    <div class="md-form form-group">
        <input type="submit" class="btn btn-danger btn-page-save-edit" value="Guardar" >
    </div>
