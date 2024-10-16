@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar dan konten lainnya -->

        <!-- Main content -->
        <main id="main-content" class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="bg-white dark:bg-gray-800 p-8 rounded-lg shadow-lg w-full">
                <h2 class="text-2xl font-semibold mb-6 text-center">Material Management / Master Material</h2>

                <!-- Alert untuk pesan sukses -->
                @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                <!-- Tabel Daftar Material -->
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Item Code</th>
                            <th>Item Name</th>
                            <th>Unit of Measure</th>
                            <th>Group</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($materials as $material)
                        <tr>
                            <td>{{ $material->item_code }}</td>
                            <td>{{ $material->item_name }}</td>
                            <td>{{ $material->unit_of_measure }}</td>
                            <td>{{ $material->group }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>
@endsection