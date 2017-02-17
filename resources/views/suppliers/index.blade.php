@extends('layouts.default')
@section('title','All Suppliers')
@section('content')
<div class="col-md-offset-2 col-md-8">
  <h1>ALL SUPPLIERS</h1>
    <ul class="suppliers">
      @foreach($suppliers as $supplier)
      <li>
        <a href="{{ route('suppliers.show', $supplier->id )}}" class="suppliername">{{ $supplier->name }}</a>
        <form action="{{ route('suppliers.destroy', $supplier->id) }}" method="post">
          {{ csrf_field() }}
          {{ method_field('DELETE') }}
          <button type="submit" class="btn btn-sm btn-danger delete-btn">DELETE</button>
        </form>
      </li>
      @endforeach

</ul>
</div>
@stop
