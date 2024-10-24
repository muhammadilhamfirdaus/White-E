<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PurchaseOrder;
use App\Models\Material;

use App\Models\Vendor;

class PurchaseOrderController extends Controller
{
    // Menampilkan form create PO
    public function create()
    
    {
        $vendors = Vendor::all(); // Mengambil semua vendor dari database
        $materials = Material::all(); // Ambil semua data material
        return view('purchase_order.create', compact('vendors', 'materials'));

    }

    // Menyimpan data PO baru
    public function store(Request $request)
    {
        $request->validate([
            'items' => 'required|array', // Pastikan items adalah array
            'items.*.code' => 'required|exists:materials,item_code', // Kode material
            'items.*.quantity' => 'required|integer', // Jumlah material
            'items.*.material' => 'required|string', // Nama material
            'items.*.storage_location' => 'required|string', // Lokasi penyimpanan
            'items.*.qty_open' => 'required|integer', // Qty Open
            'vendor' => 'required|exists:vendors,vendor_name', // Nama vendor
            'delivery_date' => 'required|date', // Tanggal pengiriman
        ]);

        // Ambil po_number terakhir
        $lastPo = PurchaseOrder::orderBy('po_number', 'desc')->first();
        $newPoNumber = $lastPo ? $lastPo->po_number + 1 : 451000000;  // Mulai dari 1 jika belum ada PO

        foreach ($request->items as $item) {
            // Ambil material berdasarkan kode
            $material = Material::where('item_code', $item['code'])->first();

            $purchaseOrder = new PurchaseOrder();
            $purchaseOrder->po_number = $newPoNumber;
            $purchaseOrder->code_material = $item['code'];
            $purchaseOrder->nama_material = $material->item_name;
            $purchaseOrder->unit_of_measure = $material->unit_of_measure;
            $purchaseOrder->quantity = $item['quantity'];
            $purchaseOrder->qty_open = $item['qty_open']; // Gunakan qty_open dari form
            $purchaseOrder->price = 0; // Set harga default jika diperlukan
            $purchaseOrder->vendor = $request->vendor;
            $purchaseOrder->delivery_date = $request->delivery_date;
            $purchaseOrder->storage_location = $item['storage_location']; // Ambil dari form

            $purchaseOrder->save();
        }
        return redirect()->route('purchase_order.create')->with('success', 'Purchase Order created successfully.');
    }

    // Menampilkan semua data PO
    public function index()
    {
        $orders = PurchaseOrder::all(); // Ambil semua data purchase order
        return view('purchase_order.store', compact('orders')); // Kirim data ke view
    }

    // Menampilkan form edit PO berdasarkan ID
    public function edit($id)
    {
        $order = PurchaseOrder::findOrFail($id); // Ambil PO berdasarkan ID
        return view('purchase_order.edit', compact('order')); // Kirim data PO ke form edit
    }

    // Menyimpan perubahan dari PO yang sudah di-edit
    public function update(Request $request, $id)
    {
        $request->validate([
            'code_material' => 'required|exists:materials,item_code',
            'quantity' => 'required|integer',
            'vendor' => 'required|string',
            'delivery_date' => 'required|date',
            'storage_location' => 'required|string|in:SLFG,SLRM,SLNG,SLEG', // Validasi storage location
            'qty_open' => 'required|integer', // Validasi qty_open
        ]);

        // Ambil data PO yang akan di-update
        $purchaseOrder = PurchaseOrder::findOrFail($id);
        $purchaseOrder->code_material = $request->input('code_material');
        $purchaseOrder->quantity = $request->input('quantity');
        $purchaseOrder->qty_open = $request->input('qty_open'); // Update qty_open
        $purchaseOrder->vendor = $request->input('vendor');
        $purchaseOrder->delivery_date = $request->input('delivery_date');
        $purchaseOrder->storage_location = $request->input('storage_location'); // Update storage location

        $purchaseOrder->save();

        return redirect()->route('purchase_order.store')->with('success', 'Purchase Order updated successfully.');
    }
}
