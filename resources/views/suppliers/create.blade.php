@extends('layouts.default')
@section('title', 'REGISTER')

@section('content')
<div class="col-md-offset-2 col-md-8">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h5>ADD A NEW SUPPLIER</h5>
    </div>
    <div class="panel-body">
      @include('shared.errors')

      <form method="POST" action="{{ route('suppliers.store') }}">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" name="name" class="form-control" value="{{ old('name')}}">
        </div>
        <div class="form-group">
          <label for="contactNum">Contact Number:</label>
          <input type="text" name="contactNum" class="form-control" value="{{ old('contactNum')}}">
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="text" name="email" class="form-control" value="{{ old('email')}}">
        </div>
        <div class="form-group">
          <label for="address">Address:</label>
          <input type="text" name="address" class="form-control" value="{{ old('address')}}">
        </div>
        <div class="form-group">
          <label for="note">Note:</label>
          <input type="text" name="note" class="form-control" value="{{ old('note')}}">
        </div>


        <button type="submit" class="btn btn-primary">SUBMIT</button>
      </form>
    </div>
  </div>
</div>

@stop
