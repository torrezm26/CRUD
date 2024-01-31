<h1> {{ $modo }} inmobiliaria </h1>

<div class="form-group">
    <label for="id">ID:</label>
    <input type="text" name="Id" class="form-control" value="{{isset($inmobiliaria->id) ?$inmobiliaria->id: '' }}"  id="id">
</div>

<div class="form-group">
    <label for="nombre">Nombre:</label>
    <input type="text" name="Nombre" class="form-control" value="{{isset($inmobiliaria->Nombre) ?$inmobiliaria->Nombre: '' }}" id="Nombre">
</div>

<div class="form-group">
    <label for="rfc">RFC:</label>
    <input type="text" name="RFC" class="form-control" value="{{ isset($inmobiliaria->RFC) ?$inmobiliaria->RFC: '' }}" id="RFC">
    
</div>

<div class="form-group">
    <label for="estado">Estado:</label>

    <select name="estado" class="form-control" value="{{ isset($inmobiliaria->estado) ?$inmobiliaria->estado: '' }}" id="estado">
        <option value="activo">Activo</option>
        <option value="inactivo">Inactivo</option>
    </select>
<br>
</div>

    <a class="btn btn-primary" href="{{ url('inmobiliaria/') }}">Regresar</a>

    <input class="btn btn-success" type="submit" value="{{ $modo }} datos">
