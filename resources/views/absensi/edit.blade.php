<h1>Edit Absensi</h1>

<form action="/absensi/{{ $data->id }}" method="POST">
    @csrf
    @method('PUT')

    <input name="nama" value="{{ $data->nama }}"><br>
    <input name="nim" value="{{ $data->nim }}"><br>

    <select name="status">
        <option value="Hadir" {{ $data->status == 'Hadir' ? 'selected' : '' }}>Hadir</option>
        <option value="Izin" {{ $data->status == 'Izin' ? 'selected' : '' }}>Izin</option>
        <option value="Sakit" {{ $data->status == 'Sakit' ? 'selected' : '' }}>Sakit</option>
        <option value="Alpa" {{ $data->status == 'Alpa' ? 'selected' : '' }}>Alpa</option>
    </select>

    <button>Update</button>
</form>