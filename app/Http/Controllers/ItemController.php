<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\item;
use App\Models\category;
use App\Models\vendor;

class ItemController extends Controller
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
                    ['label' => 'Categories', 'route' => 'category.main'], // Placeholder for categories route
                ],
            ],
            [
                'label' => 'Reports',
                'icon' => 'bi bi-graph-up',
                'route' => 'users.index',
            ],
        ];

        $items = Item::all();
        return view('items.main', compact('items', 'menuItems'));
    }

    public function create()
    {
        $categories = category::all();
        return view('item.create', compact('categories'));
    }
}
