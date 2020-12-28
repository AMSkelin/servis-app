<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('content')
<a href="{{ route('countries.create') }}" class="btn btn-primary mt-5">Add</a>
  <table class="table table-striped mt-3">
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
              
              <td>
                <a class="btn btn-outline-primary" href="{{ route('device_models.show', ['device_model' => $device_model->id]) }}">Details</a>
                <a class="btn btn-outline-primary" href="{{ route('device_models.edit', ['device_model' => $device_model->id]) }}">Edit</a>
              </td>
         </tr>
      @endforeach
      </tr>
    </tbody>
  </table>

@endsection
