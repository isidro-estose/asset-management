@extends('layouts.app')

@section('title', 'Employees')

@section('content')
    <h1>Employees</h1>
        <!-- Button to trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createEmployeeModal" style="float:right">Add</button>
        <!-- Button to trigger modal -->
    <div class="modal fade" id="employeeCreateModal" tabindex="-1">
    </div>

    <table class="table table-dark table-striped table-hover">
        <thead>
            <tr>
                <th>ID Number</th>
                <th>Sur Name</th>
                <th>First Name</th>
                <th>Position</th>
                <th>Department</th>
                <th>Date Hired</th>
            </tr>
        </thead>
    </table>
@endsection