<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use App\Models\Task;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('dashboard', compact('categories'));
    }
    public function showDetails($id)
    {
        //retrieve category and task details 
        $category = Category::findOrFail($id);
        
        $tasks = Task::where('category_id', $id)->get();

        // Pass the category details to the view
        return view('category_details', [
        'category' => $category,
       
        'tasks'=> $tasks
                                    ]);

    }

}
