@extends('layouts.app')

@section('content')
<h1>Purchase Orders</h1>

@if ($orders->isEmpty())
<p>No purchase orders found.</p>
@else
<table class="table">
    <thead>
        <tr>
            <th>Material Code</th>
            <th>Quantity</th>
            <th>Vendor</th>
            <th>Delivery Date</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($orders as $order)
        <tr>
            <td>{{ $order->code_material }}</td>
            <td>{{ $order->quantity }}</td>
            <td>{{ $order->vendor }}</td>
            <td>{{ $order->delivery_date }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif

@endsection