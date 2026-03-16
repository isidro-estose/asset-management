@extends('layouts.app')

@section('title', 'Employees')

@section('content')
    <div class="mb-1 row">
        <div class="col">
            <h1>Employees</h1>
        </div>
        <div class="col">
            <!-- Button to trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createEmployeeModal" style="float:right">Add</button>
            <!-- Button to trigger modal -->
            <div class="modal fade" id="employeeCreateModal" tabindex="-1">
            </div>
        </div>
    </div>
    <table class="table table-dark table-striped table-hover">
        <thead>
            <tr>
                <th>ID Number</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Position</th>
                <th>Department</th>
                <th>Date Hired</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
                <tr>
                    <td>{{ $employee->empId }}</td>
                    <td>{{ $employee->empFname }}</td>
                    <td>{{ $employee->empLname }}</td>
                    <td>{{ $employee->empPosition }}</td>
                    <td>{{ $employee->empDeptId }}</td>
                    <td>{{ $employee->empHireDate }}</td>
                    <td>
                        <button 
                            type="button"
                            class="btn btn-primary edtBtn"
                            data-id="{{ $employee->id }}"
                            data-empId="{{ $employee->empId }}"
                            data-empFname="{{ $employee->empFname }}"
                            data-empLname="{{ $employee->empLname }}"
                            data-empPosition="{{ $employee->empPosition }}"
                            data-empDept="{{ $employee->empDeptId }}"
                            data-empHireDate="{{ $employee->empHireDate }}"
                            data-bs-toggle="modal" 
                            data-bs-target="#editEmployeeModal">
                        Edit
                        </button>
                    </td>
                    <td>
                        <form action="{{ route('employee.destroy', $employee->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this employee?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
<script src="{{ asset('js/eventModal.js') }}"></script>