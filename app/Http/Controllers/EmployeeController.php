<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
                    ['label' => 'Add User', 'route' => 'users.index'],
                ],
            ],
            [
                'label' => 'Inventory',
                'icon' => 'bi bi-diagram-3-fill',
                'route' => 'users.index',//need to change using controller
                'children' => [
                    ['label' => 'iOS', 'route' => 'users.index'],
                    ['label' => 'Windows', 'route' => 'users.index'],
                    ['label' => 'Linux', 'route' => 'users.index'],
                    ['label' => 'Phones', 'route' => 'users.index'],
                    ['label' => 'Printers', 'route' => 'users.index'],
                    ['label' => 'Monitors', 'route' => 'users.index'],
                    ['label' => 'Accessories', 'route' => 'users.index'],
                ],
            ],
            [
                'label' => 'Reports',
                'icon' => 'bi bi-graph-up',
                'route' => 'users.index',
            ],
        ];
        return view('employees.index', compact('menuItems'));
    }

    public function create()
    {
        return view('employees.create');
    }
}
