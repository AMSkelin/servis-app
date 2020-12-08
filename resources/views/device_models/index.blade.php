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
      @foreach($device_models->items() as $device_model)
          <tr>
              <td>{{ $device_model->id }}</td>
              <td>{{ $device_model->name }}</td>
         </tr>
      @endforeach
      </tr>
    </tbody>
  </table>

@endsection
