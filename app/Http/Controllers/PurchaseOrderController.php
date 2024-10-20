<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PurchaseOrder;
use App\Models\Material;

class PurchaseOrderController extends Controller
{
    public function create()
    {
        return view('purchase_order.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'items.*.code' => 'required|exists:materials,item_code',
            'items.*.quantity' => 'required|integer',
            'items.*.material' => 'required|string',
            'vendor' => 'required|string',
            'delivery_date' => 'required|date',
        ]);

        // Ambil po_number terakhir
        $lastPo = PurchaseOrder::orderBy('po_number', 'desc')->first();
        $newPoNumber = $lastPo ? $lastPo->po_number + 1 : 1;  // Mulai dari 1 jika belum ada PO

        foreach ($request->items as $item) {
            $material = Material::where('item_code', $item['code'])->first();

            $purchaseOrder = new PurchaseOrder();
            $purchaseOrder->po_number = $newPoNumber;                 // Set po_number
            $purchaseOrder->code_material = $item['code'];
            $purchaseOrder->nama_material = $material->item_name;
            $purchaseOrder->unit_of_measure = $material->unit_of_measure;
            $purchaseOrder->quantity = $item['quantity'];
            $purchaseOrder->price = 0;                                // Set harga default jika diperlukan
            $purchaseOrder->vendor = $request->vendor;
            $purchaseOrder->delivery_date = $request->delivery_date;

            $purchaseOrder->save();
        }

        return redirect()->route('purchase_order.create')->with('success', 'Purchase Order created successfully.');
    }



    public function index() // Buat method baru untuk menampilkan semua purchase order
    {
        $orders = PurchaseOrder::all(); // Ambil semua data purchase order
        return view('purchase_order.store', compact('orders')); // Kirim data ke view
    }

}
