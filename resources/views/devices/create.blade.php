@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">

    <form action="{{ route('devices.store') }}" method="POST">

        <!-- CSRF token -->
        @csrf

    
        <!-- devices -->
        <div class="form-group">
            <label for="name">Device</label>
            <input value="{{ @old('name') }}" name="name" type="text" class="form-control" id="name">
            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>

        <!-- user-->
        <div class="form-group">
    <label for="user"><b>User</b></label>
        <input type="user" name="user_id" value="{{ @old('user_id') }}" class="form-control mb-5" id="user_id">
        @if ($errors->has('user_id'))
            <span class="text-danger">{{ $errors->first('user_id') }}</span>
        @endif

         <!-- device model -->
         <div class="form-group">
    <label for="device_model"><b>Device model</b></label>
        <input type="device_model" name="device_model_id" value="{{ @old('device_model_id') }}" class="form-control mb-5" id="device_model_id">
        @if ($errors->has('device_model_id'))
            <span class="text-danger">{{ $errors->first('device_model_id') }}</span>
        @endif
        
        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{ route('devices.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection