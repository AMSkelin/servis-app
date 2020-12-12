<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('content')
<a href="{{ route('devices.create') }}" class="btn btn-primary mt-5">Add</a>
  <table class="table table-striped mt-3">
   <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
      </tr>
    </thead>
    <tbody>
      @foreach($devices->items() as $device)
          <tr>
              <td>{{ $device->id }}</td>
              <td>{{ $device->name }}</td>
              <td>
                <a class="btn btn-outline-primary" href="{{ route('devices.show', ['device' => $device->id]) }}">Details</a>
                <a class="btn btn-outline-primary" href="{{ route('devices.edit', ['device' => $device->id]) }}">Edit</a>
              </td>
          </tr>
      @endforeach
      </tr>
    </tbody>
  </table>

@endsection
