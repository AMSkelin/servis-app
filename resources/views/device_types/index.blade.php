<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('content')
  <table class="table table-striped mt-3">
  <a href="{{ route('device_types.create') }}" class="btn btn-primary mt-5">Add</a>
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
     </tr>
    </thead>
    <tbody>
      @foreach($device_types->items() as $device_type)
          <tr>
              <td>{{ $device_type->id }}</td>
              <td>{{ $device_type->name }}</td>
              <td>
                <a class="btn btn-outline-primary" href="{{ route('device_types.show', ['device_type' => $device_type->id]) }}">Details</a>
                <a class="btn btn-outline-primary" href="{{ route('device_types.edit', ['device_type' => $device_type->id]) }}">Edit</a>
              </td>
         </tr>
      @endforeach
      </tr>
    </tbody>
  </table>

@endsection
