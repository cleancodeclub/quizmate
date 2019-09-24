@extends('layouts.app')

@section('content')
  <h1>Create a new category</h1>

<form method="POST" action="/categories">
  {{ csrf_field() }}
  
  <div>
    <input type="text" name="name" placeholder="Category title" required value="{{ old('name') }}">
  </div>

  <div>
    <textarea name="description" placeholder="Category description" required value="{{ old('description') }}"></textarea>
  </div>

  <div>
    <button type="submit">Create</button>
  </div>

  @include ('errors')

</form>
@endsection
