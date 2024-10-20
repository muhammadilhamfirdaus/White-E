@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Purchase Orders</h1>

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