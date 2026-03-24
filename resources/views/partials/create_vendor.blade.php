<!-- resources/views/projects/create_vendor.blade.php -->
<div class="modal fade" id="createVendorModal" tabindex="-1" aria-labelledby="createVendorModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createVendorModalLabel">Add New Vendor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Your form goes here -->
                <form method="POST" action="{{ route('vendor.store') }}">
                    @csrf
                    @method('POST')
                    <div class="mb-3">
                        <label for="vendorName" class="form-label">Supplier Name</label>
                        <input type="text" class="form-control" id="vendorName" name="vendorName">
                    </div>
                    <div class="mb-3 row">
                        <div class="col">
                            <label for="vendorContactPerson" class="form-label">Contact Person</label>
                            <input type="text" class="form-control" id="vendorContactPerson" name="vendorContactPerson">
                        </div>
                        <div class="col">
                            <label for="vendorPhoneNumber" class="form-label">Contact Number</label>
                            <input type="text" class="form-control" id="vendorPhoneNumber" name="vendorPhoneNumber">
                        </div>
                    </div>
                    <div class="col-md-9">
                        <label for="vendorEmail" class="form-label">Email Address</label>
                        <input type="text" class="form-control" id="vendorEmail" name="vendorEmail">
                    </div>
                    <div class="col-md-12">
                        <label for="vendorAddress" class="form-label">Store Location</label>
                        <input type="text" class="form-control" id="vendorAddress" name="vendorAddress">
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>s