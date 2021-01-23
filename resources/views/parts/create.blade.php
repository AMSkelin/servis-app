@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">

    <form action="{{ route('parts.store') }}" method="POST">

        <!-- CSRF token -->
        @csrf

        <!-- parts -->
        <div class="form-group">
            <label for="part">Part</label>
            <input value="{{ @old('part') }}" name="part" type="text" class="form-control" id="part">
            @if ($errors->has('part'))
                <span class="text-danger">{{ $errors->first('part') }}</span>
            @endif
        </div>

      
        <!-- supplier -->
        <div class="form-group">
    <label for="supplier"><b>Supplier</b></label>
        <input type="supplier" name="supplier_id" value="{{ @old('supplier_id') }}" class="form-control mb-5" id="supplier_id">
        @if ($errors->has('supplier_id'))
            <span class="text-danger">{{ $errors->first('supplier_id') }}</span>
        @endif



        <button type="submit" class="btn btn-outline-dark">Save</button>
        <a href="{{ route('parts.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection