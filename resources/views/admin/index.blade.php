@extends('layouts.app')
@section('content')
<div class="container">
    <h1>admin section</h1>
    <h3>Questions</h3>
    <table class="table table-dark">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Question</th>
          <th scope="col">Answer</th>
          <th scope="col">Category</th>
          <th scope="col">Value</th>
          <th scope="col">Submitter</th>
          <th scope="col"></th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($questions as $question)
          <tr>
            <th scope="row">{{ $question->id }}</th>
            <td>{{ $question->question_text }}</td>
            <td>{{ $question->answer_text }}</td>
            <td>{{ $question->category_name }}</td>
            <td>{{ $question->value }}</td>
            <td>{{ $question->submitted_by }}</td>
            <td><a href="question/{{ $question->id }}/edit"></a><button class="btn btn-warning">Edit</button></a></td>
            <td>
              <form 
                onsubmit="return confirm('Do you really want to delete this record?');"
                action="/question/{{ $question->id }}" 
                method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Delete</button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
</div>
@endsection
