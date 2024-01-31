@extends('layouts.app')

@section('content')
<div class="container">

@if(Session::has('mensaje'))
{{ Session::get('mensaje') }}

@endif

    <a href="{{ url('inmobiliaria/create') }}" class="btn btn-success" >Registrar nueva inmoviliaria</a>
    </br>
    </br>
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
                    
                <a href="{{ url('/inmobiliaria/'.$inmobiliarias->id.'/edit') }}" class="btn btn-warning">         
                    Editar 
                </a>
                |

                <form action="{{ url('/inmobiliaria/'.$inmobiliarias->id ) }}" class="d-inine" method="post">
                @csrf 
                {{ method_field('DELETE') }}
                <input class="btn btn-danger" type="submit" onclick="return confirm('¿Quieres borrar?')" 
                value="Borrar">
                </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection