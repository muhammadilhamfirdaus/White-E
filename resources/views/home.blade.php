@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
       


            <!-- Main content -->
            <main id="main-content" class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

                <img src="{{ asset('images/dashboard-logo.png') }}" class="img-fluid" alt="...">
                <div class="container-sections">
                    <!-- Section 1 -->
                    <div class="section section-1">
                        <div>
                            <h1>Oracle Cloud</h1>
                            <h2>Applications</h2>
                            <p>A complete suite of cloud applications delivering consistent processes and data across your business</p>
                            <button class="btn">Explore cloud apps</button>
                        </div>
                    </div>

                    <!-- Section 2 -->
                    <div class="section section-2">
                        <div>
                            <h1>Oracle Cloud</h1>
                            <h2>Infrastructure</h2>
                            <p>An automated, secure platform for migrating enterprise workloads and building new cloud native apps</p>
                            <button class="btn">Explore OCI</button>
                        </div>
                    </div>
                </div>
                <!-- Dashboard content -->
                <!-- <div class="row">
                    <div class="col-md-6">
                        <h4>WHITE-E ERP</h4>
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action">Material Management</a>
                            <a href="#" class="list-group-item list-group-item-action">Production Planning</a>
                            <a href="#" class="list-group-item list-group-item-action">Sales And Distibutor</a>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <h4>Material Management</h4>
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action">Item</a>
                            <a href="#" class="list-group-item list-group-item-action">Customer</a>
                            <a href="#" class="list-group-item list-group-item-action">Supplier</a>
                            <a href="#" class="list-group-item list-group-item-action">Sales Invoice</a>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <h4>Your Shortcuts</h4>
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action">Item</a>
                            <a href="#" class="list-group-item list-group-item-action">Customer</a>
                            <a href="#" class="list-group-item list-group-item-action">Supplier</a>
                            <a href="#" class="list-group-item list-group-item-action">Sales Invoice</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h4>Your Shortcuts</h4>
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action">Item</a>
                            <a href="#" class="list-group-item list-group-item-action">Customer</a>
                            <a href="#" class="list-group-item list-group-item-action">Supplier</a>
                            <a href="#" class="list-group-item list-group-item-action">Sales Invoice</a>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-6">
                        <h4>Reports & Masters</h4>
                        <ul class="list-group">
                            <li class="list-group-item">Accounting</li>
                            <li class="list-group-item">Stock</li>
                            <li class="list-group-item">CRM</li>
                        </ul>
                    </div>

                    <div class="col-md-6">
                        <h4>Data Import and Settings</h4>
                        <ul class="list-group">
                            <li class="list-group-item">Import Data</li>
                            <li class="list-group-item">Chart of Accounts</li>
                        </ul>
                    </div>
                </div> -->


                <div class="container mt-5">
                    <!-- Your Shortcuts Section -->
                    <div class="row dashboard-section">
                        <div class="col-md-12">
                            <h4>WHITE-E</h4>
                            <div class="row">
                                <div class="col-md-3 shortcut-group">
                                    <a href="#">Material Management (MM)</a>
                                </div>
                                <div class="col-md-3 shortcut-group">
                                    <a href="#">Production Planning (PP)</a>
                                </div>
                                <div class="col-md-3 shortcut-group">
                                    <a href="#">Sales and Distibutor (SD)</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Reports & Masters Section -->
                    <div class="row dashboard-section">
                        <div class="col-md-4">
                            <h4>Material Management (MM) </h4>
                            <ul class="list-group">
                                <li class="list-group-item"><a href="#">Masterdata</a></li>
                                <li class="list-group-item"><a href="#">Inventory</a></li>
                                <li class="list-group-item"><a href="#">Procurement</a></li>
                                <li class="list-group-item"><a href="#">Material Control</Code></a></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <h4>Production Planning</h4>
                            <ul class="list-group">
                                <li class="list-group-item"><a href="#">Bill of Material (BOM)</a></li>
                                <li class="list-group-item"><a href="#">Production Order (PRO)</a></li>
                                <li class="list-group-item"><a href="#">Good Issue (GI)</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <h4>Sales and Distributor (SD)</h4>
                            <ul class="list-group">
                                <li class="list-group-item"><a href="#">Sales Order (SO)</a></li>
                                <li class="list-group-item"><a href="#">Delivery</a></li>
                                <li class="list-group-item"><a href="#">Shipment</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Data Import and Settings Section -->
                    <div class="row dashboard-section">
                        <div class="col-md-4">
                            <h4>Data Import and Settings</h4>
                            <ul class="list-group">
                                <li class="list-group-item"><a href="#">Transaksi </a></li>
                                <li class="list-group-item"><a href="#">Masterdata</a></li>
                                <li class="list-group-item"><a href="#">Account Management</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Edit and New buttons -->
                    <!-- <div class="btn-group">
                        <button class="btn btn-outline-primary">Edit</button>
                        <button class="btn btn-primary">New</button>
                    </div> -->
                </div>

                @yield('content')
            </main>

        </div>
    </div>
    @endsection