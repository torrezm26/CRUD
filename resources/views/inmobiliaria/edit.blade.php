@extends('layouts.app')

@section('content')
<div class="container">

    <form action=" {{ url('/inmobiliaria/'.$inmobiliaria->id ) }}" method="post">
    @csrf
    {{ method_field('PATCH') }}

    @include('inmobiliaria.form',['modo'=>'Editar']);

    </form>

</div>
@endsection