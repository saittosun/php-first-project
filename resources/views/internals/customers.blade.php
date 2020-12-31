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
    <div class="form-group">
      <label for="active" class="col-form-label">Status</label>
      <select name="active" id="active" class="custom-select custom-select-sm">
        <option value="" disabled>Select custumer status</option>
        <option value="1">Active</option>
        <option value="0">Inactive</option>
      </select>
    </div>
    <button type="submit" class="btn btn-primary my-3">Add Customer</button>

    @csrf
  </form>

  <div class="row">
    <div class="col-6">   
      <h3>Active Customers</h3> 
      <ul>
          @foreach ($activeCustomers as $activeCustomer)
            <li>{{ $activeCustomer->name }} <span class="text-muted">({{$activeCustomer->email}})</span></li>
          @endforeach
      </ul>
    </div>
    <div class="col-6"> 
      <h3>In-Active Customers</h3> 
      <ul>
          @foreach ($inactiveCustomers as $inactiveCustomer)
            <li>{{ $inactiveCustomer->name }} <span class="text-muted">({{$inactiveCustomer->email}})</span></li>
          @endforeach
      </ul>
    </div>
  </divC
@endsection