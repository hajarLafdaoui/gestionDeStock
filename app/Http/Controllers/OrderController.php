<?php
namespace App\Http\Controllers;

use App\Models\Order;

class OrderController extends Controller
{
    // Get all orders
    public function index()
    {
        return response()->json(Order::with('products')->get());
    }

    // Get a single order with its client and products
    public function show($id)
    {
        $order = Order::with(['client', 'products'])->find($id);

        if (!$order) {
            return response()->json(['message' => 'Order not found'], 404);
        }

        return response()->json($order);
    }
}
