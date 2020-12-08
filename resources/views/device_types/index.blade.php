<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('content')
  <table class="table table-striped">
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
         </tr>
      @endforeach
      </tr>
    </tbody>
  </table>

@endsection
