<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GoodsReceipt;
use App\Models\PurchaseOrder;
use App\Models\Inventory;

class GoodsReceiptController extends Controller
{
    // Menampilkan form create Goods Receipt
    public function create()
    {
        $purchaseOrders = PurchaseOrder::all();
        return view('goods_receipts.create', compact('purchaseOrders'));
    }

    // Menyimpan data Goods Receipt
    public function store(Request $request)
    {
        $request->validate([
            'po_number' => 'required|exists:purchase_orders,po_number',
            'material_code' => 'required|string',
            'received_quantity' => 'required|integer',
            'received_date' => 'required|date',
            'storage_location' => 'required|string',
        ]);

        // Generate document number dengan format GR000001, GR000002, dst.
        $lastReceipt = GoodsReceipt::orderBy('created_at', 'desc')->first();
        $lastNumber = $lastReceipt ? intval(substr($lastReceipt->document_number, 2)) : 0;
        $newNumber = $lastNumber + 1;
        $documentNumber = 'GR' . str_pad($newNumber, 6, '0', STR_PAD_LEFT);

        // Simpan data Goods Receipt dengan document_number
        $goodsReceipt = GoodsReceipt::create(array_merge(
            $request->all(),
            ['document_number' => $documentNumber]
        ));

        // Update qty_open pada Purchase Order yang sesuai
        $purchaseOrder = PurchaseOrder::where('po_number', $request->po_number)
        ->where('code_material', $request->material_code)
        ->first();

        if ($purchaseOrder) {
            $purchaseOrder->qty_received += $request->received_quantity;
            $purchaseOrder->qty_open -= $request->received_quantity;

            if ($purchaseOrder->qty_open < 0) {
                $purchaseOrder->qty_open = 0;
            }

            $purchaseOrder->save();
        }

        // Update atau Tambahkan data ke Inventory
        $inventory = Inventory::where('material_code', $request->material_code)
        ->where('storage_location', $request->storage_location)
        ->first();

        if ($inventory) {
            $inventory->stock_quantity += $request->received_quantity;
            $inventory->save();
        } else {
            Inventory::create([
                'material_code' => $request->material_code,
                'storage_location' => $request->storage_location,
                'stock_quantity' => $request->received_quantity,
            ]);
        }

        return redirect()->route('goods_receipts.create')->with('success', 'Goods Receipt created with document number ' . $documentNumber . ', Purchase Order and Inventory updated successfully.');
    }

    // Menampilkan semua Goods Receipts
    public function index()
    {
        $goodsReceipts = GoodsReceipt::all();
        return view('goods_receipts.store', compact('goodsReceipts'));
    }
}
