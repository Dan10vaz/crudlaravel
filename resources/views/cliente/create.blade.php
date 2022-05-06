Formulario de creacion de cliente
<form action="{{ url('cliente') }}" method="post" enctype="multipart/form-data">
    @csrf
    @include('cliente.form');

    <input type="submit" value="Guardar Datos">

</form>
