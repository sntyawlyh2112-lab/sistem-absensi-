@extends('layouts.app')

@section('content')

<h2>Dashboard</h2>

<a href="/logout" class="btn btn-danger mb-3">
    Logout
</a>

<div class="row">

<div class="col-md-3"><div class="card p-3">Mahasiswa <h3>{{ $jumlahMahasiswa }}</h3></div></div>
<div class="col-md-3"><div class="card p-3">Hadir <h3>{{ $hadir }}</h3></div></div>
<div class="col-md-3"><div class="card p-3">Izin <h3>{{ $izin }}</h3></div></div>
<div class="col-md-3"><div class="card p-3">Sakit/Alpa <h3>{{ $sakit + $alpa }}</h3></div></div>

</div>

<hr>

<h4>Grafik</h4>
<canvas id="chart"></canvas>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
new Chart(document.getElementById('chart'), {
type:'bar',
data:{
labels:['Hadir','Izin','Sakit','Alpa'],
datasets:[{
data:[{{ $hadir }},{{ $izin }},{{ $sakit }},{{ $alpa }}]
}]
}
});
</script>

@endsection