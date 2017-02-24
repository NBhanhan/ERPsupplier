@extends('layouts.default')
@section('title', 'SEARCH')

@section('content')
<div class="col-md-offset-2 col-md-8">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h5>SEARCH</h5>
    </div>
    <div class="panel-body">
      @include('shared.errors')

      <form method="POST" action="{{ route('suppliers.result') }}">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" name="name" class="form-control">
        </div>



        <button type="submit" class="btn btn-primary">SUBMIT</button>
      </form>
    </div>
  </div>
</div>

@stop
