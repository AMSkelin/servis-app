<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('content')
<div>
<h3>User Detail</h3>
<ul class="list-unstyled">
<li>First name {{ $user->first_name }}</li>
<li>Last name {{ $user->last_name }}</li>
<li>Email {{ $user->email }}</li>
<li>Country {{ $user->country->name }}</li>
</ul>

<a href="{{ url()->previous() }}" class="btn btn-outline-dark">Back</a>
</div>
@endsection