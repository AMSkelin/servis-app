@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">
    
    <form action="{{ route('device_types.update', ['device_type' => $device_type->id]) }}" method="POST">

        <!-- CSRF token -->
        @csrf
        @method('PUT')

        
      
       
        <!--  name -->
        <div class="form-group">
            <label for="name">Device type name</label>
            <input value="{{ $device_type->name }}" name="name" type="text" class="form-control" id="device_type">
            @if ($errors->has('device_type'))
                <span class="text-danger">{{ $errors->first('device_type') }}</span>
            @endif
        </div>

        

        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{ route('device_types.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection