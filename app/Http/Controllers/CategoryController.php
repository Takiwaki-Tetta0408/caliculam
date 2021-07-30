<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    //
    public function create(Category $category)
    {
        return view('Category.create')->with(['category' => $category]);
    }
}
