<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'item_code' => 'required|string|max:255',
            'item_name' => 'required|string|max:255',
            'unit_of_measure' => 'required|string',
            'group' => 'required|string',
        ]);

        Material::create($validatedData);

        return redirect()->back()->with('success', 'Material created successfully!');
    }
}
