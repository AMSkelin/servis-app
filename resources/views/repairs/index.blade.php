<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('content')
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Note</th>
      </tr>
    </thead>
    <tbody>
      @foreach($repairs->items() as $repair)
          <tr>
              <td>{{ $repair->id }}</td>
              <td>{{ $repair->name }}</td>
              <td>{{ $repair->note }}</td>
          </tr>
      @endforeach
      </tr>
    </tbody>
  </table>

@endsection
