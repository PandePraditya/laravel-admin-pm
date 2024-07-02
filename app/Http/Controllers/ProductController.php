<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = product::paginate(5); // paginate = untuk pagination
        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $categories = category::all(); // untuk memanggil data dari category dan dimasukkan kedalam dropdown
        return view('product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string',
            'unit' => 'required|string',
            'minimal_stock' => 'required|numeric',
            'maximal_stock' => 'required|numeric',
            'stock' => 'required|numeric',
            'selling_price' => 'numeric|min:0',
            'purchase_price' => 'numeric|min:0',
        ]);
        
        $category_id = $request->input('category_id');
        $name = $request->input('name');
        $unit = $request->input('unit');
        $minimal_stock = $request->input('minimal_stock');
        $maximal_stock = $request->input('maximal_stock');
        $stock = $request->input('stock');
        $selling_price = $request->input('selling_price');
        $purchase_price = $request->input('purchase_price');

        product::create([
            'category_id' => $category_id,
            'name' => $name,
            'unit' => $unit,
            'minimal_stock' => $minimal_stock,
            'maximal_stock' => $maximal_stock,
            'stock' => $stock, 
            'selling_price' => $selling_price,
            'purchase_price' => $purchase_price
        ]);
        return redirect('product');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $products = product::findOrFail($id);
        return view('product.show', compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $products = product::findOrFail($id);
        $categories = category::all();
        return view('product.edit', compact('products', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string',
            'unit' => 'required|string',
            'minimal_stock' => 'required|numeric',
            'maximal_stock' => 'required|numeric',
            'stock' => 'required|numeric',
            'selling_price' => 'numeric|min:0',
            'purchase_price' => 'numeric|min:0',
        ]);

        $category_id = $request->input('category_id');
        $name = $request->input('name');
        $unit = $request->input('unit');
        $minimal_stock = $request->input('minimal_stock');
        $maximal_stock = $request->input('maximal_stock');
        $stock = $request->input('stock');
        $selling_price = $request->input('selling_price');
        $purchase_price = $request->input('purchase_price');

        product::where('id', '=', $id)->update([
            'category_id' => $category_id,
            'name' => $name,
            'unit' => $unit,
            'minimal_stock' => $minimal_stock,
            'maximal_stock' => $maximal_stock,
            'stock' => $stock, 
            'selling_price' => $selling_price,
            'purchase_price' => $purchase_price
        ]);
        
        return redirect("product");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        product::where('id', '=', $id)->delete();
        return redirect("product");
    }
}
