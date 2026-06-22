@extends('layouts.app')

@section('content')

<h2>Data Mahasiswa</h2>

<a class="btn btn-success btn-sm mb-3" href="/mahasiswa/create">
    Tambah Mahasiswa
</a>

<form action="/mahasiswa" method="GET" class="mb-3">
        <input type="text" name="search" placeholder="Cari Nama Mahasiswa">
        <button class="submit" class="btn btn-primary btn-sm">Cari</button>
</form>

<table class="table table-bordered">

<tr>
    <th>No</th>
    <th>Nama</th>
    <th>NIM</th>
    <th>Aksi</th>
</tr>

@foreach($data as $item)

<tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $item->nama }}</td>
    <td>{{ $item->nim }}</td>
    <td>
        <a class="btn btn-warning btn-sm" href="/mahasiswa/{{ $item->id }}/edit">Edit</a>

        <form action="/mahasiswa/{{ $item->id }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-sm">Hapus</button>
        </form>
    </td>
</tr>

@endforeach

</table>

@endsection