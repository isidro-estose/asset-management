<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        $menuItems = [
            [
                'label' => 'Dashboard',
                'icon' => 'bi bi-house',
                'route' => 'dashboard',
            ],
            [
                'label' => 'Employees',
                'icon' => 'bi bi-people',
                'route' => 'employee.index',
                'children' => [
                    ['label' => 'All Users', 'route' => 'employee.index'],
                ],
            ],
            [
                'label' => 'Devices',
                'icon' => 'bi bi-diagram-3-fill',
                'route' => 'items.main',//need to change using controller
                'children' => [
                    ['label' => 'All Devices', 'route' => 'item.main'],
                    ['label' => 'Vendors', 'route' => 'vendor.main'],
                ],
            ],
            [
                'label' => 'Reports',
                'icon' => 'bi bi-graph-up',
                'route' => 'users.index',
            ],
        ];
        $employees = Employee::all();
        return view('employees.index', compact('employees', 'menuItems'));
    }

    public function create()
    {
        return view('employees.create');    
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'empId' => 'required|integer',
            'empFname' => 'required|string|max:255',
            'empLname' => 'required|string|max:255',
            'empPosition' => 'required|string|max:255',
            'empDeptId' => 'required|integer',
            'empHireDate' => 'required|date_format:Y-m-d',
            'emp_status' => 'Employed',
        ]);

        $newEmployee = Employee::create($data);

        return redirect(route('employee.index'));
    }

    public function update(Request $request, Employee $employee)
    {
        $data = $request->validate([
            'empId' => 'required|integer',
            'empFname' => 'required|string|max:255',
            'empLname' => 'required|string|max:255',
            'empPosition' => 'required|string|max:255',
            'empDeptId' => 'required|integer',
            'empHireDate' => 'required|date_format:Y-m-d',
            'emp_status' => 'required|string|max:255',
        ]);

        $employee->update($data);

        return redirect(route('employee.index'))->with('success', 'Employee updated successfully.');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect(route('employee.index'))->with('success', 'Employee deleted successfully.');
    }
}
