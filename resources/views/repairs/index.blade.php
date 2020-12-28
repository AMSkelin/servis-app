<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('content')
<a href="{{ route('repairs.create') }}" class="btn btn-primary mt-5">Add</a>
  <table class="table table-striped mt-3">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        
        
      </tr>
    </thead>
    <tbody>
      @foreach($repairs->items() as $repair)
          <tr>
              <td>{{ $repair->id }}</td>
              <td>{{ $repair->name }}</td>
              
              
              <td>
                <a class="btn btn-outline-primary" href="{{ route('repairs.show', ['repair' => $repair->id]) }}">Details</a>
                <a class="btn btn-outline-primary" href="{{ route('repairs.edit', ['repair' => $repair->id]) }}">Edit</a>
              </td>
          </tr>
      @endforeach
      </tr>
    </tbody>
  </table>

@endsection
