@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Create Purchase Order</h1>

    <form action="{{ route('purchase_order.store') }}" method="POST" class="mx-auto bg-light p-5 rounded-3 shadow-lg" style="max-width: 600px;">
        @csrf

        <!-- Vendor Section -->
        <!-- Vendor Section (Dropdown) -->
        <div class="mb-4">
            <label for="vendor" class="form-label fw-semibold">Vendor</label>
            <select name="vendor" id="vendor" class="form-control py-3" required>
                <option value="">Select a vendor</option>
                @foreach ($vendors as $vendor)
                <option value="{{ $vendor->vendor_name }}">{{ $vendor->vendor_code}} {{ $vendor->vendor_name}}</option>
                @endforeach
            </select>
        </div>

        <!-- Section for Multiple Items -->
        <div id="items-container">
            <div class="item-row mb-4">
                <div class="form-group">
                    <label for="material_code">Material Code</label>
                    <select name="items[0][code]" id="material_code" class="form-control">
                        <option value="">-- Select Material Code --</option>
                        @foreach($materials as $material)
                        <option value="{{ $material->item_code }}">{{ $material->item_code }}</option>
                        @endforeach
                    </select>
            </div>

            <div class="form-group">
                <label for="material_name">Material Name</label>
                <input type="text" id="material_name" name="items[0][material]" class="form-control" readonly>
            </div>

            <div class="mb-4">
                <label for="quantity" class="form-label fw-semibold">Quantity</label>
                <input type="number" name="items[0][quantity]" class="form-control py-3" placeholder="Enter quantity" required>
            </div>

            <div class="mb-4">
                <label for="storage_location" class="form-label fw-semibold">Storage Location</label>
                <input type="text" name="items[0][storage_location]" class="form-control py-3" placeholder="Enter storage location (e.g. SLFG)" required>
            </div>

            <div class="mb-4">
                <label for="qty_open" class="form-label fw-semibold">Qty Open</label>
                <input type="number" name="items[0][qty_open]" class="form-control py-3" placeholder="Enter open quantity" required>
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#material_code').on('change', function() {
            var materialCode = $(this).val();

            if (materialCode) {
                $.ajax({
                    url: '/material/' + materialCode,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        if (data) {
                            $('#material_name').val(data.item_name); // Isi material name
                        } else {
                            $('#material_name').val(''); // Kosongkan jika tidak ada data
                        }
                    }
                });
            } else {
                $('#material_name').val(''); // Kosongkan jika tidak ada pilihan
            }
        });
    });
</script>


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

        <div class="mb-4">
            <label for="storage_location" class="form-label fw-semibold">Storage Location</label>
            <input type="text" name="items[${itemIndex}][storage_location]" class="form-control py-3" placeholder="Enter storage location (e.g. SLFG)" required>
        </div>

        <div class="mb-4">
            <label for="qty_open" class="form-label fw-semibold">Qty Open</label>
            <input type="number" name="items[${itemIndex}][qty_open]" class="form-control py-3" placeholder="Enter open quantity" required>
        </div>
    </div>
`;

        itemsContainer.insertAdjacentHTML('beforeend', newItemRow);
        itemIndex++;
    });
</script>
@endsection