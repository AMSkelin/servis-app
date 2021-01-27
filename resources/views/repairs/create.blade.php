@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">

    <form action="{{ route('repairs.store') }}" method="POST">

        <!-- CSRF token -->
        @csrf

    
        <!-- repair -->
        <div class="form-group">
            <label for="name">Repair</label>
            <input value="{{ @old('name') }}" name="name" type="text" class="form-control" id="name">
            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>

        <!-- bill-->
        <div class="form-group">
    <label for="bill"><b>Bill</b></label>
        <input type="bill" name="bill_id" value="{{ @old('bill_id') }}" class="form-control mb-5" id="bill_id">
        @if ($errors->has('bill_id'))
            <span class="text-danger">{{ $errors->first('bill_id') }}</span>
        @endif

         <!-- part -->
         <div class="form-group">
    <label for="part"><b>Part</b></label>
        <input type="part" name="part_id" value="{{ @old('part_id') }}" class="form-control mb-5" id="part_id">
        @if ($errors->has('part_id'))
            <span class="text-danger">{{ $errors->first('part_id') }}</span>
        @endif

         <!-- device -->
         <div class="form-group">
    <label for="device"><b>Device </b></label>
        <input type="device" name="device_id" value="{{ @old('device_id') }}" class="form-control mb-5" id="device_id">
        @if ($errors->has('device_id'))
            <span class="text-danger">{{ $errors->first('device_id') }}</span>
        @endif
        
        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{ route('repairs.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection