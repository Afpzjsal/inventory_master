@extends('layouts.app')

@section('content')

@include('inc.alert')
<div class="container">
    <h1 class="text-decoration-underline">List Barang</h1>
    <a href="{{ route('item.showAdd') }}" class="btn btn-primary mt-3">Tambah Barang</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama dan No Serial Barang</th>
                <th scope="col">Stok Barang</th>
                <th scope="col">Kategori</th>
                <th scope="col">Supplier</th>
                <th scope="col">Status</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
            <tr>
                <th scope="row">{{ $loop->index+1 }}</th>
                <td>{{ $item->name }}</td>
                <td>{{ $item->serial_number }}</td>
                <td>{{ $item->category->name ?? 'N/A' }}</td>
                <td>{{ $item->supplier->name }}</td>
                @if ($item->status == '1')
                <td>
                    <span class="btn bg-success text-white">Available</span>
                </td>
                @else
                <td>Unavailable</td>
                @endif
                <td>
                    <a href="{{ route('item.destroy', ['id' => $item->id]) }}" class="btn btn-danger">Hapus</a>
                    <a href="{{ route('item.showEdit' , ['id' => $item->id]) }}" class="btn btn-warning">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
