@extends('layouts.app')

@section('content')
<div class="container">

    <form action="{{url('/inmobiliaria')}}" method="post">
    <!---Identificador/llave de seguridad-->
    @csrf
    @include('inmobiliaria.form',['modo'=>'Crear']);

    </form>
</div>
@endsection

