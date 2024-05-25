<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Food;

class FoodController extends Controller
{
    public function index()
    {
            $title = '';
            if(request('category')){
                $category = Category::firstWhere('slug', request('category'));
                $title = ' dengan Kategori : ' . $category->name;
            }
            return view('foods', [
            "title" => "List Indonesian Food" . $title,
            "foods" => Food::latest()->filter(request(['search', 'category']))->get()
        ]);
    }

    public function show(Food $food)
    {
        return view ('food',[
            "title" => "Single Food ",
            "food" => $food
        ]);
    }
}
