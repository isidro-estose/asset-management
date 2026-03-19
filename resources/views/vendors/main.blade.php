@extends('layouts.app')

@section('title', 'Vendors')

@section('content')
    <div class="mb-1 row">
        <div class="col">
            <h3>Vendors</h3>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-dark table-striped table-bordered">
            <thead class="text-center align-middle text-nowrap">
                <tr>
                    <th>Supplier</th>
                    <th>Contact Person</th>
                    <th>Contact Number</th>
                    <th>Email</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
            <!-- Table rows will be populated by JavaScript or server-side rendering -->
            </tbody>
        </table>
    </div>
@endsection