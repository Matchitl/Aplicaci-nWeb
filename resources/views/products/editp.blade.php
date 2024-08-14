@extends('layout.main_template')

@section('content')

<style>
    *{box-sizing: border-box}
    form{
        width: 350px;
        padding-inline: 30px;
        padding-block: 30px;
        border-radius: 12px;
        margin-block: auto;
        margin-inline: auto;
        background-color: rgb(38, 38, 38);
        color: rgb(219, 54, 152);
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
        border: 2px solid rgb(219, 54, 152);
        border-radius: 5px;
        display: block;
        color: aliceblue;
        background-color: rgb(25, 25, 25);
    }
</style>

    <h2>Actualizar producto:{{$product->nameProduct}}</h2>

    @if ($errors->any())
        @foreach ($errors->all() as $e)
            <div class="error">
                {{$e}}
            </div>
        @endforeach
    @endif

    <form action="{{route('products.update', $product->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="">Producto</label>
        <input type="text" name="nameProduct" value="{{$product->nameProduct}}">

        <label for="">Cantidad</label>
        <input type="number" name="stock" value="{{$product->stock}}" >

        <label for="">Precio unitario</label>
        <input type="number" name="unit_price" value="{{$product->unit_price}}">

        <label for="">Marca</label>
        <br>
        <select name="id_brand">
            <option value="">Seleccionar...</option>
            @foreach ($brands as $brand => $id)
                <option {{$product->id_brand ==$id?'selected': ''}} value="{{$id}}">{{$brand}}</option>
            @endforeach
        </select>
        <br>
        <label for="">Imagen</label>
        <input type="file" name="image">
        <button type="submit">Actualizar</button>



    </form>
@endsection
