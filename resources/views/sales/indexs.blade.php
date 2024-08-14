@extends('layout.main_template')

@section('content')
<style>
    button, form button[type="submit"]{
        padding: 8px 12px;
        margin-block-start: 5px;
        border: 2px solid #000000;
        border-radius: 5px;
        display: inline;
        color: rgb(12, 0, 0);
        background-color: #f0f6f8;
    }
</style>
    <h2>Página de Ventas</h2>
    <br>
    <button><a href="{{route('sales.create')}}">Registrar Ventas</a></button>
    <br>



    <table class="table table-dark table-striped">
        <thead>
            <th>Cliente</th>
            <th>Producto</th>
            <th>Fecha de Venta</th>
            <th>Mas Detalles</th>
            <th>Actualizar</th>
            <th>Eliminar</th>
        </thead>
        <br>
        <tbody>
            @foreach ($sales as $s)
                <tr>
                    <td> {{$s->ClientFunction->nameClient}}</td>
                    <td> {{$s->ProductFunction->nameProduct}}</td>
                    <td> {{$s->sale_date}}</td>
                    <td>
                        <button><a href="{{route('sales.show', $s)}}">Mostrar</a></button>
                    </td>
                    <td>
                        <button><a href="{{route('sales.edit', $s)}}">Editar</a></button>
                    </td>
                    <td>
                        <form action="{{route('sales.destroy', $s)}}" method="POST">
                        @method("DELETE")
                        @csrf
                        <button type="submit">Eliminar</button>
                        </form>
                    </td>
                    </tr>
            @endforeach
        </tbody>
    </table>
@endsection
