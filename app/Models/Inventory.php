<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'inventory';

    // Kolom yang bisa diisi secara massal
    protected $fillable = [
        'material_code',
        'storage_location',
        'stock_quantity',
    ];

    // Jika tidak menggunakan timestamps (created_at dan updated_at), tambahkan:
    // public $timestamps = false;
}
