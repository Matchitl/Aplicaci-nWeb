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
        color: rgb(219, 50, 168);
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
        border: 2px solid rgb(219, 41, 181);
        border-radius: 5px;
        display: block;
        color: aliceblue;
        background-color: rgb(25, 25, 25);
    }
</style>

    <h2>Actualizar Cliente:{{$client->nameClient}}</h2>


    <form action="{{route('clients.update', $client->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="">Nombre</label>
        <input type="text" name="nameClient" value="{{$client->nameClient}}">

        <label for="">Apellido Paterno</label>
        <input type="text" name="lastname" value="{{$client->lastname}}">

        <label for="">Apellido Materno</label>
        <input type="text" name="s_lastname" value="{{$client->s_lastname}}">

        <label for="">Correo</label>
        <input type="text" name="email" value="{{$client->email}}">

        <label for="">Número Telefono</label>
        <input type="text" name="phone" value="{{$client->phone}}">

        <label for="">Estado</label>
        <select name="id_state">
            <option value="">Seleccionar...</option>
            @foreach ($states as $state => $id)
                <option value="{{$id}}">{{$state}}</option>
            @endforeach
        </select>

        <label for="">Pueblo</label>
        <select name="id_town">
            <option value="">Seleccionar...</option>
            @foreach ($towns as $town => $id)
                <option value="{{$id}}">{{$town}}</option>
            @endforeach
        </select>

        <button type="submit">Actualizar</button>



    </form>
@endsection
