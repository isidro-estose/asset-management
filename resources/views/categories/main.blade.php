@extends('layouts.app')

@section('title', 'Categories')

@section('content')
    <div class="mb-1 row">
        <div class="col">
            <h3>Categories</h3>
        </div>
        <div class="col">
            <!-- Button to trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createCategoryModal" style="float:right">Add</button>
            <!-- Button to trigger modal -->
            <div class="modal fade" id="createCategoryModal" tabindex="-1">
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-dark table-striped table-bordered">
            <thead>
                <tr>
                    <th>Category Name</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->categoryName }}</td>
                        <td>{{ $category->categoryDescription }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection