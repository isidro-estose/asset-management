<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;

class VendorController extends Controller
{
    public function main()
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
                    ['label' => 'All Devices', 'route' => 'items.main'],
                    ['label' => 'Vendors', 'route' => 'vendors.main'],
                ],
            ],
            [
                'label' => 'Reports',
                'icon' => 'bi bi-graph-up',
                'route' => 'users.index',
            ],
        ];

        $vendors = Vendor::all();
        return view('vendors.main', compact('menuItems', 'vendors'));
    }
}
