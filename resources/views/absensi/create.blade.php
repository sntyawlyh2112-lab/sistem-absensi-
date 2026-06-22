<h1>Tambah Absensi Mahasiswa</h1>

<a href="/dashboard">Dashboard</a>
|
<a href="/absensi">Kembali</a>

<hr>

<form action="/absensi" method="POST">

@csrf

<label>Mahasiswa</label>
<br>

<select name="mahasiswa_id">

@foreach($mahasiswa as $m)

<option value="{{ $m->id }}">
{{ $m->nama }}
</option>

@endforeach

</select>

<br><br>

<label>Tanggal</label>
<br>

<input type="date" name="tanggal">

<br><br>

<label>Jam Masuk</label>
<br>

<input type="time" name="jam_masuk">

<br><br>

<label>Jam Pulang</label>
<br>

<input type="time" name="jam_pulang">

<br><br>

<label>Status</label>
<br>

<select name="status">

<option value="hadir">Hadir</option>
<option value="izin">Izin</option>
<option value="sakit">Sakit</option>
<option value="alpa">Alpa</option>

</select>

<br><br>

<button type="submit">
Simpan
</button>

</form>