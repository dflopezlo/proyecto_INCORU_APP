<table class="table">
    <thead class="thead">
        <tr>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Stock</th>
            <th>Precio</th>
        </tr>
    </thead>
    <tbody>
        @foreach($productos as $row)
        <tr>
            <td>{{ $row->nombre }}</td>
            <td>{{ $row->descripcion }}</td>
            <td>{{ $row->stock }}</td>
            <td>{{ $row->precio }}</td>
            </td>
            @endforeach
    </tbody>
</table>