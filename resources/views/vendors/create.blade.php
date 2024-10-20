@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Vendor</h1>
    <form action="{{ route('vendors.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="vendor_code">Kode Vendor</label>
            <input type="text" class="form-control" name="vendor_code" required>
        </div>
        <div class="form-group">
            <label for="vendor_name">Nama Vendor</label>
            <input type="text" class="form-control" name="vendor_name" required>
        </div>
        <div class="form-group">
            <label for="vendor_address">Alamat Vendor</label>
            <textarea class="form-control" name="vendor_address" required></textarea>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" name="status">
                <option value="1">Aktif</option>
                <option value="0">Non-Aktif</option>
            </select>
        </div>
        <div class="form-group">
            <label for="contract">Kontrak</label>
            <input type="text" class="form-control" name="contract" required>
        </div>
        <div class="form-group">
            <label for="group">Grup</label>
            <input type="text" class="form-control" name="group" required>
        </div>
        <div class="form-group">
            <label for="cost_center">Cost Center</label>
            <input type="text" class="form-control" name="cost_center" required>
        </div>
        <button type="submit" class="btn btn-primary">Create Vendor</button>
    </form>
</div>
@endsection