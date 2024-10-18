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
        // Validasi input
        $request->validate([
            'code' => 'required|exists:materials,item_code',  // Memastikan code material ada di tabel materials
            'quantity' => 'required|integer',                 // Pastikan jumlah yang diinput adalah integer
            'vendor' => 'required|string',                    // Vendor adalah string yang diperlukan
            'delivery_date' => 'required|date',               // Tanggal pengiriman yang valid
        ]);

        // Ambil data material dari tabel 'materials'
        $material = Material::where('item_code', $request->input('code'))->first();

        // Simpan purchase order baru
        $purchaseOrder = new PurchaseOrder();
        $purchaseOrder->code_material = $request->code;                 // Mengambil nilai code dari request
        $purchaseOrder->nama_material = $material->item_name;           // Mengambil item_name dari tabel materials
        $purchaseOrder->unit_of_measure = $material->unit_of_measure;   // Mengambil unit_of_measure dari tabel materials
        $purchaseOrder->quantity = $request->quantity;                  // Mengambil quantity dari request
        $purchaseOrder->price = 0;                                      // Menggunakan harga default, sesuaikan jika perlu
        $purchaseOrder->vendor = $request->vendor;                      // Mengambil vendor dari request
        $purchaseOrder->delivery_date = $request->delivery_date;        // Mengambil tanggal pengiriman dari request

        $purchaseOrder->save();  // Simpan ke database

        return redirect()->route('purchase_order.create')->with('success', 'Purchase Order created successfully.');
    }

    public function index() // Buat method baru untuk menampilkan semua purchase order
    {
        $orders = PurchaseOrder::all(); // Ambil semua data purchase order
        return view('purchase_order.store', compact('orders')); // Kirim data ke view
    }

}
