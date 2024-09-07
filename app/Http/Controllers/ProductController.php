<?php

namespace App\Http\Controllers;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $products = Product::all()->map(function ($product) {
        // Formato de precio con tres decimales, usando punto como separador decimal
        $product->formatted_price = number_format($product->price, 3, '.');
        return $product;
    });

    return view('products.index', compact('products'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    return view('products.create');
}

public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'price' => 'required|numeric',
    ]);

    Product::create($request->all());
    return redirect()->route('products.index')->with('success', 'Producto agregado exitosamente.');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    $product = Product::findOrFail($id);
    return view('products.edit', compact('product'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required',
        'price' => 'required|numeric',
    ]);

    $product = Product::findOrFail($id);
    $product->update($request->all());
    return redirect()->route('products.index')->with('success', 'Producto actualizado exitosamente.');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $product = Product::findOrFail($id);
    $product->delete();
    return redirect()->route('products.index')->with('success', 'Producto eliminado exitosamente.');
}

}
