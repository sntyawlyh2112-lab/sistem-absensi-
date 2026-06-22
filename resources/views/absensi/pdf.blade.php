<h2>Laporan Absensi</h2>

<table border="1" width="100%" cellpadding="5">

<tr>
<th>No</th><th>Nama</th><th>Tanggal</th><th>Masuk</th><th>Pulang</th><th>Status</th>
</tr>

@foreach($data as $d)

<tr>
<td>{{ $loop->iteration }}</td>
<td>{{ $d->mahasiswa->nama }}</td>
<td>{{ $d->tanggal }}</td>
<td>{{ $d->jam_masuk }}</td>
<td>{{ $d->jam_pulang }}</td>
<td>{{ $d->status }}</td>
</tr>

@endforeach

</table>