mostrar la lista de inmobilia
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>id</th>
            <th>Nombre</th>
            <th>RFC</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach( $inmobiliaria as $inmobiliarias)
        <tr>
            <td>{{ $inmobiliarias->id }}</td>
            <td>{{ $inmobiliarias->Nombre }}</td>
            <td>{{ $inmobiliarias->RFC }}</td>
            <td>{{ $inmobiliarias->Estado }}</td>
            <td>
                
            <a href="{{ url('/inmobiliaria/'.$inmobiliarias->id.'/edit') }}">         
                Editar 
            </a>
            |
            <form action="{{ url('/inmobiliaria/'.$inmobiliarias->id ) }}" method="post">
            @csrf 
            {{ method_field('DELETE') }}
            <input type="submit" onclick="return confirm('¿Quieres borrar?')" 
            value="Borrar">
            </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>