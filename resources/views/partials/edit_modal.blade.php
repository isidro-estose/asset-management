<!-- resources/views/projects/edit_modal.blade.php -->
@foreach ($employees as $employee)
<div class="modal fade" id="editEmployeeModal{{ $employee->id }}" tabindex="-1" aria-labelledby="editEmployeeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editEmployeeModalLabel">Update Employee</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Your form goes here -->
                <form method="POST" action="{{ route('employee.update', $employee->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <input type="text" class="form-control w-25" id="empId" name="empId" placeholder="ID Number" value="{{ $employee->empId }}" readonly>
                    </div>
                    <div class="mb-3 row">
                        <div class="col">
                            <input type="text" class="form-control" id="empFname" name="empFname" placeholder="First Name" value="{{ $employee->empFname }}">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="empLname" name="empLname" placeholder="Last Name" value="{{ $employee->empLname }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-md-6">
                           <input type="text" class="form-control" id="empPosition" name="empPosition" placeholder="Designation" value="{{ $employee->empPosition }}">
                        </div>
                        <div class="col-md-6">
                           <input type="text" class="form-control" id="empDeptId" name="empDeptId" placeholder="Department" value="{{ $employee->empDeptId }}">
                        </div>
                    </div>
                    <div class="mb-3 form-group">
                        <input class="form-control w-50" data-provide="datepicker" data-date-format="yyyy-mm-dd" id="empHireDate" type="date" name="empHireDate" value="{{ $employee->empHireDate }}"/>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach