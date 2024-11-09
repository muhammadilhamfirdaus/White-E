<!-- resources/views/goods_receipts/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mt-4 mb-4">Goods Receipts</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>PO Number</th>
                    <th>Material Code</th>
                    <th>Received Quantity</th>
                    <th>Received Date</th>
                    <th>Storage Location</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($goodsReceipts as $gr)
                <tr>
                    <td>{{ $gr->id }}</td>
                    <td>{{ $gr->po_number }}</td>
                    <td>{{ $gr->material_code }}</td>
                    <td>{{ $gr->received_quantity }}</td>
                    <td>{{ $gr->received_date }}</td>
                    <td>{{ $gr->storage_location }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection