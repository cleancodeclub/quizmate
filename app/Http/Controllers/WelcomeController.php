<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class WelcomeController extends Controller
{
    public function index()
    {
        $question = Question::all()->random();

        return view('welcome', compact('question'));
    }
}
