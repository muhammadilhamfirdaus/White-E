<!-- resources/views/inventory/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mt-4 mb-4">Inventory</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Material Code</th>
                    <th>Storage Location</th>
                    <th>Stock Quantity</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($inventoryItems as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->material_code }}</td>
                    <td>{{ $item->storage_location }}</td>
                    <td>{{ $item->stock_quantity }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection