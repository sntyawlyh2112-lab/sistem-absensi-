@extends('layouts.app')

@section('content')

<h2>Absensi</h2>

<a href="/absensi/create" class="btn btn-primary btn-sm">Tambah</a>
<a href="/absensi-pdf" class="btn btn-danger btn-sm">Export PDF</a>

<table class="table table-bordered mt-3">

<tr>
<th>No</th><th>Nama</th><th>Tanggal</th><th>Masuk</th><th>Pulang</th><th>Status</th><th>Aksi</th>
</tr>

@foreach($data as $d)

<tr>
<td>{{ $loop->iteration }}</td>
<td>{{ $d->mahasiswa->nama }}</td>
<td>{{ $d->tanggal }}</td>
<td>{{ $d->jam_masuk }}</td>
<td>{{ $d->jam_pulang }}</td>
<td>{{ $d->status }}</td>
<td>
<a href="/absensi/{{ $d->id }}/edit">Edit</a>
<form method="POST" action="/absensi/{{ $d->id }}">
@csrf @method('DELETE')
<button>Hapus</button>
</form>
</td>
</tr>

@endforeach

</table>

@endsection