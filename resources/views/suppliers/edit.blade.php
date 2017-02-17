@extends('layouts.default')
@section('title','UPDATE')

@section('content')
<div class="col-md-offset-2 col-md-8">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h5>Update the Profile</h5>
    </div>
    <div class="panel-body">
      @include('shared.errors')

      <form method="POST" action="{{ route('suppliers.update', $supplier->id )}}">
        {{ method_field('PATCH')}}
        {{ csrf_field()}}

        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" name="name" class="form-control" value="{{ $supplier->name}}">
        </div>
        <div class="form-group">
          <label for="name">Contact Number:</label>
          <input type="text" name="contactNum" class="form-control" value="{{ $supplier->contactNum}}">
        </div>
        <div class="form-group">
          <label for="name">Email:</label>
          <input type="text" name="email" class="form-control" value="{{ $supplier->email}}">
        </div>
        <div class="form-group">
          <label for="name">Address:</label>
          <input type="text" name="address" class="form-control" value="{{ $supplier->address}}">
        </div>
        <div class="form-group">
          <label for="name">Note:</label>
          <input type="text" name="note" class="form-control" value="{{ $supplier->note}}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
      </form>
    </div>
  </div>
</div>
@stop
