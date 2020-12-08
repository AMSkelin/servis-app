<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('content')
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">First name</th>
        <th scope="col">Last name</th>
        <th scope="col">email</th>
      </tr>
    </thead>
    <tbody>
      @foreach($users->items() as $user)
          <tr>
              <td>{{ $user->id }}</td>
              <td>{{ $user->first_name }}</td>
              <td>{{ $user->last_name }}</td>
          </tr>
      @endforeach
      </tr>
    </tbody>
  </table>

@endsection
