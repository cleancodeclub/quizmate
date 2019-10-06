@extends('layouts.app')

@section('content')
  <h1>Create a new question</h1>

<form method="POST" action="/questions">
  {{ csrf_field() }}
  
  <div class="form-group">
    <label for="question_text">Question</label>
    <textarea class="form-control" type="text" name="question_text" required value="{{ old('name') }}"></textarea>
  </div>

  <div class="form-group">
    <label for="answer_text">Answer</label>
    <textarea class="form-control" name="answer_text" required value="{{ old('description') }}"></textarea>
  </div>

  <div class="form-inline">
    <div class="form-group mr-4">
    <label class="mr-2" for="value">Value: </label>
    <select class="form-control" name="value" required>
      <option disabled="disabled" value="">---Select One---</option>
      <option value="100">100</option>
      <option value="200">200</option>
      <option value="300">300</option>
      <option value="400">400</option>
      <option value="500">500</option>
    </select>
  </div>

  <div class="form-group mx-6">
    <label class="mx-2" for="category_id">Category: </label>
    <select class="form-control" name="category_id">
      <option disabled="disabled" value="">---Select One---</option>
      @foreach ($categories as $category)
        <option value="{{ (int)$category->id }}">{{ $category->name }}</option>
      @endforeach
    </select>
  </div>

  <div class="form-group mx-4">
    <button class="btn btn-primary" type="submit">Create</button>
  </div>

  @include ('errors')

</form>
@endsection
