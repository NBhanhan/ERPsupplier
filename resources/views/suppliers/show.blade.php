@extends('layouts.default')
@section('title',$supplier->name)
@section('content')
{{ $supplier->name }} - {{ $supplier->contactNum }} - {{ $supplier->email }}
- {{ $supplier->address }} - {{ $supplier->note }} - {{ $supplier->record }}
- {{ $supplier->totalSpend }}
@stop
