<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\category;
use Illuminate\Http\Request;


class CategoryApi extends Controller
{
    public function getData() {
        $categories = category::all();
        return response()->json([
            'status' => 'success',
            'message' => 'Data product category berhasil diambil',
            'data' => $categories
        ], 200);
    }

    public function create(Request $request) {
        $categories = category::create([
            'name' => $request->name,
            'description' => $request->description
        ]);
        return response()->json([
            'status' => 'success',
            'message' => 'Data product category berhasil ditambahkan',
            'data' => $categories
        ], 200);
    }

    public function update(Request $request, string $id) {
        $request->validate([
            'name' => 'required|unique:categories,name,'.$id.',id',
            'description' => 'required',
        ]);

        $categories = category::find($id);
        $categories->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);
        return response()->json([
            'status' => 'success',
            'message' => 'Data product category berhasil diubah',
            'data' => $categories
        ], 200);
    }

    // In postman enter the id the same as the one in DB
    public function delete(Request $request) {
        $categories = category::find($request->id);
        $categories->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'Data product category berhasil dihapus',
            'data' => $categories
        ], 200);
    }

    // 
    public function find($id) {
        $categories = category::find($id);
        return response()->json([
            'status' => 'success',
            'message' => 'Data product category berhasil diambil',
            'data' => $categories
        ], 200);
    }
}