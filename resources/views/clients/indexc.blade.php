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
        background-color: #eeddea;
    }
</style>
    <h2>Página de Clientes</h2>
    <br>
    <button><a href="{{route('clients.create')}}">Registrar Cliente</a></button>
    <br>


    <table class="table table-dark table-striped" >
        <thead>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Correo</th>
            <th>Celular</th>
            <th>Estado</th>
            <th>Municipio</th>
            <th>Acciones</th>

        </thead>
        <br>
        <tbody>
            @foreach ($clients as $c)
                <tr>
                    <td> {{$c->nameClient}}</td>
                    <td> {{$c->lastname}}</td>
                    <td> {{$c->s_lastname}}</td>
                    <td> {{$c->email}}</td>
                    <td> {{$c->phone}}</td>
                    <td> {{$c->StateFunction->state}}</td>
                    <td> {{$c->TownFunction->town}}</td>
                    <td>

                        <button ><a href="{{route('clients.show', $c)}}">Mostrar</a></button>
                        <button><a href="{{route('clients.edit', $c)}}">Editar</a></button>
                        <form action="{{route('clients.destroy', $c)}}" method="POST">
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
