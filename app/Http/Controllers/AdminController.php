<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Category;
use App\User;

class AdminController extends Controller
{
    public function index()
    {
        $questions = Question::all();
        $categories = Category::all();
        $users = User::all();

        return view('admin.index', compact('questions', 'categories', 'users'));
    }
}
