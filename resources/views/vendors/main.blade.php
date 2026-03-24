@extends('layouts.app')

@section('title', 'Vendors')

@section('content')
    <div class="mb-1 row">
        <div class="col">
            <h3>Vendors</h3>
        </div>
        <div class="col">
            <!-- Button to trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createVendorModal" style="float:right">Add</button>
            <!-- Button to trigger modal -->
            <div class="modal fade" id="createVendorModal" tabindex="-1">
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-dark table-striped table-bordered">
            <thead>
                <tr>
                    <th>Supplier</th>
                    <th>Contact Person</th>
                    <th>Contact Number</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Update</th>
                </tr>
            </thead>
            <tbody>
                @foreach($vendors as $vendor)
                    <tr>
                        <td>{{ $vendor->vendorName }}</td>
                        <td>{{ $vendor->vendorContactPerson }}</td>
                        <td>{{ $vendor->vendorPhoneNumber }}</td>
                        <td>{{ $vendor->vendorEmail }}</td>
                        <td>{{ $vendor->vendorAddress }}</td>
                        <td>
                            <button 
                                type="button"
                                class="btn btn-primary edtBtn"
                                data-id="{{ $vendor->id }}"
                                data-vendorName="{{ $vendor->vendorName }}"
                                data-vendorContactPerson="{{ $vendor->vendorContactPerson }}"
                                data-vendorPhoneNumber="{{ $vendor->vendorPhoneNumber }}"
                                data-vendorEmail="{{ $vendor->vendorEmail }}"
                                data-vendorAddress="{{ $vendor->vendorAddress }}"
                                data-bs-toggle="modal" 
                                data-bs-target="#editVendorModal">
                            Edit
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
<script src="{{ asset('js/vendorEventModal.js') }}"></script>