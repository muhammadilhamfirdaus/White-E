<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Material;

class MaterialController extends Controller
{
    public function create()
    {
        return view('materials.create');
    }

    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'item_code' => 'required',
            'item_name' => 'required',
            'unit_of_measure' => 'required',
            'group' => 'required',
        ]);

        // Simpan data
        Material::create($request->all());

        // Redirect dengan flash message
        return redirect()->route('master_material')->with('success', 'Material created successfully!');
    }

    public function index()
    {
        // Mengambil semua data material
        $materials = Material::all();

        // Mengirim data ke view
        return view('master_material', compact('materials'));
    }
}
