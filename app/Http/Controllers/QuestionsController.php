<?php

namespace App\Http\Controllers;

use App\Question;
use App\Category;
use Illuminate\Support\Facades\Auth;

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

        Question::create($validatedData + [
            'submitted_by' => Auth::user()->name,
            'category_name' => Category::find($validatedData['category_id'])->name,
            'user_id' => Auth::id()
        ]);

        return redirect('/api/questions')->with('success', 'Question saved!');;
    }

    public function show($id)
    {
        return Question::findOrFail($id);
    }

    public function edit($id)
    {
        $question = Question::findOrFail($id);
        return view('question.edit', compact('question'));
        dd($question);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'question_text' => 'required', 'min:3', 'max:255',
            'answer_text' => 'required', 'min:3', 'max:255',
            'value' => 'required',
            'category_id' => 'required',
        ]);

        $question = Question::findOrFail($id);
        $question->question_text = $request->get('question_text');
        $question->answer_text = $request->get('answer_text');
        $question->value = $request->get('value');
        $question->category_id = $request->get('category_id');
        $question->updated_by = Auth::user()->name;
        $question->category_name = $request->get('cateogry_id')->name;
    }

    public function destroy($id)
    {
        $question = Question::findOrFail($id);
        $question->delete();

        return redirect('/admin')->with('success', 'Question deleted!');
    }
}
