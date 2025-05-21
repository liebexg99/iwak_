@extends('layouts.app')

@section('title', 'Add Fish')

@section('content')
<h2>Add Fish</h2>
<form method="POST" action="{{ route('ikan.store') }}">
    @csrf
    <div class="mb-3">
        <label for="nama_ikan" class="form-label">Fish Name</label>
        <input type="text" name="nama_ikan" class="form-control" required>
        @error('nama_ikan')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="jenis_ikan_id" class="form-label">Fish Type</label>
        <select name="jenis_ikan_id" class="form-control" required>
            <option value="">Select Type</option>
            @foreach ($jenisIkan as $jenis)
                <option value="{{ $jenis->id }}">{{ $jenis->nama_jenis }}</option>
            @endforeach
        </select>
        @error('jenis_ikan_id')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="jenis_air_id" class="form-label">Water Type</label>
        <select name="jenis_air_id" class="form-control" required>
            <option value="">Select Water Type</option>
            @foreach ($jenisAir as $air)
                <option value="{{ $air->id }}">{{ $air->nama_air }}</option>
            @endforeach
        </select>
        @error('jenis_air_id')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="asal_ikan_id" class="form-label">Origin</label>
        <select name="asal_ikan_id" class="form-control" required>
            <option value="">Select Origin</option>
            @foreach ($asalIkan as $asal)
                <option value="{{ $asal->id }}">{{ $asal->nama_asal }}</option>
            @endforeach
        </select>
        @error('asal_ikan_id')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="stok" class="form-label">Stock</label>
        <input type="number" name="stok" class="form-control" required>
        @error('stok')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="harga" class="form-label">Price</label>
        <input type="number" step="0.01" name="harga" class="form-control" required>
        @error('harga')
            <div class="text-danger">{{ $message }}</div>''
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection