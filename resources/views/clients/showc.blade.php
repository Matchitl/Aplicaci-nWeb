@extends('layout.main_template')

@section('content')

    <h2>Detalles Cliente:{{$client->nameClient}}</h2>
    <h3>Apellido Paterno: {{$client->lastname}}</h3>
    <h3>Apellido Materno: {{$client->s_lastname}}</h3>
    <h3>Correo: {{$client->email}}</h3>
    <h3>Número Telefono: {{$client->phone}}</h3>
    <h3>Estado: {{$client->state}}</h3>
    <h3>Pueblo: {{$client->town}}</h3>

    <h4>TO DO Show View</h4>
@endsection