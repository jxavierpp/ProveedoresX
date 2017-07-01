@extends('index')
@section('content')
    <thead>
    <th>ID</th>
    <th>Nombre</th>
    <th>Email</th>
    <th>Telefono</th>
    </thead>
    @foreach ($proveedor as $supplier)
        <tr>
            <td>{{ $supplier->id }}</td>
            <td>{{ $supplier->supplierName }}</td>
            <td>{{ $supplier->supplierEmail }}</td>
            <td>{{ $supplier->supplierPhone }}</td>
        </tr>
    @endforeach
@endsection