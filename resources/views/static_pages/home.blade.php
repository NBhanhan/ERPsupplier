@extends('layouts.default')

@section('content')
  <div class="jumbotron">
    <h1>SUPPLIERS</h1>
    <p class="lead">
      ERP Suppliers
    </p>
    <p>
      Test
    </p>
    <p>
      <a class="btn btn-lg btn-success" href="{{ route('create') }}" role="button">REGISTER</a>
      <a class="btn btn-lg btn-success" href="#" role="button">SEARCH</a>
      <a class="btn btn-lg btn-success" href="#" role="button">UPDATE</a>
      <a class="btn btn-lg btn-success" href="#" role="button">DESTROY</a>
    </p>
  </div>
@stop
