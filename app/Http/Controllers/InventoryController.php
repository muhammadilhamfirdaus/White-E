<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;

class InventoryController extends Controller
{
    // Menampilkan semua Inventory
    public function index()
    {
        $inventoryItems = Inventory::all();
        return view('inventory.store', compact('inventoryItems'));
    }
}
