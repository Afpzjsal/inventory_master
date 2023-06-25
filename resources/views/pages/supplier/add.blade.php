@extends('layouts.app')

@section('content')

@include('inc.alert')
<div class="container">
    <h1 class="text-decoration-underline">Tambah Supplier Baru</h1>
    <a href="{{ route('supplier') }}" class="btn btn-secondary mt-3">Kembali</a>

    <div class="border border-dark mt-3 p-3">
        <form action="{{ route('supplier.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama brand</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="mb-3">
                <label for="incharge_name" class="form-label">Penanggung Jawab</label>
                <input type="text" class="form-control" name="incharge_name">
            </div>
            <div class="mb-3">
                <label for="contact_number" class="form-label">Telepon</label>
                <input type="number" class="form-control" id="contact_number" name="contact_number">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
