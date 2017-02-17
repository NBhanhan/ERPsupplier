@extends('layouts.default')
@section('title',$supplier->name)
@section('content')
{{ $supplier->name }} - {{ $supplier->contactNum }} - {{ $supplier->email }}
- {{ $supplier->address }} - Note: {{ $supplier->note }} - TotalSpend: {{ $totalSpend }}

@stop
