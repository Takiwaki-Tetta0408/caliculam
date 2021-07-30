<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
use App\Category;

class TodoController extends Controller
{
    public function index(Category $category,Todo $todo)
    {
        return view('index')->with(['todos' => $todo->get(),'category' => $category]);
    }
    
    public function create(Category $category)
    {
        return view('Todo.create')->with(['category' => $category]);
    }
    
    public function show(Category $category,Todo $todo)
    {
        return view('show')->with(['todo' => $todo]);
    }
    
    public function destroy(Category $category,Todo $todo)
    {
        $todo->delete();
        return redirect('/categories/1');
    }
    public function store(Category $category,Todo $todo,Request $request)
    {
        $input = $request['todo'];
        $input["checked"]=0;
        $input["category_id"]=$category->id;
        $todo->fill($input)->save();
        return redirect('/categories/'. $category->id . '/todos/' . $todo->id);
    }
}
