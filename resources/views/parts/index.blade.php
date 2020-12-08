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
      @foreach($parts->items() as $part)
          <tr>
              <td>{{ $part->id }}</td>
              <td>{{ $part->name }}</td>
          </tr>
      @endforeach
      </tr>
    </tbody>
  </table>

@endsection
