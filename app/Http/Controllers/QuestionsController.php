<?php

namespace App\Http\Controllers;

use App\Question;
use App\Category;

use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    public function index()
    {
        return Question::all();
    }

    public function create()
    {
        $categories = Category::all();

        return view('questions.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'question_text' => 'required', 'min:3', 'max:255',
            'answer_text' => 'required', 'min:3', 'max:255',
            'value' => 'required',
            'category_id' => 'required',
        ]);

        Question::create($validatedData);

        return redirect('/api/questions');
    }

    public function show($id)
    {
        return Question::findOrFail($id);
    }

    public function edit(Question $question)
    {
        //
    }

    public function update(Request $request, Question $question)
    {
        //
    }

    public function destroy(Question $question)
    {
        //
    }
}
