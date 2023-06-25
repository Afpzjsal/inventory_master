@extends('layouts.app')

@section('content')

@include('inc.alert')
<div class="container">
    <h1 class="text-decoration-underline">Edit Perusahaan</h1>
    <a href="{{ route('department') }}" class="btn btn-secondary mt-3">Back</a>

    <div class="border border-dark mt-3 p-3">
        <form action="{{ route('department.update', ['id'=>request()->route('id')]) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama Perusahaan</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $department->name }}" required>
            </div>

            <div class="mb-3">
                <label for="location" class="form-label">Lokasi</label>
                <select class="form-select" name="location" required>
                    @for ($i = 1; $i < 7; $i++) <option value="{{ $i }}" {{ $i==$department->location ? 'selected' : ''
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
