@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Purchase Orders</h1>

    @if ($orders->isEmpty())
    <p class="text-center">No purchase orders found.</p>
    @else
    <div class="table-responsive">
        <table class="table table-hover table-bordered table-striped align-middle" id="mauexport">
            <thead>
                <tr>
                    <th>PO Number</th>
                    <th>Material Code</th>
                    <th>Material Name</th>
                    <th>Quantity Ordered</th>
                    <th>Quantity Open</th>
                    <th>Quantity Received</th>
                    <th>Storage Location</th>
                    <th>Vendor</th>
                    <th>Delivery Date</th>
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
                    <td>{{ $order->qty_received }}</td>
                    <td>{{ $order->storage_location }}</td>
                    <td>{{ $order->vendor }}</td>
                    <td>{{ $order->delivery_date }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
</div>
@endsection