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
                'route' => 'items.main',
                'children' => [
                    ['label' => 'All Devices', 'route' => 'item.main'],
                    ['label' => 'Vendors', 'route' => 'vendor.main'],
                    ['label' => 'Categories', 'route' => 'category.main'],
                ],
            ],
            [
                'label' => 'Reports',
                'icon' => 'bi bi-graph-up',
                'route' => 'users.index',
            ],
        ];

        $vendors = Vendor::all();
        return view('vendors.main', compact('vendors', 'menuItems'));
    }

    public function create()
    {
        return view('vendors.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'vendorName' => 'required|string|max:255',
            'vendorContactPerson' => 'required|string|max:255',
            'vendorPhoneNumber' => 'required|string|max:20',
            'vendorEmail' => 'required|email|max:255',
            'vendorAddress' => 'required|string|max:255',
        ]);

        Vendor::create($data);

        return redirect()->route('vendor.main')->with('success', 'Vendor created successfully.');
    }

    public function update(Request $request, Vendor $vendor)
    {
        $vendorData = $request->validate([
            'vendorName' => 'required|string|max:255',
            'vendorContactPerson' => 'required|string|max:255',
            'vendorPhoneNumber' => 'required|string|max:20',
            'vendorEmail' => 'required|email|max:255',
            'vendorAddress' => 'required|string|max:255',
        ]);

        $vendor->update($vendorData);

        return redirect(route('vendor.main'))->with('success', 'Vendor updated successfully.');
    }
}
