@extends('layouts.app')

@section('content')
  <div>
      <h3 class="mt-3">Device model detail</h3>
      <ul class="list-unstyled">
          <li>Name: {{ $device_model->name }}</li>
          <li><a href="https://en.wikipedia.org/w/index.php?search={{ $device_model->name}}">Wikipedia link</a></li>
      </ul>
      
      <div class="btn-group" role="group">
    <a class="btn btn-secondary" href="{{ route('device_models.index') }}">Back</a>

<a class="btn btn-primary" href="{{ route('device_models.edit', ['device_model' => $device_model]) }}">Edit</a>

<form class="form-inline" action="{{ route('device_models.destroy', ['device_model' => $device_model->id]) }}" method="POST">
    <!-- CSRF token -->
    @csrf
    @method('DELETE')
    <button type="submit" onclick="areYouSure(event)" class="btn btn-danger">Delete</button>
</form>
  </div>
@endsection
