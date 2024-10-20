<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function create()
    {
        return view('vendors.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'vendor_code' => 'required|unique:vendors,vendor_code',
            'vendor_name' => 'required',
            'vendor_address' => 'required',
            'status' => 'required|boolean',
            'contract' => 'required',
            'group' => 'required',
            'cost_center' => 'required',
        ]);

        // Simpan data vendor
        Vendor::create($validated);

        // Redirect ke halaman daftar vendor
        return redirect()->route('vendors.store')->with('success', 'Vendor created successfully.');
    }

    public function index()
    {
        // Ambil semua data vendor
        $vendors = Vendor::all();
        return view('vendors.store', compact('vendors'));
    }
}
