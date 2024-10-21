@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Create and View Purchase Orders</h1>

    <!-- Form untuk membuat Purchase Order -->
    <form action="{{ route('purchase_order.store') }}" method="POST" class="mx-auto bg-light p-5 rounded-3 shadow-lg" style="max-width: 600px;">
        @csrf
        <!-- Vendor dan item input di sini (form yang sudah Anda buat) -->
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

                <div class="mb-4">
                    <label for="storage_location" class="form-label fw-semibold">Storage Location</label>
                    <select name="items[0][storage_location]" class="form-control py-3" required>
                        <option value="SLFG">SLFG</option>
                        <option value="SLRM">SLRM</option>
                        <option value="SLNG">SLNG</option>
                        <option value="SLEG">SLEG</option>
                    </select>
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

    <!-- Notifikasi sukses -->
    @if (session('success'))
    <div class="alert alert-success mt-4 text-center">
        {{ session('success') }}
    </div>
    @endif

    <!-- Tabel untuk menampilkan semua Purchase Orders -->
    <div class="mt-5">
        <h2 class="text-center mb-4">Existing Purchase Orders</h2>

        @if ($orders->isEmpty())
        <p class="text-center">No purchase orders found.</p>
        @else
        <div class="table-responsive">
            <table class="table table-hover table-bordered table-striped align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>PO Number</th>
                        <th>Material Code</th>
                        <th>Material Name</th>
                        <th>Quantity</th>
                        <th>Qty Open</th>
                        <th>Storage Location</th>
                        <th>Vendor</th>
                        <th>Delivery Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->po_number }}</td>
                        <td>{{ $order->code_material }}</td>
                        <td>{{ $order->nama_material }}</td>
                        <td>{{ $order->quantity }}</td>
                        <td>{{ $order->qty_open }}</td>
                        <td>{{ $order->storage_location }}</td>
                        <td>{{ $order->vendor }}</td>
                        <td>{{ $order->delivery_date }}</td>
                        <td>
                            <a href="{{ route('purchase_order.edit', $order->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
    </div>
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

                <div class="mb-4">
                    <label for="storage_location" class="form-label fw-semibold">Storage Location</label>
                    <select name="items[${itemIndex}][storage_location]" class="form-control py-3" required>
                        <option value="SLFG">SLFG</option>
                        <option value="SLRM">SLRM</option>
                        <option value="SLNG">SLNG</option>
                        <option value="SLEG">SLEG</option>
                    </select>
                </div>
            </div>
        `;
        itemsContainer.insertAdjacentHTML('beforeend', newItemRow);
        itemIndex++;
    });
</script>
@endsection
