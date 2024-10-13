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
                            <!-- Sidebar links here -->
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Material Management
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="#">Master data</a>
                                    <a class="nav-link" href="#">Inventory</a>
                                    <a class="nav-link" href="#">Procurement</a>
                                    <a class="nav-link" href="#">Material Control</a>
                                </nav>
                            </div>
                            <!-- Other Sidebar Links -->
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Proses Browse
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