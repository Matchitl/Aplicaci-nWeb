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
        color: rgb(0, 220, 220);
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
        border: 2px solid rgb(0, 220, 220);
        border-radius: 5px;
        display: block;
        color: aliceblue;
        background-color: rgb(25, 25, 25);
    }
</style>

    <h2>Actualizar venta del dia: {{$sale->sale_date}}</h2>
    
    @if ($errors->any())
        @foreach ($errors->all() as $e)
            <div class="error">
                {{$e}}
            </div>
        @endforeach
    @endif
    
    <form action="{{route('sales.update', $sale->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
    
        <label for="">Cliente</label>
        <br>
        <select name="id_client">
            <option value="">Seleccionar...</option>
            @foreach ($clients as $client => $id)
                <option {{$sale->id_client ==$id?'selected': ''}} value="{{$id}}">{{$client}}</option>
            @endforeach
        </select>
        <br>
        <label for="">Producto</label>
        <br>
        <select name="id_product">
            <option value="">Seleccionar...</option>
            @foreach ($products as $product => $id)
                <option {{$sale->id_product ==$id?'selected': ''}} value="{{$id}}">{{$product}}</option>
            @endforeach
        </select>
        <br>
        <label for="">Fecha de venta</label>
        <br>
        <input type="date" name="sale_date" value="{{$sale->sale_date}}">

        <button type="submit">Actualizar</button>



    </form>
@endsection