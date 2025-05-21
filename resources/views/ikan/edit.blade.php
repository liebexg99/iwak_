@extends('layouts.app')

@section('title', 'Edit Fish')

@section('content')
<h2>Edit Fish</h2>
<form method="POST" action="{{ route('ikan.update', $ikan) }}">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="nama_ikan" class="form-label">Fish Name</label>
        <input type="text" name="nama_ikan" class="form-control" value="{{ $ikan->nama_ikan }}" required>
        @error('nama_ikan')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="jenis_ikan_id" class="form-label">Fish Type</label>
        <select name="jenis_ikan_id" class="form-control" required>
            <option value="">Select Type</option>
            @foreach ($jenisIkan as $jenis)
                <option value="{{ $jenis->id }}" {{ $ikan->jenis_ikan_id == $jenis->id ? 'selected' : '' }}>{{ $jenis->nama_jenis }}</option>
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
                <option value="{{ $air->id }}" {{ $ikan->jenis_air_id == $air->id ? 'selected' : '' }}>{{ $air->nama_air }}</option>
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
                <option value="{{ $asal->id }}" {{ $ikan->asal_ikan_id == $asal->id ? 'selected' : '' }}>{{ $asal->nama_asal }}</option>
            @endforeach
        </select>
        @error('asal_ikan_id')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="stok" class="form-label">Stock</label>
        <input type="number" name="stok" class="form-control" value="{{ $ikan->stok }}" required>
        @error('stok')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="harga" class="form-label">Price</label>
        <input type="number" step="0.01" name="harga" class="form-control" value="{{ $ikan->harga }}" required>
        @error('harga')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection