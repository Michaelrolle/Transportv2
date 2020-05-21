@extends('layout.index')
@section('content')
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Quick Example</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->

  {{-- @if(isset($editDriver))
  <form method="post" action="{{ route('drivers.update', $editDriver->id) }}">
  @method('put')
  @else --}}
  <form method="post" action="{{ route('drivers.store') }}">
    {{-- @endif --}}
    @csrf
    <h1>{{$editDriver->id ?? ''}}</h1>
    <div class="card-body">
      <div class="form-group">
        <input type="hidden" id="driverId" name="id" value="{{$editDriver->id ?? ''}}">
        <label for="firstName">First Name</label>
        <input type="text" class="form-control" name="firstName"
          value="{{old('firstName', $editDriver->firstName ?? '')}}">
        <span class="small text-danger">{{ $errors->first('firstName') }}</span>
      </div>
      <div class="form-group">
        <label for="lastName">Last Name</label>
        <input type="text" class="form-control" name="lastName"
          value="{{old('lastName', $editDriver->lastName ?? '')}}">
        <span class="small text-danger">{{ $errors->first('lastName') }}</span>
      </div>
      <div class="form-group">
        <label>Driver Code</label>
        <select name="driverCode" class="form-control" value="{{old('driverCode', $editDriver->driverCode ?? '')}}">
          <option selected="{{old('driverCode', $editDriver->driverCode ?? '')}}">
            {{old('driverCode', $editDriver->driverCode ?? '')}}</option>
          @foreach($driverCodes as $code)
          <option value="{{$code->driverCode}}">{{$code->driverCode}}</option>
          @endforeach
        </select>
        <span class="small text-danger">{{ $errors->first('driverCode') }}</span>
      </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>

@endsection