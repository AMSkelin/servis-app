<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('content')
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Amount</th>
        <th scope="col">PDV</th>
        <th scope="col">Total amount</th>
        <th scope="col">Billed at</th>
        <th scope="col">Publisher</th>
        <th scope="col">Billing number</th>
        <th scope="col">Billing address</th>
      </tr>
    </thead>
    <tbody>
      @foreach($bills->items() as $bill)
          <tr>
              <td>{{ $bill->id }}</td>
              <td>{{ $bill->amount }}</td>
              <td>{{ $bill->PDV }}</td>
              <td>{{ $bill->total_amount }}</td>
              <td>{{ $bill->billed_at }}</td>
              <td>{{ $bill->publisher }}</td>
              <td>{{ $bill->billing_number }}</td>
              <td>{{ $bill->billing_address }}</td>
          </tr>
      @endforeach
      </tr>
    </tbody>
  </table>

@endsection
