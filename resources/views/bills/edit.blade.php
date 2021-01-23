@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">
    
    <form action="{{ route('bills.update', ['bill' => $bill->id]) }}" method="POST">

        <!-- CSRF token -->
        @csrf
        @method('PUT')

        <!-- amount -->
        <div class="form-group">
            <label for="name">Amount</label>
            <input value="{{ $bill->name }}" name="name" type="text" class="form-control" id="name">
            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>

        <!-- PDV -->
        <div class="form-group">
            <label for="native-name">PDV</label>
            <input value="{{ $bill->PDV }}" name="PDV" type="text" class="form-control" id="PDV">
            @if ($errors->has('PDV'))
                <span class="text-danger">{{ $errors->first('native_name') }}</span>
            @endif
        </div>

        <!-- total amount -->
        <div class="form-group">
            <label for="total_amount">Total amount</label>
            <input value="{{ $bill->total_amount }}" name="total_amount" type="text" class="form-control" id="total_amount">
            @if ($errors->has('total_amount'))
                <span class="text-danger">{{ $errors->first('native_name') }}</span>
            @endif
        </div>

         <!-- publisher -->
         <div class="form-group">
            <label for="publisher">Publisher</label>
            <input value="{{ $bill->publisher }}" name="publisher" type="text" class="form-control" id="publisher">
            @if ($errors->has('publisher'))
                <span class="text-danger">{{ $errors->first('publisher') }}</span>
            @endif
        </div>

         <!-- billing number -->
         <div class="form-group">
            <label for="billing_number">Billing number</label>
            <input value="{{ $bill->billing_number }}" name="billing_number" type="text" class="form-control" id="billing_number">
            @if ($errors->has('billing_number'))
                <span class="text-danger">{{ $errors->first('billing_number') }}</span>
            @endif
        </div>

         <!-- billing address -->
         <div class="form-group">
            <label for="billing_address">Billing Address</label>
            <input value="{{ $bill->billing_address }}" name="total_amount" type="text" class="form-control" id="billing_address">
            @if ($errors->has('billing_address'))
                <span class="text-danger">{{ $errors->first('billing_address') }}</span>
            @endif
        </div>



        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{ route('bills.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection