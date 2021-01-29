@extends('layouts.app')

@section('content')
  <div>
      <h3 class="mt-3">Device detail</h3>
      <ul class="list-unstyled">
          <li>Name: {{ $device->name }}</li>
          <li><a href="https://en.wikipedia.org/w/index.php?search={{ $device->name}}">Wikipedia link</a></li>
      </ul>
      
      <div class="btn-group" role="group">
    <a class="btn btn-secondary" href="{{ route('devices.index') }}">Back</a>

<a class="btn btn-primary" href="{{ route('devices.edit', ['device' => $device]) }}">Edit</a>

<form class="form-inline" action="{{ route('devices.destroy', ['device' => $device->id]) }}" method="POST">
    <!-- CSRF token -->
    @csrf
    @method('DELETE')
    <button type="submit" onclick="areYouSure(event)" class="btn btn-danger">Delete</button>
</form>
  </div>
@endsection
