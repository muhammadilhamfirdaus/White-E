@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Create Purchase Order</h1>

    <form action="{{ route('purchase_order.store') }}" method="POST" class="mx-auto bg-light p-5 rounded-3 shadow-lg" style="max-width: 600px;">
        @csrf

        <!-- Vendor Section -->
        <div class="mb-4">
            <label for="vendor" class="form-label fw-semibold">Vendor</label>
            <input type="text" name="vendor" id="vendor" class="form-control py-3" placeholder="Enter vendor name" required>
        </div>

        <!-- Section for Multiple Items -->
        <div id="items-container">
            <div class="item-row mb-4">
                <div class="mb-4">
                    <label for="code" class="form-label fw-semibold">Material Code</label>
                    <input type="text" name="items[0][code]" class="form-control py-3" placeholder="Enter material code" required>
                </div>

                <div class="mb-4">
                    <label for="material" class="form-label fw-semibold">Material Name</label>
                    <input type="text" name="items[0][material]" class="form-control py-3" placeholder="Enter material name" required>
                </div>

                <div class="mb-4">
                    <label for="quantity" class="form-label fw-semibold">Quantity</label>
                    <input type="number" name="items[0][quantity]" class="form-control py-3" placeholder="Enter quantity" required>
                </div>
            </div>
        </div>

        <div class="mb-4">
            <button type="button" class="btn btn-secondary" id="add-item-btn">Add Another Item</button>
        </div>

        <div class="mb-4">
            <label for="delivery_date" class="form-label fw-semibold">Delivery Date</label>
            <input type="date" name="delivery_date" id="delivery_date" class="form-control py-3" required>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-lg w-100">Create Purchase Order</button>
        </div>
    </form>

    @if (session('success'))
    <div class="alert alert-success mt-4 text-center">
        {{ session('success') }}
    </div>
    @endif
</div>

<script>
    let itemIndex = 1;
    document.getElementById('add-item-btn').addEventListener('click', function() {
        const itemsContainer = document.getElementById('items-container');
        const newItemRow = `
            <div class="item-row mb-4">
                <div class="mb-4">
                    <label for="code" class="form-label fw-semibold">Material Code</label>
                    <input type="text" name="items[${itemIndex}][code]" class="form-control py-3" placeholder="Enter material code" required>
                </div>

                <div class="mb-4">
                    <label for="material" class="form-label fw-semibold">Material Name</label>
                    <input type="text" name="items[${itemIndex}][material]" class="form-control py-3" placeholder="Enter material name" required>
                </div>

                <div class="mb-4">
                    <label for="quantity" class="form-label fw-semibold">Quantity</label>
                    <input type="number" name="items[${itemIndex}][quantity]" class="form-control py-3" placeholder="Enter quantity" required>
                </div>
            </div>
        `;
        itemsContainer.insertAdjacentHTML('beforeend', newItemRow);
        itemIndex++;
    });
</script>
@endsection