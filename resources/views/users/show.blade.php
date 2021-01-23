<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('content')
<!-- <div>
<h3>User Detail</h3>
<ul class="list-unstyled">
<li>First name {{ $user->first_name }}</li>
<li>Last name {{ $user->last_name }}</li>
<li>Email {{ $user->email }}</li>
<li>Country {{ $user->country->name }}</li>
</ul>

<a href="{{ url()->previous() }}" class="btn btn-outline-dark">Back</a>
</div> -->

<div class="mt-5">
    <h1 class="text-center">{{ $user->name }}</h1>
    <img src="https://picsum.photos/300" alt="profile image" class="d-block mx-auto rounded-circle">

    <div class="mt-5">
    <div class="btn-group mt-5" role="group">
    <a class="btn btn-secondary" href="{{ route('users.index') }}">Back</a>

    <a class="btn btn-primary" href="{{ route('users.edit', ['user' => $user]) }}">Edit</a>
    

    @csrf
        @method('DELETE')
         <button type="submit" onclick="confirm('Are you sure?')" class="btn btn-danger">Deactivate</button>
    </form>
    
   
@endsection