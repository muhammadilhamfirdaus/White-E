@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div id="layoutSidenav" class="p-0">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Material Management
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{ route('masterdata') }}">Master data</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Inventory</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Procrutment</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Material Control</a>
                                </nav>
                            </div>
                            <a class="nav-link" href="{{ route('inventory') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Inventory
                            </a>
                            <a class="nav-link" href="keluar.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                History Barang Keluar
                            </a>
                            <a class="nav-link" href="inventorybrowse.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Inventory Browse
                            </a>
                            <a class="nav-link" href="scankeluar.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Scan Keluar
                            </a>
                            <a class="nav-link" href="scanmasuk.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Scan Masuk
                            </a>
                            <a class="nav-link" href="historybarangmasuk.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                History Barang Masuk
                            </a>
                            <a class="nav-link" href="historybarangkeluar.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                History Barang Keluar
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Layouts
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Static Navigation</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>


            <!-- Main content -->
            <main id="main-content" class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

               
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