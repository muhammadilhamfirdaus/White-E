@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Main content -->
        <main id="main-content" class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <!-- Page Title -->
            <div class="container mt-5">
                <div class="row dashboard-section">
                    <div class="col-md-12">
                        <h4>WHITE-E - Inventory</h4>
                    </div>
                </div>

                <!-- Form Section -->
                <div class="row">
                    <div class="col-md-8">
                        <form method="GET" action="{{ route('inventory-table') }}">
                            <!-- Item Code -->
                            <div class="mb-3">
                                <label for="item_code" class="form-label">Item Code</label>
                                <input type="text" class="form-control" id="item_code" placeholder="Enter item code">
                            </div>

                            <!-- Deskripsi Material -->
                            <div class="mb-3">
                                <label for="material_description" class="form-label">Deskripsi Material</label>
                                <input type="text" class="form-control" id="material_description" placeholder="Enter material description">
                            </div>

                            <!-- Storage Location -->
                            <div class="mb-3">
                                <label for="storage_location" class="form-label">Storage Location</label>
                                <input type="text" class="form-control" id="storage_location" placeholder="Enter storage location">
                            </div>

                            <!-- Unit Measure -->
                            <div class="mb-3">
                                <label for="unit_measure" class="form-label">Unit Measure</label>
                                <input type="text" class="form-control" id="unit_measure" placeholder="Enter unit of measure">
                            </div>

                            <!-- Group -->
                            <div class="mb-3">
                                <label for="group" class="form-label">Group</label>
                                <input type="text" class="form-control" id="group" placeholder="Enter group">
                            </div>

                            <!-- Execute Button -->
                            <button type="submit" class="btn1 btn-primary bg-blue">Execute</button>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
</div>
@endsection