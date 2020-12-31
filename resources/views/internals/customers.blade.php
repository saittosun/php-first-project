@extends('layout')

@section('title', 'Customer List')

@section('content')
  <h1>Customer List</h1>
  <form action="customers" method="POST">
    <div class="form-group">
      <label for="inputName" class="col-form-label">Name</label>
      <div class="input-group">
        <input type="text" name="name" class="form-control" id="inputName" value="{{old('name')}}">
      </div>
      <div style="color: red">
        {{ $errors->first('name')}}
      </div>
    </div>
    <div class="form-group">
      <label for="inputMail" class="col-form-label">Email</label>    
      <div class="input-group">
        <input type="text" name="email" class="form-control" id="inputMail" value="{{old('email')}}">
      </div>
      <div style="color: red">
        {{ $errors->first('email')}}
      </div>
    </div>
    <button type="submit" class="btn btn-primary my-3">Add Customer</button>

    @csrf
  </form>


  <ul>
      @foreach ($customers as $customer)
        <li>{{ $customer->name }} <span class="text-muted">({{$customer->email}})</span></li>
      @endforeach
  </ul>
@endsection