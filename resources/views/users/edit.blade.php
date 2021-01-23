@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">

    <form action="{{ route('users.update', ['user' => $user->id]) }}" method="POST">

        <!-- CSRF token -->
        @csrf
        @method('PUT')

        <!-- user first name -->
        <div class="form-group">
            <label for="name">First Name</label>
            <input value="{{ $user->first_name }}" name="first_name" type="text" class="form-control" id="first_name">
            @if ($errors->has('first_name'))
                <span class="text-danger">{{ $errors->first('first_name') }}</span>
            @endif
        </div>


         <!-- user last name -->
         <div class="form-group">
            <label for="name">Last Name</label>
            <input value="{{ $user->last_name }}" name="last_name" type="text" class="form-control" id="last_name">
            @if ($errors->has('last_name'))
                <span class="text-danger">{{ $errors->first('last_name') }}</span>
            @endif
        </div>


        <!-- email -->
        <div class="form-group">
            <label for="email">Email</label>
            <input value="{{ $user->email }}" name="email" type="text" class="form-control" id="email">
            @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
        </div>

        <!-- country -->
        <div class="form-group">
            <label for="country">Country</label>
            {{ Form::select('country_id', $countries, $user->country_id, ['class' => 'form-control', 'id' => 'country']) }}
        </div>


        <div class="mt-4">
            <button type="submit" class="btn btn-outline-dark float-right">Save</button>
            <a href="{{ route('users.index') }}" class="btn btn-link">Cancel</a>
        </div>
    </form>
</div>
@endsection