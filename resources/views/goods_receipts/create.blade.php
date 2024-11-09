@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Create Goods Receipt</h1>

    <form action="{{ route('goods_receipts.store') }}" method="POST" class="mx-auto bg-light p-5 rounded-3 shadow-lg" style="max-width: 600px;">
        @csrf

        <div class="mb-4">
            <label for="po_number" class="form-label fw-semibold">PO Number</label>
            <select name="po_number" id="po_number" class="form-control" required>
                <option value="">Select a PO Number</option>
                @foreach ($purchaseOrders as $po)
                <option value="{{ $po->po_number }}">{{ $po->po_number }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label for="material_code" class="form-label fw-semibold">Material Code</label>
            <input type="text" name="material_code" class="form-control" placeholder="Enter material code" required>
        </div>

        <div class="mb-4">
            <label for="received_quantity" class="form-label fw-semibold">Received Quantity</label>
            <input type="number" name="received_quantity" class="form-control" placeholder="Enter received quantity" required>
        </div>

        <div class="mb-4">
            <label for="received_date" class="form-label fw-semibold">Received Date</label>
            <input type="date" name="received_date" class="form-control" required>
        </div>

        <div class="mb-4">
            <label for="storage_location" class="form-label fw-semibold">Storage Location</label>
            <input type="text" name="storage_location" class="form-control" placeholder="Enter storage location" required>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-lg w-100">Create Goods Receipt</button>
        </div>
    </form>

    @if (session('success'))
    <div class="alert alert-success mt-4">
        {{ session('success') }}
    </div>
    @endif
</div>
@endsection