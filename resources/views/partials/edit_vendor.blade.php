<!-- resources/views/projects/edit_vendor.blade.php -->
<div class="modal fade" id="editVendorModal" tabindex="-1" aria-labelledby="editVendorModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editVendorModalLabel">Update Vendor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Your form goes here -->
                <form method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="vendorName" class="form-label">Supplier Name</label>
                        <input type="hidden" id="vendorId" name="vendorId" value="{{ $vendor->id }}">
                        <input type="text" class="form-control" id="vendorName" name="vendorName" placeholder="ID Number" value="{{ $vendor->vendorName }}" readonly>
                    </div>
                    <div class="mb-3 row">
                        <div class="col">
                            <label for="vendorContactPerson" class="form-label">Contact Person</label>
                            <input type="text" class="form-control" id="vendorContactPerson" name="vendorContactPerson" placeholder="First Name" value="{{ $vendor->vendorContactPerson }}">
                        </div>
                        <div class="col">
                            <label for="vendorPhoneNumber" class="form-label">Contact Number</label>
                            <input type="text" class="form-control" id="vendorPhoneNumber" name="vendorPhoneNumber" placeholder="Phone Number" value="{{ $vendor->vendorPhoneNumber }}">
                        </div>
                    </div>
                        <div class="col-md-9">
                            <label for="vendorEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="vendorEmail" name="vendorEmail" placeholder="Email Address" value="{{ $vendor->vendorEmail }}">
                        </div>
                        <div class="col-md-12 mt-3  ">
                            <label for="vendorAddress" class="form-label">Address</label>
                            <textarea class="form-control" id="vendorAddress" name="vendorAddress" placeholder="Address">{{ $vendor->vendorAddress }}</textarea>
                        </div>
                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
