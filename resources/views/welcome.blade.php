@extends('layouts.app')
@section('content')
<div class="jumbotron pt-3 px-5 pb-0 d-flex justify-content-between bg-transparent">
    <div class="container row">
        <div class="offset-md-2 col-md-3 d-none d-sm-block">
            <img class="img-fluid" src="https://svgsilh.com/svg/3409194.svg" alt="quiz">
        </div>
        <div class="col-md-7 col-sm-12 col-xs-12">
            <h1 class="text-center">Quizmate</h1>
            <h3>The REST and GraphQL API for all of your quiz question needs! A community based API, an ever-evolving product growing with you, the user!</h3>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-5 col-xs-12 order-xs-12">
            <h1 class="text-xs-center">API Usage</h1>
            <h4>Questions</h4>
            <p class="ml-4">★  Url: <kbd>/api/questions</kbd></p>
            <p class="ml-4">★  Options <small>All options are optional:</small></p>
            <p class="ml-4 pl-4">&bull; <kbd>value</kbd>(int): All questions with the requested value. </p>
            <p class="ml-4 pl-4">&bull; <kbd>category</kbd>(string): All questions in the requested category. </p>
            <h4>Categories</h4>
            <p class="ml-4">- Url: <kbd>/api/categories</kbd></p>
        </div>

        <div class="offset-md-1 col-md-6 col-xs-12 order-xs-1">
            <div class="card">
                <div class="card-header text-center">
                    <h2>Random Question</h2>
                </div>
                <div class="card-body">
                    <p class="card-text"><strong>Question:</strong> {{ $question->question_text }} <p>
                    <hr>
                    <p class="card-text"><strong>Answer:</strong> {{ $question->answer_text }} <p>
                    <hr>
                    <p class="card-text mb"><strong>Value:</strong> {{ $question->value }} <p>
                    <hr>
                    <p class="card-text mb"><strong>Submitted By:</strong> {{ $question->submitted_by }} <p>
                </div>
                <div class="card-footer">
                    <p class="text-center"> Raw Query </p> 
                    <p class="text-muted"> {{ $question }} </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
