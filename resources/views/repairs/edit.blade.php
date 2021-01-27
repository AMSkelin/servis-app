@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">
    
    <form action="{{ route('repairs.update', ['repair' => $repair->id]) }}" method="POST">

        <!-- CSRF token -->
        @csrf
        @method('PUT')

        <!--  name -->
        <div class="form-group">
            <label for="name"> name</label>
            <input value="{{ $repair->name }}" name="name" type="text" class="form-control" id="repair">
            @if ($errors->has('repair'))
                <span class="text-danger">{{ $errors->first('repair') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="bill">Bill</label>
            {{ Form::select('bill_id', $bills, $repair->bill_id, ['class' => 'form-control', 'id' => 'bill']) }}
        </div>

        <div class="form-group">
            <label for="part">Part</label>
            {{ Form::select('part_id', $parts, $repair->part_id, ['class' => 'form-control', 'id' => 'part']) }}
        </div>

        <div class="form-group">
            <label for="device">Device</label>
            {{ Form::select('device_id', $devices, $repair->device_id, ['class' => 'form-control', 'id' => 'device']) }}
        </div>
     

        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{ route('devices.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection