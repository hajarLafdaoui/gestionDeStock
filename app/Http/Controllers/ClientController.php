<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    // Get all clients
    public function index()
    {
        return response()->json(Client::all());
    }

    // Get a single client with their orders
    public function show($id)
    {
        $client = Client::with('orders')->find($id);

        if (!$client) {
            return response()->json(['message' => 'Client not found'], 404);
        }

        return response()->json($client);
    }
}
