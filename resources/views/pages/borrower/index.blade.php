@extends('layouts.app')

@section('content')

@include('inc.alert')
<div class="container">
    <h1 class="text-decoration-underline">List Peminjam</h1>
    <a href="{{ route('borrower.showAdd') }}" class="btn btn-primary mt-3">Tambah Peminjam Baru</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Peminjam</th>
                <th scope="col">Status</th>
                <th scope="col">Tanggal Pinjam</th>
                <th scope="col">Staff Id</th>
                <th scope="col">Nama dan No Seri Barang</th>
                <th scope="col">Perusahaan</th>
                <th scope="col">Penanggung Jawab</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($borrowers as $borrower)
            <tr>
                <th scope="row">{{ $loop->index+1 }}</th>
                <td>{{ $borrower->name }}</td>
                <td>
                    @if ($borrower->status == 1)
                    <span class="bg-success btn text-white">Aktif</span>
                    @else

                    <span class="bg-warning btn">Sudah Kembali</span>
                    @endif
                </td>
                <td>{{ $borrower->created_at->format('d-M-Y') }}</td>
                <td>{{ $borrower->staff_id }}</td>
                <td>{{ $borrower->item->name }}</td>
                <td>{{ $borrower->department->name }}</td>
                <td>{{ $borrower->user->name }}</td>
                <td>
                    <a href="{{ route('borrower.destroy', ['id' => $borrower->id]) }}" class="btn btn-danger">Hapus</a>
                    <a href="{{ route('borrower.showEdit', ['id' => $borrower->id]) }}" class="btn btn-warning">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
