<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
    
    return view('categories', 
    [
        "title" => "categories",
        "categories" => Category::latest()->filter(request(['search']))->get()
    ]);
    }
}
