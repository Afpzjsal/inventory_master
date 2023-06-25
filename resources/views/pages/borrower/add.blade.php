@extends('layouts.app')

@section('content')

@include('inc.alert')
<div class="container">
    <h1 class="text-decoration-underline">Tambah Peminjam</h1>
    <a href="{{ route('borrower') }}" class="btn btn-secondary mt-3">Kembali</a>

    <div class="border border-dark mt-3 p-3">
        <form action="{{ route('borrower.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama Peminjam</label>
                <input type="text" name="name" class="form-control" id="name" required>

                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="staff_id" class="form-label">Staff Id</label>
                <input type="text" name="staff_id" class="form-control" id="staff_id" required>

                @error('staff_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
             
            <div class="mb-3">
                <label for="created_at" class="form-label">Tanggal Peminjam</label>
                <input type="date" name="created_at" class="form-control" id="created_at" required>

                @error('created_at')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
             
            <div class="mb-3">
                <label for="item_id" class="form-label">Nama dan Nomor Serial Barang </label>
                <select class="form-select" name="item_id" id="item_id" required>
                    <option>Pilih Barang</option>
                    @foreach ($items as $item)
                    <option data-incharge="{{ $item->supplier_id }}" value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
                @error('item_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
  
            <div class="mb-3">
                <label for="department_id" class="form-label">Perusahaan</label>
                <select class="form-select" name="department_id" required>
                    @foreach ($departments as $department)
                    <option value="{{ $department->id }}">{{ $department->name }}</option>
                    @endforeach
                </select>
                @error('department_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="incharge_name" class="form-label">Penanggung Jawab</label>
                <input type="text" class="form-control" value="{{ Auth::user()->name }}" disabled>
                <input id="incharge_id" type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                @error('user_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <button disabled id="submit" type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<script>
    const selectedItem = document.getElementById("item_id")
    const incharge_id = document.getElementById("incharge_id");
    const submitBtn = document.getElementById("submit")

    selectedItem.onchange = (v) => {
        submitBtn.disabled = !selectedItem
        if (!selectedItem.value) return;

        console.log("aaa");
        const selected = selectedItem.options[selectedItem.selectedIndex];
        incharge_id.value = selected.dataset.incharge
        console.log(incharge_id.value);
    }
</script>
@endsection
