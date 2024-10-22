@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Edit Purchase Order</h1>

    <form action="{{ route('purchase_order.update', $order->id) }}" method="POST" class="mx-auto bg-light p-5 rounded-3 shadow-lg" style="max-width: 600px;">
        @csrf
        @method('PUT')

        <!-- Vendor Section -->
        <div class="mb-4">
            <label for="vendor" class="form-label fw-semibold">Vendor</label>
            <input type="text" name="vendor" value="{{ $order->vendor }}" class="form-control py-3" required>
        </div>

        <div class="mb-4">
            <label for="code_material" class="form-label fw-semibold">Material Code</label>
            <input type="text" name="code_material" value="{{ $order->code_material }}" class="form-control py-3" required>
        </div>

        <div class="mb-4">
            <label for="nama_material" class="form-label fw-semibold">Material Name</label>
            <input type="text" name="nama_material" value="{{ $order->nama_material }}" class="form-control py-3" required>
        </div>

        <div class="mb-4">
            <label for="quantity" class="form-label fw-semibold">Quantity</label>
            <input type="number" name="quantity" value="{{ $order->quantity }}" class="form-control py-3" required>
        </div>

        <div class="mb-4">
            <label for="storage_location" class="form-label fw-semibold">Storage Location</label>
            <select name="storage_location" class="form-control py-3" required>
                <option value="SLFG" {{ $order->storage_location == 'SLFG' ? 'selected' : '' }}>SLFG</option>
                <option value="SLRM" {{ $order->storage_location == 'SLRM' ? 'selected' : '' }}>SLRM</option>
                <option value="SLNG" {{ $order->storage_location == 'SLNG' ? 'selected' : '' }}>SLNG</option>
                <option value="SLEG" {{ $order->storage_location == 'SLEG' ? 'selected' : '' }}>SLEG</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="qty_open" class="form-label fw-semibold">Qty Open</label>
            <input type="number" name="qty_open" value="{{ $order->qty_open }}" class="form-control py-3" required>
        </div>

        <div class="mb-4">
            <label for="delivery_date" class="form-label fw-semibold">Delivery Date</label>
            <input type="date" name="delivery_date" value="{{ $order->delivery_date }}" class="form-control py-3" required>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-lg w-100">Update Purchase Order</button>
        </div>
    </form>
</div>
@endsection