<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')



@section('content')
<a href="{{ route('users.create') }}" class="btn btn-outline-dark mt-5">Add</a>
<div class="container">

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name / Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Country</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users->items() as $user)
    <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->first_name }}<br />{{ $user->last_name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->country->name }}</td>
        <td>
          <a class="btn btn-outline-dark" href="{{ route('users.show' , ['user' => $user->id]) }}" role="button">Details</a>
          <a class="btn btn-outline-dark" href="{{ route('users.edit' , ['user' => $user->id]) }}" role="button">Edit</a>
        </td>
    @endforeach 

  </tbody>
</table>
@endsection