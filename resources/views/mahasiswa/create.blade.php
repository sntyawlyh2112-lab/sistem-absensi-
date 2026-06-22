<h1>Tambah Mahasiswa</h1>

<form action="/mahasiswa" method="POST">
    @csrf

    Nama
    <br>
    <input type="text" name="nama">

    <br><br>

    NIM
    <br>
    <input type="text" name="nim">

    <br><br>

    Jurusan
    <br>
    <input type="text" name="jurusan">

    <br><br>

    <button type="submit">
        Simpan
    </button>
</form>