@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">
    
    <form action="{{ route('device_models.update', ['device_model' => $device_model->id]) }}" method="POST">

        <!-- CSRF token -->
        @csrf
        @method('PUT')

        <!--  name -->
        <div class="form-group">
            <label for="name">Device type name</label>
            <input value="{{ $device_model->name }}" name="name" type="text" class="form-control" id="device_model">
            @if ($errors->has('device_model'))
                <span class="text-danger">{{ $errors->first('device_model') }}</span>
            @endif
        </div>

        

        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{ route('device_models.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection