@extends('layouts.app')

@section('content')

@include('inc.alert')
<div class="container">
    <h1 class="text-decoration-underline">Tambah Barang Baru</h1>
    <a href="{{ route('item') }}" class="btn btn-secondary mt-3">Kembali</a>

    <div class="border border-dark mt-3 p-3">
        <form action="{{ route('item.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama dan Nama Serial</label>
                <input type="text" name="name" class="form-control" id="name" required>

                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="serial_number" class="form-label">Stok</label>
                <input type="number" name="actual_stock" class="form-control" id="actual_stock" required>

                @error('serial_number')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>



            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-select" name="status" required>
                    <option disabled selected>Select status</option>
                    <option value="0">Unavailable</option>
                    <option value="1">Available</option>
                </select>
                @error('status')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="category_id" class="form-label">Kategori</label>
                <select class="form-select" name="category_id" required>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('category_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="gudang_id" class="form-label">Gudang</label>
                <select class="form-select" name="gudang_id" required>
                    @foreach ($gudangs as $gudang)
                    <option value="{{ $gudang->id }}">{{ $gudang->nama }}</option>
                    @endforeach
                </select>
                @error('gudang_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="supplier_id" class="form-label">Supplier</label>
                <select class="form-select" name="supplier_id" required>
                    @foreach ($suppliers as $supplier)
                    <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                    @endforeach
                </select>
                @error('supplier_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Selesai</button>
        </form>
    </div>
</div>
@endsection
