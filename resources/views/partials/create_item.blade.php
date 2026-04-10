<!-- resources/views/partials/create_item.blade.php -->
<div class="modal fade" id="createItemModal" tabindex="-1" aria-labelledby="createItemModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createItemModalLabel">Add New Item</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Your form goes here -->
                <form method="POST" action="">
                    @csrf
                    @method('POST')
                    <div class="mb-3 row">
                        <div class="col">
                            <label for="assetCode" class="form-label">Asset Code</label>
                            <input type="text" class="form-control w-50" id="assetCode" name="assetCode">
                        </div>
                        <div class="col">
                            <label for="assetSerialNumber" class="form-label">Serial #</label>
                            <input type="text" class="form-control" id="assetSerialNumber" name="assetSerialNumber">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col">
                            <label for="assetBrand" class="form-label">Brand/Made</label>
                            <input type="text" class="form-control" id="assetBrand" name="assetBrand">
                        </div>
                        <div class="col">
                            <label for="assetModel" class="form-label">Model Type</label>
                            <input type="text" class="form-control" id="assetModel" name="assetModel">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col">
                            <label for="assetDescription" class="form-label">Description</label>
                            <select name="assetCategory" id="assetCategory" class="form-control">
                                <option value="">Select Category</option>
                                @foreach($getcategory as $id =>$categoryName)
                                    <option value="{{ $id }}">{{ $categoryName }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col">
                            <label for="assetLocation" class="form-label">Location</label>
                            <input type="text" class="form-control" id="assetLocation" name="assetLocation">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>