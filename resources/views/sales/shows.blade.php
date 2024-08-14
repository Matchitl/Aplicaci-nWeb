@extends('layout.main_template')

@section('content')

    <h2>Detalles venta del dia: {{$sale->sale_date}}</h2>
    <h3>ID Cliente: {{$sale->id_client}}</h3>
    <h3>ID Producto: {{$sale->id_product}}</h3>
    <h3>Fecha de venta: {{$sale->sale_date}}</h3>

@endsection