@extends('layouts.app')

@section('content')

@include('inc.alert')
<div class="container">
    <h1 class="text-decoration-underline">List Suppliers</h1>
    <a href="{{ route('supplier.showAdd') }}" class="btn btn-primary mt-3">Tambah Supplier Baru</a>
    <table class="table mt-2">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Brand</th>
                <th scope="col">Penanggung jawab</th>
                <th scope="col">Kontak</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($suppliers as $supplier)
            <tr>
                <th scope="row">{{ $loop->index+1 }}</th>
                <td>{{ $supplier->name }}</td>
                <td>{{ $supplier->incharge_name }}</td>
                <td>{{ $supplier->contact_number }}</td>
                <td>
                    <a href="{{ route('supplier.destroy', ['id'=>$supplier->id]) }}" class="btn btn-danger">Hapus</a>
                    <a href="{{ route('supplier.showEdit', ['id'=>$supplier->id]) }}" class="btn btn-warning">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
