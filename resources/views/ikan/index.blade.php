@extends('layouts.app')

@section('title', 'Fish List')

@section('content')
<h2>Fish List</h2>
<a href="{{ route('ikan.create') }}" class="btn btn-primary mb-3">Add Fish</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Water Type</th>
            <th>Origin</th>
            <th>Stock</th>
            <th>Price</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($ikan as $fish)
            <tr>
                <td>{{ $fish->nama_ikan }}</td>
                <td>{{ $fish->jenisIkan->nama_jenis }}</td>
                <td>{{ $fish->jenisAir->nama_air }}</td>
                <td>{{ $fish->asalIkan->nama_asal }}</td>
                <td>{{ $fish->stok }}</td>
                <td>{{ number_format($fish->harga, 2) }}</td>
                <td>
                    <a href="{{ route('ikan.edit', $fish) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('ikan.destroy', $fish) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection