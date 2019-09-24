@extends('layouts.app')

@section('content')
  <h1>Create a new category</h1>

<form method="POST" action="/categories">
  {{ csrf_field() }}
  
  <div class="form-group">
    <label for="name">Name</label>
    <input class="form-control" type="text" name="name" required value="{{ old('name') }}">
  </div>

  <div class="form-group">
      <label for="name">Description</label>
    <textarea class="form-control" name="description" required value="{{ old('description') }}"></textarea>
  </div>

  <div>
    <button class="btn btn-primary" type="submit">Create</button>
  </div>

  @include ('errors')

</form>
@endsection
