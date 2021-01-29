@extends('layouts.app')

@section('content')
  <div>
      <h3 class="mt-3">Supplier detail</h3>
      <ul class="list-unstyled">
          <li>Name: {{ $supplier->name }}</li>
          <li><a href="https://en.wikipedia.org/w/index.php?search={{ $supplier->name}}">Wikipedia link</a></li>
      </ul>
      
      <div class="btn-group" role="group">
    <a class="btn btn-secondary" href="{{ route('suppliers.index') }}">Back</a>

<a class="btn btn-primary" href="{{ route('suppliers.edit', ['supplier' => $supplier]) }}">Edit</a>

<form class="form-inline" action="{{ route('suppliers.destroy', ['supplier' => $supplier->id]) }}" method="POST">
    <!-- CSRF token -->
    @csrf
    @method('DELETE')
    <button type="submit" onclick="areYouSure(event)" class="btn btn-danger">Delete</button>
</form>
  </div>
@endsection
