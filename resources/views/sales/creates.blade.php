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
        color: rgb(220, 0, 128);
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
        border: 2px solid rgb(220, 0, 154);
        border-radius: 5px;
        display: block;
        color: aliceblue;
        background-color: rgb(25, 25, 25);
    }
</style>

    <h2>Registrar Ventas</h2>

    @if ($errors->any())
        @foreach ($errors->all() as $e)
            <div class="error">
                {{$e}}
            </div>
        @endforeach
    @endif

    <form action="{{route('sales.store')}}" method="POST">
        @csrf

        <label for="">Cliente</label>
        <br>
        <select name="id_client">
            <option value="">Seleccionar...</option>
            @foreach ($clients as $client => $id)
                <option value="{{$id}}">{{$client}}</option>
            @endforeach
        </select>

        <label for="">Producto</label>
        <br>
        <select name="id_product">
            <option value="">Seleccionar...</option>
            @foreach ($products as $product => $id)
                <option value="{{$id}}">{{$product}}</option>
            @endforeach
        </select>

        <label for="">Fecha de venta</label>
        <input type="date" name="sale_date">

        <button type="submit">Registrar</button>

    </form>
@endsection
