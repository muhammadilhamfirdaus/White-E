@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Vendor</h1>

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <table class="table table-bordered" id="mauexport">
        <thead>
            <tr>
                <th>Kode Vendor</th>
                <th>Nama Vendor</th>
                <th>PO Number</th>
                <th>Alamat Vendor</th>
                <th>Status</th>
                <th>Kontrak</th>
                <th>Grup</th>
                <th>Cost Center</th>
            </tr>
        </thead>
        <tbody>
            @foreach($vendors as $vendor)
            <tr>
                <td>{{ $vendor->vendor_code }}</td>
                <td>{{ $vendor->vendor_name }}</td>
                <td>{{ $vendor->vendor_address }}</td>
                <td>{{ $vendor->status }}</td>
                <td>{{ $vendor->contract }}</td>
                <td>{{ $vendor->group }}</td>
                <td>{{ $vendor->cost_center }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection