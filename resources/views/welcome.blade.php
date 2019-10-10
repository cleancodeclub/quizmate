@extends('layouts.app')
@section('content')
<div class="jumbotron pt-3 px-5 pb-0 d-flex justify-content-between">
    <div class="w-25">
        <img class="img-fluid mx-5" src="https://svgsilh.com/svg/3409194.svg" alt="quiz">
    </div>
    <div class="w-50 mx-5 px-5">
        <h1 class="text-center pt-2">Quizmate</h1>
        <h3>The REST and GraphQL API for all of your quiz question needs!</h3>
    </div>
</div>
<div class="container">
    
    <div class="d-flex justify-content-between">
        
        <div class="w-100">
            <h1>API Usage</h1>
            <h4>Questions</h4>
            <p class="ml-4">★  Url: <kbd>/api/questions</kbd></p>
            <p class="ml-4">★  Options <small>All options are optional:</small></p>
            <p class="ml-4 pl-4">&bull; <kbd>value</kbd>(int): All questions with the requested value. </p>
            <p class="ml-4 pl-4">&bull; <kbd>category</kbd>(string): All questions in the requested category. </p>
            <h4>Categories</h4>
            <p class="ml-4">- Url: <kbd>/api/categories</kbd></p>
        </div>

        <div class="w-75 ml-5">
            <div class="card text-center w-75 pb-2">
                <div class="card-header">
                    <h2>Random Question</h2>
                </div>
                <div class="card-body">
                    <p class="card-text">Question: {{ $question->question_text }} <p>
                    <hr>
                    <p class="card-text">Answer: {{ $question->answer_text }} <p>
                    <hr>
                    <p class="card-text mb">Value: {{ $question->value }} <p>
                    <hr>
                    <p class="card-text mb">Submitted By: {{ $question->submitted_by }} <p>
                </div>
                <div class="card-footer text-muted">
                    <p> Raw Query: </p> 
                    <p> {{ $question }} </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
