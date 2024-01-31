<h1> {{ $modo }} inmobiliaria </h1>
<label for="id">ID:</label>
<input type="text" name="Id" value="{{isset($inmobiliaria->id) ?$inmobiliaria->id: '' }}"  id="id">
<br>

<label for="nombre">Nombre:</label>
<input type="text" name="Nombre" value="{{isset($inmobiliaria->Nombre) ?$inmobiliaria->Nombre: '' }}" id="Nombre">
<br>

<label for="rfc">RFC:</label>
<input type="text" name="RFC" value="{{ isset($inmobiliaria->RFC) ?$inmobiliaria->RFC: '' }}" id="RFC">
<br>

<label for="estado">Estado:</label>

<select name="estado" value="{{ isset($inmobiliaria->estado) ?$inmobiliaria->estado: '' }}" id="estado">
    <option value="activo">Activo</option>
    <option value="inactivo">Inactivo</option>
</select>
<br>
<a href="{{ url('inmobiliaria/') }}">Regresar</a>

<input type="submit" value="{{ $modo }} datos">
