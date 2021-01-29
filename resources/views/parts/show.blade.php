@extends('layouts.app')

@section('content')
  <div>
      <h3 class="mt-3">Part detail</h3>
      <ul class="list-unstyled">
          <li>Name: {{ $part->name }}</li>
          <li><a href="https://en.wikipedia.org/w/index.php?search={{ $part->name}}">Wikipedia link</a></li>
      </ul>
      
      <div class="btn-group" role="group">
    <a class="btn btn-secondary" href="{{ route('parts.index') }}">Back</a>

<a class="btn btn-primary" href="{{ route('parts.edit', ['part' => $part]) }}">Edit</a>

<form class="form-inline" action="{{ route('parts.destroy', ['part' => $part->id]) }}" method="POST">
    <!-- CSRF token -->
    @csrf
    @method('DELETE')
    <button type="submit" onclick="areYouSure(event)" class="btn btn-danger">Delete</button>
</form>
  </div>
@endsection
