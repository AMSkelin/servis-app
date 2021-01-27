user@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">

    <form action="{{ route('devices.store') }}" method="POST">

        <!-- CSRF token -->
        @csrf

        <!-- repairs -->
        <div class="form-group">
            <label for="device">Device</label>
            <input value="{{ @old('part') }}" name="part" type="text" class="form-control" id="part">
            @if ($errors->has('part'))
                <span class="text-danger">{{ $errors->first('part') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="user">User</label>
            {{ Form::select('user_id', $users, $device->user_id, ['class' => 'form-control', 'id' => 'user']) }}
        </div>

        <div class="form_group">
            <label for="device_model">Device_model</label>
            {{ Form::select('device_model_id', $device_models, $device->device_model_id, ['class' => 'form-control', 'id' => 'device_model']) }}
        </div>

        
        <button type="submit" class="btn btn-outline-dark">Save</button>
        <a href="{{ route('parts.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection