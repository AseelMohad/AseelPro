<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('dashboard', compact('categories'));
    }
    public function showDetails($id)
    {
    // Logic to retrieve category details based on $id
    $category = Category::find($id);

    // Pass the category details to the view
    return view('category_details', ['category' => $category]);
    }

}
