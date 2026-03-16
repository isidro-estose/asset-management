<!-- resources/views/projects/create_modal.blade.php -->
<div class="modal fade" id="createEmployeeModal" tabindex="-1" aria-labelledby="createEmployeeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createEmployeeModalLabel">Add New Employee</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Your form goes here -->
                <form method="POST" action="{{ route('employee.store') }}">
                    @csrf
                    @method('POST')
                    <div class="mb-3">
                        <label for="empId" class="form-label">Employee Number</label>
                        <input type="text" class="form-control w-25" id="empId" name="empId">
                    </div>
                    <div class="mb-3 row">
                        <div class="col">
                            <label for="empFname" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="empFname" name="empFname">
                        </div>
                        <div class="col">
                            <label for="empLname" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="empLname" name="empLname">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-md-6">
                           <label for="empPosition" class="form-label">Designation</label>
                           <input type="text" class="form-control" id="empPosition" name="empPosition">
                        </div>
                        <div class="col-md-6">
                           <label for="empDeptId" class="form-label">Department</label>
                           <input type="text" class="form-control" id="empDeptId" name="empDeptId">
                        </div>
                    </div>
                    <div class="mb-3 form-group">
                        <label for="empHireDate" class="form-label">Date Hired</label>
                        <input class="form-control w-50" data-provide="datepicker" data-date-format="yyyy-mm-dd" id="empHireDate" type="date" name="empHireDate"/>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>s