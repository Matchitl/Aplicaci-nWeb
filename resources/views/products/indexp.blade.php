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
        background-color: #ffffff;
    }
</style>
    <h2>Página de productos</h2>
    <br>
<a class="btn btn-Dark"role="button" href="{{route('products.create')}}">Registrar Producto</a>
    <br>



    <table class="table table-dark table-striped">
        <thead>
            <th>Nombre</th>
            <th>Cantidad</th>
            <th>Precio</th  >
            <th>Marca</th>
            <th>Imagen</th>
            <th>Mas Detalles</th>
            <th>Actualizar</th>
            <th>Eliminar</th>
        </thead>
        <br>
        <tbody>
            @foreach ($products as $p)
                <tr>
                    <td> {{$p->nameProduct}}</td>
                    <td> {{$p->stock}}</td>
                    <td> {{$p->unit_price}}</td>
                    <td> {{$p->BrandFunction->brand}}</td>
                    <td><img src="/image/products/{{$p->image}}" width="100px" alt="Dulces.jpeg"></td>
                    <td>
                        <button ><a href="{{route('products.show', $p)}}">Mostrar</a></button>
                    </td>
                    <td>
                        <button><a href="{{route('products.edit', $p)}}">Editar</a></button>
                    </td>
                    <td>
                        <form action="{{route('products.destroy', $p)}}" method="POST">
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
