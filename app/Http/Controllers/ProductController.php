<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Http\Requests\Product\StoreRequest;
use Illuminate\Http\Request;
use App\Models\Brand;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::paginate(1);
        echo view('products.indexp', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //$brands= Brand:: get();
        $brands= Brand::pluck('id','brand');
        //dd($brands);
        echo view ('products.createp', compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        //dd($request->all());
        Product::create($request->all());
        return to_route('products.index') -> with('status', 'Producto Registrado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('products.showp', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $brands= Brand::pluck('id','brand');
        echo view('products.editp', compact('brands','product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $data = $request->all();

        if(isset($data["image"])){
            $data["image"]=$filename=time().".".$data["image"]->extension();
            $request->image->move(public_path("image/products"), $filename);
        }

        $product->update($data);
        return to_route('products.index')->with('status',"Producto Actualizado");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return to_route('products.index') -> with('status', "Producto Eliminado");
    }
}
