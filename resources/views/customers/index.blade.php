@extends('layout')

@section('title', 'Customer List')

@section('content')
  <h1>Customer List</h1>
  <p><a href="customers/create">Add new customer</a></p>

  @foreach($customers as $customer)
    <div class="row">
      <div class="col-2">   
        {{$customer->id}}
      </div>
      <div class="col-4">
        <a href="/customers/{{$customer->id}}">{{$customer->name}}</a>
      </div>
      <div class="col-4">{{$customer->company->name}}</div>
      <div class="col-2">{{$customer->active}}</div>
    </div>
  @endforeach
  
@endsection