@extends('layouts.app')

@section('content')

@include('inc.alert')
<div class="container">
    <h1 class="text-decoration-underline">Edit Gudang</h1>
    <a href="{{ route('gudang') }}" class="btn btn-secondary mt-3">Back</a>

    <div class="border border-dark mt-3 p-3">
        <form action="{{ route('gudang.update', ['id'=>request()->route('id')]) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Gudang</label>
                <input type="text" class="form-control" name="nama" id="name" value="{{ $gudang->nama }}" required>
            </div>

            <div class="mb-3">
                <label for="location" class="form-label">Lokasi</label>
                <select class="form-select" name="location" required>
                    @for ($i = 1; $i < 7; $i++) <option value="{{ $i }}" {{ $i==$gudang->location ? 'selected' : ''
                        }}>Level {{ $i }}
                        </option>
                        @endfor
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection