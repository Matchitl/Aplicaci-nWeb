@extends('layout.main_template')

@section('content')

    <style>
        *{box-sizing: border-box}
        form{
            width: 300px;
            padding-inline: 30px;
            padding-block: 30px;
            border-radius: 12px;
            margin-block: auto;
            margin-inline: auto;
            background-color: rgb(38, 38, 38);
            color: rgb(220, 0, 165);
        }

        form label{
            width: 140px;
            height: 10px;
            font-weight: bold;
            margin-top: 10px;
            margin-bottom: 10px;
            font-family: Arial, Helvetica, sans-serif;
            display: inline-block;
        }

        form button[type="submit"]{
            width: 100%;
            padding: 8px 12px;
            margin-block-start: 30px;
            border: 2px solid rgb(220, 0, 165);
            border-radius: 5px;
            display: block;
            color: aliceblue;
            background-color: rgb(25, 25, 25);
        }
    </style>

    <h2>Registrar Cliente</h2>


    <form action="{{route('clients.store')}}" method="POST">
        @csrf
        <label for="">Nombre</label>
        <input type="text" name="nameClient" required>

        <label for="">Apellido Paterno</label>
        <input type="text" name="lastname" required>

        <label for="">Apellido Materno</label>
        <input type="text" name="s_lastname" required>

        <label for="">Correo</label>
        <input type="text" name="email" required>

        <label for="">Número Telefono</label>
        <input type="text" name="phone" required>

        <label for="">Estado</label>
        <select name="id_state">
            <option value="">Seleccionar...</option>
            @foreach ($states as $state => $id)
                <option value="{{$id}}">{{$state}}</option>
            @endforeach
        </select>

        <label for="">Municipio</label>
        <select name="id_town">
            <option value="">Seleccionar...</option>
            @foreach ($towns as $town => $id)
                <option value="{{$id}}">{{$town}}</option>
            @endforeach
        </select>

        <button type="submit">Registrar</button>



    </form>
@endsection
