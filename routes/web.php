<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\PurchaseOrderController;
use App\Http\Controllers\VendorController;
use App\Models\Material;
use App\Http\Controllers\GoodsReceiptController;
use App\Http\Controllers\InventoryController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/welcome', [App\Http\Controllers\HomeController::class, 'index2'])->name('welcome');

Auth::routes();

Route::get('/create_material', [App\Http\Controllers\HomeController::class, 'index3'])->name('create_material');

Auth::routes();

Route::get('/inventory', [App\Http\Controllers\HomeController::class, 'index4'])->name('inventory');

Auth::routes();

Route::get('/inventory-table', [App\Http\Controllers\HomeController::class, 'table1'])->name('inventory-table');

Auth::routes();

Route::get('/master_material', [App\Http\Controllers\HomeController::class, 'index5'])->name('master_material');


Route::post('/materials', [MaterialController::class, 'store'])->name('materials.store');

Route::get('/master-material', [MaterialController::class, 'index'])->name('master_material');

Route::get('/purchase_order/create', [PurchaseOrderController::class, 'create'])->name('purchase_order.create');
Route::post('/purchase_order/store', [PurchaseOrderController::class, 'store'])->name('purchase_order.store');

Route::get('/purchase_order/store', [PurchaseOrderController::class, 'index'])->name('purchase_order.store');
Route::resource('purchase_order', PurchaseOrderController::class);


Route::get('/vendors/create', [VendorController::class, 'create'])->name('vendors.create');
Route::post('/vendors/store', [VendorController::class, 'store'])->name('vendors.store');

Route::get('/vendors/store', [VendorController::class, 'index'])->name('vendors.index'); // Menampilkan daftar vendor


Route::get(
    '/material/{code}',
    function ($code) {
        $material = Material::where('item_code', $code)->first();
        return response()->json($material);
    }
);


Route::get('/goods-receipts/create', [GoodsReceiptController::class, 'create'])->name('goods_receipts.create');
Route::post('/goods-receipts/store', [GoodsReceiptController::class, 'store'])->name('goods_receipts.store');
Route::get('/goods-receipts/store', [GoodsReceiptController::class, 'index'])->name('goods_receipts.index');


Route::get('/inventory', [InventoryController::class, 'index'])->name('inventory.store');
