<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return $categories;
    }

    public function show($id)
    {
        return Category::findOrFail($id);
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->valudate([
            'name' => 'required', 'min:3', 'max:30',
            'description' => 'min:5', 'max:255'
        ]);

        Category::create($validatedData);

        return redirect('/api/categories');
    }
}
