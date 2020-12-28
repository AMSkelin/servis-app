<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('content')
<a href="{{ route('parts.create') }}" class="btn btn-primary mt-5">Add</a>
  <table class="table table-striped mt-3">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Supplier</th>
      </tr>
    </thead>
    <tbody>
      @foreach($parts->items() as $part)
          <tr>
              <td>{{ $part->id }}</td>
              <td>{{ $part->name }}</td>
              <td>{{ $part->supplier->name }}</td>
              <td>
                <a class="btn btn-outline-primary" href="{{ route('parts.show', ['part' => $part->id]) }}">Details</a>
                <a class="btn btn-outline-primary" href="{{ route('parts.edit', ['part' => $part->id]) }}">Edit</a>
              </td>
          </tr>
      @endforeach
      </tr>
    </tbody>
  </table>

@endsection
