@extends('layout.main_template')

@section('content')

    <h2>Detalles producto:{{$product->nameProduct}}</h2>
    <h3>Cantidad: {{$product->stock}}</h3>
    <h3>Precio: {{$product->unit_price}}</h3>
    <h3>Marca: {{$product->BrandFunction->brand}}</h3>
    <h3>Imagen: </h3><img src="/image/products/{{$product->image}}" width="150px" alt="Dulces.jpeg">


@endsection