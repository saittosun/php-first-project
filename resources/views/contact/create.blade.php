@extends('layout')

@section('title', 'Contact Us')

@section('content') 

 <form action="/contact" method="POST">
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
    <label for="message" class="col-form-label">Message</label>    
    <textarea name="message" class="form-control" id="message" cols="30" rows="10" value="{{old('message')}}"></textarea>
    <div style="color: red">
      {{ $errors->first('message')}}
    </div>
  </div>
  
  @csrf

  <button type="submit" class="btn btn-primary">Send A Message</button>

</form>

@endsection
