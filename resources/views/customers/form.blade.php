
<div class="form-group">
  <label for="active" class="col-form-label">Status</label>
  <select name="active" id="active" class="custom-select custom-select-sm">
    <option value="" disabled>Select custumer status</option>
    @foreach($customer->activeOptions() as $activeOptionKey => $activeOptionValue)
    <option value="{{$activeOptionKey}}" {{$customer->active == $activeOptionValue ? 'selected' : ''}} >{{$activeOptionValue}}</option>
    @endforeach  
  </select>
</div>

<div class="form-group">
  <label for="company_id" class="col-form-label">Status</label>
  <select name="company_id" id="company_id" class="custom-select custom-select-sm">
    @foreach($companies as $company)
      <option value="{{$company->id}}" {{ $company->id == $customer->company_id ? 'selected' : ''}}>{{$company->name}}</option>
    @endforeach
  </select>
</div>

@csrf