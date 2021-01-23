@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">

    <form action="{{ route('parts.update', ['part' => $part->id]) }}" method="POST">

        <!-- CSRF token -->
        @csrf
        @method('PUT')

       

        <!-- description -->
        <div class="form-group">
            <label for="name">Name</label>
            <input value="{{ $part->name }}" name="name" type="text" class="form-control" id="name">
            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>

        <!-- supplier -->
        <div class="form-group">
            <label for="supplier">Supplier</label>
            {{ Form::select('supplier_id', $suppliers, $part->supplier_id, ['class' => 'form-control', 'id' => 'supplier']) }}
        </div>


        <div class="mt-4">
            <button type="submit" class="btn btn-outline-dark float-right">Save</button>
            <a href="{{ route('parts.index') }}" class="btn btn-link">Cancel</a>
        </div>
    </form>
</div>
@endsection