<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
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

        $categories = Category::all();
        return view('categories.main', compact('menuItems', 'categories'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'categoryName' => 'required|string|max:255',
            'categoryDescription' => 'nullable|string|max:255',
        ]);

        Category::create($data);
        return redirect()->route('category.main')->with('success', 'Category created successfully.');
    }
}
