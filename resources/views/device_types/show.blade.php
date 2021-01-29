@extends('layouts.app')

@section('content')
  <div>
      <h3 class="mt-3">Device type detail</h3>
      <ul class="list-unstyled">
          <li>Name: {{ $device_type->name }}</li>
          <li><a href="https://en.wikipedia.org/w/index.php?search={{ $device_type->name}}">Wikipedia link</a></li>
      </ul>
      
      <div class="btn-group" role="group">
    <a class="btn btn-secondary" href="{{ route('device_types.index') }}">Back</a>

<a class="btn btn-primary" href="{{ route('device_types.edit', ['device_type' => $device_type]) }}">Edit</a>

<form class="form-inline" action="{{ route('device_types.destroy', ['device_type' => $device_type->id]) }}" method="POST">
    <!-- CSRF token -->
    @csrf
    @method('DELETE')
    <button type="submit" onclick="areYouSure(event)" class="btn btn-danger">Delete</button>
</form>
  </div>
@endsection
