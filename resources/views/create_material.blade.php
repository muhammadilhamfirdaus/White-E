@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">

        <!-- Main content -->
        <main id="main-content" class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="bg-none dark:bg-gray-800 p-8 rounded-lg w-full max-w-md">
                <h2 class="text-2xl font-semibold mb-6 text-center">Material Management / Masterdata Material / Create Material</h2>

                <!-- Alert untuk pesan sukses -->
                @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                <!-- Form Create Material -->
                <form action="{{ route('materials.store') }}" method="POST">
                    @csrf
                    <!-- Item Code -->
                    <div class="mb-4">
                        <label for="itemCode" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Item Code</label>
                        <input type="text" id="itemCode" name="item_code" required class="mt-1 block w-full px-3 py-2 bg-gray-100 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-900 dark:border-gray-700">
                    </div>

                    <!-- Item Name -->
                    <div class="mb-4">
                        <label for="itemName" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Item Name</label>
                        <input type="text" id="itemName" name="item_name" required class="mt-1 block w-full px-3 py-2 bg-gray-100 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-900 dark:border-gray-700">
                    </div>

                    <!-- Unit of Measure -->
                    <div class="mb-4">
                        <label for="unitOfMeasure" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Unit Of Measure</label>
                        <select id="unitOfMeasure" name="unit_of_measure" required class="mt-1 block w-full px-3 py-2 bg-gray-100 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-900 dark:border-gray-700">
                            <option value="">Select Unit</option>
                            <option value="pcs">PCS</option>
                            <option value="kg">KG</option>
                            <option value="liter">Liter</option>
                        </select>
                    </div>

                    <!-- Group -->
                    <div class="mb-4">
                        <label for="group" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Group</label>
                        <select id="group" name="group" required class="mt-1 block w-full px-3 py-2 bg-gray-100 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-900 dark:border-gray-700">
                            <option value="">Select Group</option>
                            <option value="raw_materials">Raw Materials</option>
                            <option value="finished_goods">Finished Goods</option>
                            <option value="packaging">Packaging</option>
                        </select>
                    </div>

                    <!-- Save Button -->
                    <div class="flex justify-end">
                        <button type="submit" class="px-6 py-2 text-white btn btn-primary rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            Save
                        </button>
                    </div>
                </form>
            </div>
        </main>
    </div>
</div>
@endsection