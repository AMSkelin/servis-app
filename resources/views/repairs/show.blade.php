@extends('layouts.app')

@section('content')
  <div>
      <h3 class="mt-3">Repair detail</h3>
      <ul class="list-unstyled">
          <li>Name: {{ $repair->name }}</li>
          <li><a href="https://en.wikipedia.org/w/index.php?search={{ $repair->name}}">Wikipedia link</a></li>
      </ul>
      
      <div class="btn-group" role="group">
    <a class="btn btn-secondary" href="{{ route('repairs.index') }}">Back</a>

<a class="btn btn-primary" href="{{ route('repairs.edit', ['repair' => $repair]) }}">Edit</a>

<form class="form-inline" action="{{ route('repairs.destroy', ['repair' => $repair->id]) }}" method="POST">
    <!-- CSRF token -->
    @csrf
    @method('DELETE')
    <button type="submit" onclick="areYouSure(event)" class="btn btn-danger">Delete</button>
</form>
  </div>
@endsection
