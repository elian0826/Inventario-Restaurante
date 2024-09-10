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
        $product->formatted_price = number_format($product->price / 100, 2, '.', ',');
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

    // Redondear el precio a la centena más cercana
    $priceInCents = round($request->input('price') * 100);

    Product::create([
        'name' => $request->input('name'),
        'price' => $priceInCents
    ]);

    return redirect()->route('products.index')->with('success', 'Producto creado con éxito.');
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

    // Redondear el precio a la centena más cercana
    $priceInCents = round($request->input('price') * 100);

    $product->update([
        'name' => $request->input('name'),
        'price' => $priceInCents
    ]);

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
