@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Purchase Orders</h1>

    @if ($orders->isEmpty())
    <p class="text-center">No purchase orders found.</p>
    @else
    <div class="table-responsive">
        <table class="table table-hover table-bordered table-striped align-middle" id="mauexport">
            <thead class="table-dark">
                <tr>
                    <th>PO Number</th>
                    <th>Material Code</th>
                    <th>Material Name</th>
                    <th>Quantity</th>
                    <th>Qty Open</th> <!-- Tambahkan kolom Qty Open -->
                    <th>Storage Location</th> <!-- Tambahkan kolom Storage Location -->
                    <th>Vendor</th>
                    <th>Delivery Date</th>
                    <th>Action</th> <!-- Kolom untuk tombol Edit -->
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->po_number }}</td>
                    <td>{{ $order->code_material }}</td>
                    <td>{{ $order->nama_material }}</td>
                    <td>{{ $order->quantity }}</td>
                    <td>{{ $order->qty_open }}</td> <!-- Menampilkan Qty Open -->
                    <td>{{ $order->storage_location }}</td> <!-- Menampilkan Storage Location -->
                    <td>{{ $order->vendor }}</td>
                    <td>{{ $order->delivery_date }}</td>
                    <td>
                        <a href="{{ route('purchase_order.edit', $order->id) }}" class="btn btn-sm btn-warning">Edit</a> <!-- Tombol Edit -->
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
</div>
@endsection