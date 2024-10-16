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
                        <h4>WHITE-E - Inventory Table</h4>
                    </div>
                </div>

                <!-- Table Section -->
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Item Code</th>
                                    <th>Deskripsi Material</th>
                                    <th>Storage Location</th>
                                    <th>Unit Measure</th>
                                    <th>Group</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Add table rows dynamically as per your data -->
                                <tr>
                                    <td>123456</td>
                                    <td>Material A</td>
                                    <td>Location X</td>
                                    <td>Piece</td>
                                    <td>Group 1</td>
                                </tr>
                                <tr>
                                    <td>789012</td>
                                    <td>Material B</td>
                                    <td>Location Y</td>
                                    <td>Kg</td>
                                    <td>Group 2</td>
                                </tr>
                                <!-- Add more rows as needed -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
</div>
@endsection