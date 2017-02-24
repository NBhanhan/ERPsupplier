@extends('layouts.default')
@section('title','Search Results')
@section('content')
<div class="col-md-offset-2 col-md-8">
  <h1>Search Results</h1>
    <ul class="suppliers">
      @foreach($suppliers as $supplier)
      <li>
        <a href="{{ route('suppliers.show', $supplier->id )}}" class="suppliername">{{ $supplier->name }}</a>

      </li>
      @endforeach

</ul>
</div>
@stop
