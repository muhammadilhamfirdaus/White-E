@extends('layouts.app')

@section('content')
<h1>Create Purchase Order</h1>

<form action="{{ route('purchase_order.store') }}" method="POST">
    @csrf
    <div>
        <label for="code">Material Code:</label>
        <input type="text" name="code" id="code" required>
    </div>

    <div>
        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" id="quantity" required>
    </div>

    <div>
        <label for="vendor">Vendor:</label>
        <input type="text" name="vendor" id="vendor" required>
    </div>

    <div>
        <label for="delivery_date">Delivery Date:</label>
        <input type="date" name="delivery_date" id="delivery_date" required>
    </div>

    <button type="submit">Create Purchase Order</button>
</form>

@if (session('success'))
<p>{{ session('success') }}</p>
@endif
@endsection