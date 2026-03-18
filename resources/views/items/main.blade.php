@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="mb-1 row">
        <div class="col">
            <h3>Devices</h3>
        </div>
    </div>
    <table class="table table-dark table-striped table-hover">
        <thead>
            <tr>
                <th>Asset Code</th>
                <th>Serial Number</th>
                <th>Brand/Made</th>
                <th>Model Type</th>
                <th>Category</th>
                <th>Purchase Price</th>
                <th>Condition</th>
                <th>empId</th>
                <th>Warranty Expiry</th>
                <th>userEncoded</th>
                <th>SupplierId</th>
                <th>Status</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <!-- Table rows will be populated by JavaScript or server-side rendering -->
        </tbody>
    </table>
@endsection