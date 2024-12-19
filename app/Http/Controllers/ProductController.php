<?php
namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    // Get all products
    public function index()
    {
        return response()->json(Product::all());
    }

    // Get a single product with its category and orders
    public function show($id)
    {
        $product = Product::with(['category', 'orders'])->find($id);

        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        return response()->json($product);
    }
}
