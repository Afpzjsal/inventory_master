@extends('layouts.app')

@section('content')

@include('inc.alert')
<div class="container">
    <h1 class="text-decoration-underline">List Perusahaan</h1>
    <a href="{{ route('department.showAdd') }}" class="btn btn-primary mt-3">Tambah Perusahaan Baru</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Perusahaan</th>
                <th scope="col">Lokasi</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($departments as $department)
            <tr>
                <th scope="row">{{ $loop->index+1 }}</th>
                <td>{{ $department->name }}</td>
                <td>Level {{ $department->location }}</td>
                <td>
                    <a href="{{ route('department.destroy', ['id' => $department->id]) }}"
                        class="btn btn-danger">Hapus</a>
                    <a href="{{ route('department.showEdit', ['id' => $department->id]) }}"
                        class="btn btn-warning">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
