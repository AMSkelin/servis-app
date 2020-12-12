@extends('layouts.app')

@section('content')
  <div>
      <h3 class="mt-3">Device type detail</h3>
      <ul class="list-unstyled">
          <li>Name: {{ $device_type->name }}</li>
          <li><a href="https://en.wikipedia.org/w/index.php?search={{ $device_type->name}}">Wikipedia link</a></li>
      </ul>
      
      <a href="{{ url()->previous() }}" class="btn btn-outline-primary">Back</a>
  </div>
@endsection
