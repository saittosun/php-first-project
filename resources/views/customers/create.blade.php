@extends('layout')

@section('title', 'Add new customer')

@section('content')
  <h1>Add New Customer</h1>
  <form action="/customers" method="POST">
    @include('customers.form')
    <button type="submit" class="btn btn-primary my-3">Add Customer</button>
  </form>
@endsection