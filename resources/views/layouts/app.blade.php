<!DOCTYPE html>
<html>
<head>
    <title>Absensi Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="d-flex">

<div class="bg-dark text-white p-3" style="width:240px; min-height:100vh;">
    <h4>MENU</h4>
    <hr>
    <a href="/dashboard" class="text-white d-block">Dashboard</a>
    <a href="/mahasiswa" class="text-white d-block">Mahasiswa</a>
    <a href="/absensi" class="text-white d-block">Absensi</a>
    <a href="/mahasiswa/create" class="text-white d-block">Tambah Mahasiswa</a>
    <a href="/absensi/create" class="text-white d-block">Tambah Absensi</a>
</div>

<div class="p-4 w-100">
    @yield('content')
</div>

</div>

</body>
</html>