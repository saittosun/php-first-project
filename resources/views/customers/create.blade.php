@extends('layout')

@section('title', 'Add new customer')

@section('content')
  <h1>Add New Customer</h1>
  <form action="/customers" method="POST">
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

    <div class="form-group">
      <label for="company_id" class="col-form-label">Status</label>
      <select name="company_id" id="company_id" class="custom-select custom-select-sm">
        @foreach($companies as $company)
          <option value="{{$company->id}}">{{$company->name}}</option>
        @endforeach
      </select>
    </div>
    <button type="submit" class="btn btn-primary my-3">Add Customer</button>

    @csrf
  </form>
@endsection