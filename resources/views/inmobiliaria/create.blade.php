Formulario de creacion de inmobiliarios

<form action="{{url('/inmobiliaria')}}" method="post">
<!---Identificador/llave de seguridad-->
@csrf
@include('inmobiliaria.form',['modo'=>'Crear']);

</form>


