<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = category::all();
        $view_data = compact('category');
        return view('product_category.index', $view_data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product_category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:255',
        ]);
        $category = new category;
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();
        return redirect('/category')->with('status', 'Data category berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ProductCategory = category::find($id);
        return view('product_category.show', compact('ProductCategory'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ProductCategory = category::find($id);
        return view('product_category.edit', compact('ProductCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:255',
        ]);
        $category = category::find($id);
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();
        return redirect('/category')->with('status', 'Data category berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = category::find($id);
        $category->delete();
        return redirect('/category')->with('status', 'Data category berhasil dihapus');
    }
}
