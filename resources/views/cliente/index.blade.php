Mostrar la lista de clientes
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Edad</th>
            <th>Direccion</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($clientes as $cliente)
            <tr>
                <td>{{ $cliente->id }}</td>
                <td>{{ $cliente->Photo }}</td>
                <td>{{ $cliente->FirstName }}</td>
                <td>{{ $cliente->LastName }}</td>
                <td>{{ $cliente->Mail }}</td>
                <td>{{ $cliente->Phone }}</td>
                <td>{{ $cliente->Age }}</td>
                <td>{{ $cliente->Address }}</td>
                <td>


                    <a href="{{ url('/cliente/' . $cliente->id . '/edit') }}">
                        Editar
                    </a>

                    <form action="{{ url('/cliente/' . $cliente->id) }}" method="post">
                        @csrf
                        {{ method_field('DELETE') }}

                        <input type="submit" onclick="return confirm('Quieres borrar?')" value="Borrar">

                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
