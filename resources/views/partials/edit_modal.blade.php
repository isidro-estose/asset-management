<!-- resources/views/projects/edit_modal.blade.php -->
<div class="modal fade" id="editEmployeeModal" tabindex="-1" aria-labelledby="editEmployeeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editEmployeeModalLabel">Update Employee</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Your form goes here -->
                <form method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="empId" class="form-label">ID Number</label>
                        <input type="text" class="form-control w-25" id="empId" name="empId" placeholder="ID Number" value="{{ $employee->empId }}" readonly>
                    </div>
                    <div class="mb-3 row">
                        <div class="col">
                            <label for="empFname" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="empFname" name="empFname" placeholder="First Name" value="{{ $employee->empFname }}">
                        </div>
                        <div class="col">
                            <label for="empLname" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="empLname" name="empLname" placeholder="Last Name" value="{{ $employee->empLname }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-md-6">
                            <label for="empPosition" class="form-label">Designation</label>
                            <input type="text" class="form-control" id="empPosition" name="empPosition" placeholder="Designation" value="{{ $employee->empPosition }}">
                        </div>
                        <div class="col-md-6">
                            <label for="empDeptId" class="form-label">Department</label>
                            <input type="text" class="form-control" id="empDeptId" name="empDeptId" placeholder="Department" value="{{ $employee->empDeptId }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-md-6">
                            <label for="empHireDate" class="form-label">Hire Date</label>
                            <input class="form-control w-50" data-provide="datepicker" data-date-format="yyyy-mm-dd" id="empHireDate" type="date" name="empHireDate" value="{{ $employee->empHireDate }}"/>
                        </div>
                        <div class="col-md-6">
                            <label for="emp_status" class="form-label">Employee Status</label>
                            <select class="form-control w-50" id="emp_status" name="emp_status">
                                <option value="Employed" {{ $employee->emp_status == 'Employed' ? 'selected' : '' }}>Employed</option>
                                <option value="Resigned" {{ $employee->emp_status == 'Resigned' ? 'selected' : '' }}>Resigned</option>
                                <option value="Terminated" {{ $employee->emp_status == 'Terminated' ? 'selected' : '' }}>Terminated</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
