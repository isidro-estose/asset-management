<!-- resources/views/projects/create_modal.blade.php -->
<div class="modal fade" id="createEmployeeModal" tabindex="-1" aria-labelledby="createEmployeeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createEmployeeModalLabel">Add New Member</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Your form goes here -->
                <form action="{{ route('employee.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <input type="text" class="form-control" id="empId" name="empId" placeholder="ID Number">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="empFname" name="empFname" placeholder="First Name">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="empLname" name="empLname" placeholder="Last Name">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="empPositin" name="empPositin" placeholder="Designation">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="empDept" name="empDept" placeholder="Department">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="empDateHired" name="empDateHired" placeholder="empDateHired">
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>s