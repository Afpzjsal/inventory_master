@extends('layouts.app')

@section('content')

@include('inc.alert')
<div class="container">
    <h1 class="text-decoration-underline">List Gudang</h1>
    <a href="{{ route('gudang.showAdd') }}" class="btn btn-primary mt-3">Tambah Gudang Baru</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Gudang</th>
                <th scope="col">Lokasi</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($gudang as $g)
            <tr>
                <th scope="row">{{ $loop->index+1 }}</th>
                <td>{{ $g->nama }}</td>
                <td>Level {{ $g->location }}</td>
                <td>
                    <a href="{{ route('gudang.destroy', ['id' => $g->id]) }}"
                        class="btn btn-danger">Hapus</a>
                    <a href="{{ route('gudang.showEdit', ['id' => $g->id]) }}"
                        class="btn btn-warning">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
